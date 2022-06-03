<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Coin;


Route::get('test','\App\Http\Controllers\UserController@testing');
Route::get('testing','\App\Http\Controllers\UserController@testing');
Route::get('testings','\App\Http\Controllers\UserController@testings');
Route::get('/filter-record','\App\Http\Controllers\UserController@filterRecord');


Route::middleware('guest')->group(function ()
{
    Route::get('/', function ()
    {

        $hours=request()->query('time');
        $newDateTime = Carbon::now()->addHours($hours);
        $liquidity=request()->query('liquidity');
        $holders=request()->query('holders');
        $owner=request()->query('owner');
        $sellers=request()->query('sellers');
        $code=request()->query('code');
        $twitter=request()->query('twitter');
        $web=request()->query('web');
        $telegram=request()->query('telegram');

        $query = Coin::query();
        if (request()->has('time') && $hours != null) {

            $query = $query->whereDate('created_at', '<', $newDateTime);

        }
        if (request()->has('liquidity') && $liquidity != null) {
            $price=explode('-',$liquidity);

            $min_liquid=$price[0];
            $max_liquid=$price[1];
            $query = $query->whereBetween('price', [$min_liquid, $max_liquid]);
            //  dd($query->get());
        }
        if (request()->has('holders') && $holders != null) {
            $hol=explode('-',$holders);

            $min_holders=$hol[0];
            $max_holders=$hol[1];
            $query = $query->whereBetween('holders', [$min_holders, $max_holders]);

        }
        if (request()->has('code')) {
            $query = $query->where('code', 1);
        }
        if (request()->has('owner')) {
            $query = $query->where('owner',1);
        }
        if (request()->has('sellers')) {
            $query = $query->where('seller', '>', 10);
        }
        if (request()->has('web')) {
            $query = $query->where('offical_site', '!=', null);
        }
        if (request()->has('telegram')) {
            $query = $query->where('telegram', '!=', null);
        }
        if (request()->has('twitter')) {
            $query = $query->where('twitter', '!=', null);
        }

        $coins = $query->orderBy('id','desc')->limit(10)->get();

        if(request()->query('page_no')){
            $skipper = (request()->query('page_no') - 1) * 10;
            // dd($skipper);
            $coins = DB::table('coins')->orderBy('id','desc')->skip($skipper)->take(10)->get();
        }

        $page_count = DB::table('coins')->orderBy('id','desc')->count() / 10 ;
        $end_page = floor($page_count);
        if($page_count > 25){
            $page_count = 25;
        }
        if(request()->has('time') || request()->has('liquidity') || request()->has('holders') || request()->has('code') || request()->has('web') || request()->has('telegram') || request()->has('twitter')){
            $page_count = 0;
        }
        return view('index',compact('coins','page_count','end_page'));
    });
    Route::get('/web', '\App\Http\Controllers\TestController@webscrap')
    ->name('web');
    Route::get('/login', '\App\Http\Controllers\UserController@getLogin')
        ->name('login');
    Route::post('/login', '\App\Http\Controllers\UserController@postLogin');
});

Route::get('/token','\App\Http\Controllers\UserController@searchtoken');
Route::middleware('auth:web')->group(function ()
{

    // Route::get('/home', '\App\Http\Controllers\HomeController@getHome');


    Route::get('/home', function ()
    {
        $coins = DB::table('coins')->get();
        return view('home',compact('coins'));
    });

    Route::get('/Add-coin', function ()
    {

        return view('add_coin');
    });
    Route::get('/change-password', function ()
    {

        return view('password');
    });
    Route::get('/logout', '\App\Http\Controllers\UserController@getLogout');

    Route::post('add_coin','\App\Http\Controllers\UserController@postAddCoin');

});



