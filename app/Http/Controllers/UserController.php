<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Curl\Curl;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
// use Goutte\Client;
// use Symfony\Component\Panther\Client;
use Longman\TelegramBot\Entities\Update;
use Telegram\Bot\Api;
use Carbon\Carbon;
use App\Models\Coin;
use Illuminate\Database\Query\Expression;

use function GuzzleHttp\Promise\each;

class UserController extends Controller
{
///////////////////    LOGIN METHODS   /////////////////
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('web')->attempt(['username' => $request['username'], 'password' => $request['password']]))
        {

            return redirect('/home');
        }
        else return redirect()->back()->with('info', "Incorrect username or password");
    }
/////////////////////    LOGOUT     ////////////////////
    public function getLogout()
    {
        Auth::guard('web')->logout();
        return redirect('login');
    }
    public function postAddCoin(Request $request){


        if(!$request->has('id')){
           $this->validate($request, [
               'smart_chain' => 'required|unique:coins',
           ]);
       }else{
          $this->validate($request, [
               'smart_chain' => 'required||unique:coins',
           ]);
       }

         // Code for coin validation

         $client = new CoinGeckoClient();
         $data = $client->derivatives()->getExchanges();
         $response = $client->getLastResponse();
         $headers = $response->getHeaders();

         try{
         $info = $client->contract()->getContract('binance-smart-chain', $request->smart_chain);
         }
          catch(\Exception $e){
               try{
               $info = $client->contract()->getContract('ethereum', $request->smart_chain);
               }
                catch(\Exception $e){
                   return redirect()->back()->with('alert','Please enter valid Smart Chain Contact Address');
               }
         }





             if ($request->hasFile('logo')) {
                     $image = $request->file('logo');
                     $filename =  time().'.'.$image->getClientOriginalExtension();
                     $destinationPath = public_path();
                     $image->move($destinationPath, $filename);
               }

             DB::table('coins')->insert([
                 'name' => $request->name??$info['name'],
                 'user_id' => auth()->user()->id,
                 'symbol' => $request->symbol??$info['symbol'],
                 'description' => $request->description??$info['description']['en'],
                 'logo' => $filename??$info['image']['large'],
                 'price' => $request->price??$info['market_data']['current_price']['usd'],
                 'market_cap' => $request->market_cap??$info['market_data']['market_cap']['usd'],
                 'volume' => $info['market_data']['price_change_24h']??null,
                 'rank' => $info['market_cap_rank']??null,
                 'launch_date' => $request->launch_date??$info['last_updated'],
                 'smart_chain' => $request->smart_chain??null,
                 'website' => $request->website??$info['links']['homepage'][0],
                 'telegram' => $request->telegram??$info['telegram_channel_identifier']??null,
                 'twitter' => $request->twitter??$info['twitter_screen_name']??null,
                 'pancake' => $request->pancake??$info['announcement_url'][0]??null,
                 'discord' => $request->discord??$info['chat_url'][0]??null,
             ]);


         return redirect('home')->with('success','Successfully Added a Coin');
    }

    public function test()
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot1948749330:AAHXw2bkqClqRJ6KyUWqH4tgU4EYmRzHHfE/getUpdates');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = '';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        // dd($result);
        $data = json_decode($result,true)['result'];

        $data = end($data);
        dd($data);

        $data = $data['channel_post']['text'];
        // $data = json_last_error();
        // $data = json_encode($data, JSON_UNESCAPED_SLASHES);
        // $data = json_decode($data);
         DB::table('coins')->insert([
                'name' => $data
            ]);

        $data = DB::table('coins')->orderBy('id','desc')->pluck('name')->first();
        $data = explode('Initial', $data);
        $data[1] = explode('Token', $data[1]);
        $data[2] = explode('DEXTools:', $data[1][1]);


        // dd($data[0],$data[1][0],$data[2][0]);
        $data[2][0] = str_replace(' contract:','',$data[2][0]);
        $data[1][0] = str_replace('Liquidity: ','',$data[1][0]);
        $data[0] = str_replace('ðŸ¥ž New pair at Pancakeswap V2 ðŸ¥ž','',$data[0]);

        if(DB::table('coins')->where('name',$data[0])->first()){
            DB::table('coins')->orderBy('id','desc')->limit(1)->delete();

            $res = (object) null;
            $res->msg = false;
            return $res;
        }
        else{
             DB::table('coins')->insert([
            'name' => $data[0],
            'smart_chain' => $data[2][0],
            'price' => $data[1][0],
            ]);

            $id = DB::table('coins')->orderBy('id','desc')->pluck('id')->first();
            $id--;

            DB::table('coins')->where('id', $id)->delete();
            $obj = DB::table('coins')->orderBy('id','desc')->first();
            $res = (object) null;
            $res->msg = true;
            $res->data = '<tr class="text-center"><td><a target="_blank" href="https://poocoin.app/tokens/'.$obj->smart_chain.'">'.$data[0].'</a></td><td>'.\Carbon\Carbon::createFromTimeStamp(strtotime($obj->created_at))->diffForHumans().'</td><td><i class="fas fa-check-circle text-success font-size-xl"></i></td><td><i class="fas fa-times-circle text-danger font-size-xl"></i></td><td><img src="img/3020989.png" class="img-fluid " style="height: 35px;"
                                            alt="Waitting">
                                    </td>
                                    <td>
                                        <i class="fas fa-exclamation-triangle font-size-xl text-warning mr-3"></i>
                                        0
                                    </td>
                                    <td>
                                        <!-- <img src="img/3020989.png" class="img-fluid " style="height: 35px;"
                                            alt="Waitting"> -->'.$data[1][0].'

                                    </td>
                                    <td>
                                        <a href=""><i class="fas fa-paper-plane font-size-xl text-success"></i></a>
                                    </td>
                                    <td>
                                        <span class="d-flex">
                                            <a target="_blank" href="https://exchange.pancakeswap.finance/#/swap?outputCurrency='.$obj->smart_chain.'"><img src="img/face.png" class="img-fluid m-0"></a>
                                            <a target="_blank" href="https://poocoin.app/tokens/'.$obj->smart_chain.'" class="text-drbg"> <i
                                                    class="fas fa-poo font-size-xl mx-2"></i></a>
                                            <a href=""><i class="fas fa-share-alt text-primary font-size-xl"></i></a>
                                        </span>
                                    </td>
                                </tr>';

            // dd($res->data);
            return $res;
        }

    }
    public function testing(){

        $bot_api_key  = '1912510906:AAGxcy3Ie_LAKAjPllp6ONzeqojZUD2q668';
        $bot_username = 'jackspparowbot';
            try {
                // Create Telegram API object
                $telegram = new \Longman\TelegramBot\Telegram($bot_api_key, $bot_username);
                // Enable MySQL
                $telegram->useGetUpdatesWithoutDatabase();

                // Handle telegram getUpdates request
                $data = $telegram->handleGetUpdates();

                // dd($data->result[0]->channel_post['text']);
        if(!empty($data->result)){

                DB::table('coins')->insert([
                    'name' => $data->result[0]->channel_post['text']
                ]);

                $data = DB::table('coins')->orderBy('id','desc')->pluck('name')->first();
                 if(strpos($data, "Powered By TeleFeed") !== false ){
                    DB::table('coins')->orderBy('id','desc')->limit(1)->delete();

                    $res = (object) null;
                    $res->msg = false;
                    return $res;
                }
                $data = explode('Initial', $data);
                $data[1] = explode('Token', $data[1]);
                $data[2] = explode('DEXTools:', $data[1][1]);

             //dd($data[0],$data[1][0],$data[2][0]);
            $data[2][0] = str_replace(' contract:','',$data[2][0]);
            $data[1][0] = str_replace('Liquidity: ','',$data[1][0]);

        if(DB::table('coins')->where('name',$data[0])->first()){
            DB::table('coins')->orderBy('id','desc')->limit(1)->delete();

            $res = (object) null;
            $res->msg = false;
            return $res;
        }
        else{
            $data[0] = str_replace('🥞 New pair at PancakeSwap V2 🥞','',$data[0]);
            $token=$data[2][0];
           $token= preg_replace("/\s+/", "", $token);

            $client = new Client();
            $client = new Client(HttpClient::create(['timeout' => 60]));
            $crawler = $client->request('GET', 'https://bscscan.com/token/'.$token);

            $key=null;
            $text=  $crawler->filter('div[class="card-body"]')->text();
            $dataw=explode(' ',$text);

                $target = "Holders:";
                if (in_array($target, $dataw)) {
                    $key = array_search($target, $dataw);
                }

                $holders = $dataw[$key+1];
                $holders=str_replace(",","",$holders);
                $site_url=null;
            if($crawler->filter('div[id="ContentPlaceHolder1_tr_officialsite_1"]')->count() > 0)
            {
                $official=  $crawler->filter('div[id="ContentPlaceHolder1_tr_officialsite_1"]')->text();
                $oficial_site=explode(' ',$official);


                            if($oficial_site[2] !=null)
                            {
                                $site_url= $oficial_site[2];
                                    }
            }
            else{
                $site_url=null;
            }

         $crawler->filter('a[class="link-hover-secondary"]')->each(function ($node) {
            $hrefs = $node->extract(array('href'));

            });
         $links = $crawler->filter('a[class="link-hover-secondary"]')->each(function($node) {
            $href  = $node->attr('href');
            $title = $node->attr('title');
            $text  = $node->text();

            return compact('href', 'title', 'text');
             });
    // dd($links);
    $reddit=null;
    $twitter=null;
    $github=null;
    $master=null;
    $coinmarketcap=null;
    $telegram=null;
    $coingecko=null;
    foreach($links as $link){

       $string=$link['href'];
        if(strpos($string, 'reddit') !== false){
            $reddit=$link['href'];

        }

        if(strpos($string, 'twitter') !== false){
            $twitter=$link['href'];
        }

        if(strpos($string, 'github') !== false){
            $github=$link['href'];
        }

        if(strpos($string, 'master') !== false){
            $master=$link['href'];
        }
        if(strpos($string, 'coinmarketcap') !== false){
            $coinmarketcap=$link['href'];
        }

        if(strpos($string, 't.me') !== false){
            $telegram=$link['href'];
        }

        if(strpos($string, 'coingecko') !== false){
            $coingecko=$link['href'];
        }

    }
    $pr=explode("$",$data[1][0]);
    $pric = str_replace(',','',$pr[1]);



    try{

        if(strlen($token) ==42){
       $transfer = shell_exec("node scraper.js '".$token."'");
      $transfer= str_replace(",","",$transfer);
        }
        else{
           $transfer =null;
        }
       }
       catch(Expression $e){

       }








        require '../vendor/autoload.php';

        $httpClient2 = new \GuzzleHttp\Client();

        $response = $httpClient2->get('https://bscscan.com/address/'.$token.'#code');
        $htmlString2 = (string) $response->getBody();

        // HTML is often wonky, this suppresses a lot of warnings
        libxml_use_internal_errors(true);

        $doc2 = new \DOMDocument();
        $doc2->loadHTML($htmlString2);
        $xpath2 = new \DOMXPath($doc2);
        $code = $xpath2->evaluate('//div[@class="col-md-12"]//h3[@class="h6 text-dark font-weight-bold mb-4"]//strong');
        //  dd($code);
        $result2=[];
        foreach ($code as $key => $coder) {
            $result2['code'] =$coder->textContent;
        }
        $code_verifed=null;
        if(empty($result2)){
           $code_verifed=0;
        }
        else{
            $code_verifed=1;
        }

        $httpClient3 = new \GuzzleHttp\Client();
        $response3 = $httpClient3->get('https://bscscan.com/readContract?m=normal&a='.$token.'&v='.$token.'&t=false');
        $htmlString3 = (string) $response3->getBody();

        // HTML is often wonky, this suppresses a lot of warnings
        libxml_use_internal_errors(true);

        $doc3 = new \DOMDocument();
        $doc3->loadHTML($htmlString3);
        $xpath3 = new \DOMXPath($doc3);

        $owner = $xpath3->evaluate('//div[@class="alert alert-warning mb-0"]');

        // dd($owner);
        $result3=[];
        foreach ($owner as $key => $own) {

            $result3['owner'] =$own->textContent;
        }
        $owner_verifed=null;
            if(empty($result3))
            {
                $owner_verifed=1;
            }
            elseif($result3['owner']=="Sorry, we were unable to retrieve a valid Contract ABI for this contract. Unable to read contract information"){
           $owner_verifed=0;
             }

             DB::table('coins')->insert([
            'name' => $data[0],
            'smart_chain' => $data[2][0],
            'price' =>$pric,
            'holders'=> $holders,
            'code'=> $code_verifed,
            'owner'=> $owner_verifed,
            'seller'=>$transfer,
            'offical_site'=>$site_url,
            'reddit'=>$reddit,
            'github'=>$github,
            'twitter'=>$twitter,
            'whitepaper'=>$master,
            'market_cap'=>$coinmarketcap,
            'telegram'=>$telegram,
            'coingecko'=>$coingecko,
            ]);

            $id = DB::table('coins')->orderBy('id','desc')->pluck('id')->first();
            $id--;

            DB::table('coins')->where('id', $id)->delete();
            $obj = DB::table('coins')->orderBy('id','desc')->first();
            $res = (object) null;
            $res->msg = true;
            $name= explode("(",$data[0]);

            if($telegram ==null){
                $telegram_data = '<i class="fas fa-paper-plane font-size-xl"></i>';
            }else{
                $telegram_data='<a href="'. $telegram.'"><i class="fas fa-paper-plane font-size-xl text-success"></i></a> ';
            }
            if($twitter ==null){
              $twitter_data=  '<i class="fab fa-twitter font-size-xl"></i>';
            }
                else{
                    $twitter_data = '<a href="'.$twitter.'"><i class="fab fa-twitter text-success font-size-xl"></i></a>';
                }
                if($site_url ==null){
                    $official_data= '<i class="fa fa-globe font-size-xl" ></i>';
                }
                    else{
                        $official_data='<a href="'.$site_url.'"><i class="fa fa-globe text-success font-size-xl" ></i></a>';
                    }
                    if($code_verifed==1){
                        $code_status='<i class="fas fa-check-circle text-success font-size-xl"></i>';
                    }
                    else{
                    $code_status='<i class="fas fa-times-circle text-danger font-size-xl"></i>';
                    }
                    if($owner_verifed==1){
                        $owner_status='<i class="fas fa-check-circle text-success font-size-xl"></i>';
                    }
                    else{
                    $owner_status='<i class="fas fa-times-circle text-danger font-size-xl"></i>';
                    }
                    if($transfer >=10){
                        $trnasfer_status='<i class="fas fa-check-circle text-success font-size-xl"></i>';
                    }
                    else{
                    $trnasfer_status='<i class="fas fa-times-circle text-danger font-size-xl"></i>';
                    }
                        $res->data = '<tr class="text-center"><td class="align-middle"><a target="_blank" href="https://poocoin.app/tokens/'.$obj->smart_chain.'">'.$name[0].'</a></td>
            <td class="align-middle">'.\Carbon\Carbon::createFromTimeStamp(strtotime($obj->created_at))->subHour(5)->diffForHumans().'</td>
            <td class="align-middle"><a target="_blank" href="https://bscscan.com/address/'.$obj->smart_chain.'#code">'.$code_status.'</a></td>
            <td class="align-middle"><a target="_blank" href="https://bscscan.com/readContract?m=normal&a='.$obj->smart_chain .'&v='. $obj->smart_chain.'&t=false">'.$owner_status.'</a></td>
            <td class="align-middle">'.$trnasfer_status.'</td>
            <td class="align-middle"><i class="fas fa-exclamation-triangle font-size-xl text-warning mr-3"></i>'.$holders.'</td>
            <td class="align-middle"><!-- <img src="img/3020989.png" class="img-fluid " style="height: 35px;" alt="Waitting"> -->$'.$pric.'</td>
            <td class="align-middle">'.$telegram_data.''.$twitter_data.''.$official_data.'</td>
            <td class="align-middle"><span class="d-flex flex-row"><div class="">
                                        <div class="bg-warning my-1 d-block px-2 py-1 rounded">
                                        <a target="_blank" href="https://pancakeswap.finance/swap?outputCurrency='.$obj->smart_chain.'" class="text-drbg" >
                                        Buy on Pancakeswap
                                        </a>
                                </div>
                                <div class="bg-warning my-1 d-block px-2 py-1 rounded">
                                    <a target="_blank" href="https://poocoin.app/tokens/'.$obj->smart_chain.'" class="text-drbg">
                                        Watch Chart
                                    </a>
                                </div>
                            </div>
                            <div class="pt-4 pl-3">
                                <form method="GET" action="/token">
                                                    <input  name="token" type="hidden" value="'.$obj->smart_chain.'">
                                                <button type="submit" style="border: none;background: none;" ><i
                                                        class="fas fa-share-alt text-primary font-size-xl"></i></button>
                                                </form>
                            </div>
                        </span>
                                    </td>
                                </tr>';
            return $res;
        }

        }else{
            return 'nothing';
        }


            } catch (Longman\TelegramBot\Exception\TelegramException $e)
            {
                echo $e->getMessage();
            }
    }

    public function searchtoken(){
        $token=request()->query('token');
        // dd($token);
        $check=DB::table('coins')->where('name', 'like', '%' . $token . '%')->orWhere('smart_chain', 'like', '%' . $token . '%')->first();
        return redirect()->back()->with('check',$check);

    }

     public function filterRecord()
    {
        $hours=request()->query('time');
        $newDateTime = Carbon::now()->subHours($hours);
        $liquidity=request()->query('liquidity');
        $holders=request()->query('holders');
        $owner=request()->query('owner');
        $sellers=request()->query('sellers');
        $code=request()->query('code');
        $twitter=request()->query('twitter');
        $web=request()->query('web');
        $telegram=request()->query('telegram');

        $query = Coin::query();
        if (request()->has('time')) {
            $query = $query->whereDate('created_at', '<=', $newDateTime);
        }
        if (request()->has('liquidity') && $liquidity != null) {
            $price=explode('-',$liquidity);

            $min_liquid=$price[0];
            $max_liquid=$price[1];
            $query = $query->whereBetween('price', [$min_liquid, $max_liquid]);
        }
        if (request()->has('holders') && $holders != null) {
            $hol=explode('-',$holders);

            $min_holders=$hol[0];
            $max_holders=$hol[1];
            $query = $query->whereBetween('holders', [$min_holders, $max_holders]);
        }
        if (request()->has('code')) {
            $query = $query->where('github', '!=', null);
        }
        // if (request()->has('owner')) {
        //     $query = $query->where('owner', '!=', null);
        // }
        // if (request()->has('seller')) {
        //     $query = $query->where('seller', '!=', null);
        // }
        if (request()->has('web')) {
            $query = $query->where('offical_site', '!=', null);
        }
        if (request()->has('telegram')) {
            $query = $query->where('telegram', '!=', null);
        }
        if (request()->has('twitter')) {
            $query = $query->where('twitter', '!=', null);
        }

        $filtered = $query->get();


    return redirect()->back()->with('filtereddata',$filtered);

    }

}
