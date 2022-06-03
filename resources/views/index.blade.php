<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
     <link rel="icon" type="image/png" href="images/logo.png"/>
    <title>MrChecker</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7233339810508092"
     crossorigin="anonymous"></script>
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7233339810508092"
     crossorigin="anonymous"></script>


    <style>

          .pagination li:hover{
              cursor: pointer;
          }
          .pagination li{
              margin-left:.5rem;
            background: purple ;

            border: 0px solid white;
            -webkit-user-select: none !important;
          }
          li span{
            margin: 0px 7px 0px 7px;
          }
          .active{
            background: #007bff !important;
            border: 2px solid #007bff !important;
          }

          .rows_count {
            width: 20%;
            margin-top: -40px;
            float: right;
            color: white;
          }
          .page-link {
              padding:0.3rem 0.3rem !important;
            }

    </style>
</head>

<body>
    <main>
        <div class="wraper">
            <div class="left-side-menue">
                <i class="fas fa-align-justify d-xl-none float-right mr-4 mt-2 font-size-xl pointer-mouse"
                    id="btn-justify"></i>
                <div class="">
                    <!-- filters start -->
                    <div class="bg-lin py-3 bg-light px-4">
                        <h4>Filters</h4>
                        <span class="d-inline-block">
                            <p class="text-white">Find Gems In BSC</p>
                        </span>
                        <span class="float-xl-right ml-3 ml-xl-0 d-inline-block ">
                            <a href="https://twitter.com/MrCryptoFamily" class=""><i class="fab fa-twitter site-color-l"></i></a>
                            <a href="https://t.me/MrCryptoFinance"> <i class="fab fa-telegram-plane site-color-l"></i></a>
                        </span>
                        <div class="filters  my-3 " id="filter-parent">
                            <form action="/" method="get">
                                <div class="filter-select ">
                                    <div class="d-flex justify-content-center flex-column ">

                                        <div class="time p-1">
                                            <div class="row">
                                                <span class="col">
                                                    <label for="Check-Time">Check Time:</label>
                                                </span>
                                                <span class="col">
                                                    <select name="time"
                                                        class="form-control rounded-0 bg-transparent text-primary border-primary"
                                                        id="Check-Time">
                                                        <option value="" class="text-black">Select</option>
                                                        <option value="1" class="text-black">1 HOUR</option>
                                                        <option value="2" class="text-black">2 HOURS</option>
                                                        <option value="3" class="text-black">3 HOURS</option>
                                                        <option value="4" class="text-black">4 HOURS</option>
                                                        <option value="5" class="text-black">5 HOURS</option>
                                                        <option value="6" class="text-black">6 HOURS</option>
                                                        <option value="7" class="text-black">7 HOURS</option>
                                                        <option value="8" class="text-black">8 HOURS</option>
                                                        <option value="9" class="text-black">9 HOURS</option>
                                                        <option value="10" class="text-black">10 HOURS</option>
                                                        <option value="11" class="text-black">11 HOURS</option>
                                                        <option value="12" class="text-black">12 HOURS</option>
                                                        <option value="24" class="text-black">24 HOURS</option>
                                                        <option value="36" class="text-black">36 HOURS</option>
                                                    </select></span>
                                            </div>
                                        </div>
                                        <!-- Liquidity -->
                                        <div class="Liquidity p-1">
                                            <div class="row">
                                                <span class="col">
                                                    <label for="Liquidity">Liquidity:</label>
                                                </span>
                                                <span class="col">
                                                     <select name="liquidity"
                                                        class="form-control rounded-0 bg-transparent text-primary border-primary"
                                                        id="Liquidity">
                                                        <option value="" class="text-black">Select</option>
                                                        <option value="6000-10000" class="text-black">6000-10000</option>
                                                        <option value="10000-15000" class="text-black">10000-15000</option>
                                                        <option value="15000-30000" class="text-black">15000-30000</option>
                                                         <option value="30000-50000" class="text-black">30000-50000</option>
                                                         <option value="50000-100000" class="text-black">+ 50000</option>

                                                    </select></span>
                                            </div>
                                        </div>
                                        <!-- max holder -->
                                        <div class="max-hold p-1">
                                            <div class="row">
                                                <span class="col">
                                                    <label for="Max-Holder">Max Holder:</label>
                                                </span>
                                                <span class="col">
                                                       <select name="holders" class="form-control rounded-0 bg-transparent text-primary border-primary " id="Max-Holder">
                                                    <option value="" class="text-black">Select</option>
                                                    <option value="1-10" class="text-black">1-10</option>
                                                   <option value="11-20" class="text-black">11-20</option>
                                                   <option value="21-30" class="text-black">21-30</option>
                                                   <option value="31-40" class="text-black">31-40</option>
                                                   <option value="41-50" class="text-black">41-50</option>
                                                   <option value="51-60" class="text-black">51-60</option>
                                                   <option value="61-70" class="text-black">61-70</option>
                                                   <option value="71-80" class="text-black">71-80</option>
                                                   <option value="81-90" class="text-black">81-90</option>
                                                   <option value="91-100" class="text-black">91-100</option>

                                                    </select></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select">
                                        <div class="select-child-div">
                                            <input type="checkbox" name="owner" value="owner"> <span class=""><i
                                                    class=" mr-1 text-white mr-1 ml-2"></i>
                                                Owner renounced </span>
                                        </div>
                                        <div class="select-child-div">
                                            <input type="checkbox" name="sellers" value="sellers"> <span class=""><i
                                                    class=" text-white mr-1 ml-2"></i>
                                                Exist sellers</span>
                                        </div>
                                        <div class="select-child-div">
                                            <input type="checkbox" name="code" value="code"> <span class=""><i
                                                    class=" text-white mr-1 ml-2"></i> Code is correct </span>
                                        </div>
                                        <div class="select-child-div">
                                            <input type="checkbox" name="telegram" value="telegram"> <span class=""><i
                                                    class=" text-white mr-1 ml-2"></i>
                                                Have Telegram </span>
                                        </div>
                                        <div class="select-child-div">
                                            <input type="checkbox" name="twitter" value="twitter"> <span class=""><i
                                                    class="text-white mr-1 ml-2"></i> Have Twitter</span>
                                        </div>
                                        <div class="select-child-div">
                                            <input type="checkbox" name="web" value="web"> <span class=""><i
                                                    class="text-white mr-1 ml-2"></i> Have Web </span>
                                        </div>
                                    </div>
                                     <div class="btn-filter mt-5">
                                        <input type="submit" class="btn  btn-primary" value="Filters">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- <div class="heading-site p-3">
                        <a href="index.html" class="d-block">
                            <i class="fas fa-fist-raised  site-color-l"></i>
                            <h4 class="site-logo-name d-inline-block site-color pl-3 font-weight-bold">Crypto Fighter
                            </h4>
                        </a>
                        <span class="d-inline-block">
                            <p class="site-color-d font-weight-bold">Find Gems In BSC</p>
                        </span>
                        <span class="float-xl-right ml-3 ml-xl-0 d-inline-block ">
                            <a href="" class=""><i class="fab fa-twitter site-color-l"></i></a>
                            <a href=""> <i class="fab fa-telegram-plane site-color-l"></i></a>
                        </span>
                    </div> -->
                    <!-- <div class="donation-box">
                        <h5 class="font-weight-bold ">Donations (BSC)</h5>
                        <button class="btn btn-primary  ">0xa282F2F8BEB7D45678....
                            <i class="fas fa-copy font-size-xs "></i></button>
                    </div> -->


                    <!-- <div class="search-box">
                        <h5 class="font-weight-bold py-2">Search tokens</h5>
                        <div class="input-group ">
                            <input  type="text"
                                class="form-control form-control-sm rounded-0 text-primary bg-transparent border-primary"
                                placeholder="Paste here address" name="token">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-outline-primary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div> -->

                    <!-- footer start -->
                    <!-- <footer class="mt-4 d-none d-xl-block">
                        <div class="promote-coin py-3">
                            <a href="" class="btn  btn-sm btn-outline-success d-inline-block rounded-0">Promote Your
                                Coin</a>
                            <a href="" class="btn btn-sm btn-primary d-inline-block">Help</a>
                        </div>
                        <span class="d-inline-block">
                            <p class="m-0">© Crypto Fighter Systems</p>
                        </span>
                        <span class="float-right d-inline-block">
                            <a href="" class=""><i class="fab fa-twitter site-color-l"></i></a>
                            <a href=""> <i class="fab fa-telegram-plane site-color-l"></i></a>
                        </span>
                        <small class="d-inline-block site-color-d ">Theme Design by Fastech.com</small>
                    </footer> -->
                </div>
            </div>
            <!-- right side main dive start -->
            <div class="right-side-main float-right pb-5">
                <div class="">
                    <!-- header logo start -->
                    <div class="bg-lin">
                        <div class="row px-md-5">
                            <div class="py-3 col-md-6 ">
                            <div class="heading-site col-8 ">
                                <a href="/" class="d-block">
                                    <img src="images/logo.png" style="max-width:20%">
                                    <h4 class="site-logo-name d-inline-block site-color pl-3 font-weight-bold">MrChecker
                                    </h4>
                                </a>
                            </div>
                            </div>
                            <!-- search box start -->
                            <!-- <div class="bg-lin my-2 "> -->
                            <div class="col-md-6 py-3 px-4 " style="margin-top:1%">
                                <form method="GET" action="/token">
                                <div class="search-box row">
                                    <div class="input-group px-3 px-md-0 ">
                                        <h5 class="mr-2">Search tokens</h5>
                                        <input type="text" id="search_input_all"
                                            class="form-control form-control-sm rounded-0 text-primary bg-transparent border-primary"
                                            placeholder="Paste here address" name="token">
                                         <div class="input-group-append">
                                            <button class="btn btn-sm btn-outline-primary" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <!-- </div> -->
                            <!-- search box end -->

                        </div>
                    </div>
                    <!-- header logo end -->

                    <!-- add banner  -->
                    <div class="add-box-banner p-5 bg-light mx-auto my-2"></div>
                    <!-- filter place empty now  -->

                    <!--<select class="form-control" style="width: 7%;margin-bottom: 1%;" id="maxRows">-->
                    <!--    <option value="10">10</option>-->
                    <!--    <option value="15">15</option>-->
                    <!--    <option value="20">20</option>-->
                    <!--    <option value="50">50</option>-->
                    <!--    <option value="70">70</option>-->
                    <!--    <option value="100">100</option>-->
                    <!--    <option value="5000">ALL</option>-->
                    <!--   </select>-->

                    <!-- table start -->
                    <div class="table-responsive ">
                        <table class="table text-white text-left table-striped table-class" id= "table-id">
                            <!-- table head start -->
                            <thead class="font-weight-lighter">
                                <tr>
                                    <th class="text-center">Token</th>
                                    <th class="text-center" style="min-width: 90px;">Age
                                        <span class="float-right">
                                            <i class="fas fa-long-arrow-alt-up text-secondary m-0"></i>
                                            <i class="fas fa-long-arrow-alt-down text-secondary m-0"></i>
                                        </span>
                                    </th>
                                    <th class="text-center">Code</th>
                                    <th class="text-center">Owner</th>
                                    <th class="text-center">Seller</th>
                                    <th class="text-center" style="min-width: 100px">Holders
                                        <!--<span class="float-right">-->
                                        <!--    <i class="fas fa-long-arrow-alt-up text-secondary m-0"></i>-->
                                        <!--    <i class="fas fa-long-arrow-alt-down text-secondary m-0"></i>-->
                                        <!--</span>-->
                                    </th>
                                    <th class="text-center">Liquidity</th>
                                    <th class="text-center"></th>
                                    <th class="text-left">Links</th>
                                </tr>
                            </thead>
                            <!-- table body start -->
                            <tbody  id="myTable">
                                @if (Session::has('check'))
                                <?php
                                $check= Session::get('check');
                                $name= explode("(",$check->name);
                                $transfer= str_replace(",","",$check->seller);
                                ?>
                                <tr style="background-color: red" class="text-center">
                                    <td class="align-middle"><a target="_blank" href="https://poocoin.app/tokens/{{$check->smart_chain}}">{{$name[0]}}</a></td>
                                    <td class="align-middle">{{\Carbon\Carbon::createFromTimeStamp(strtotime($check->created_at))->addHour(7)->diffForHumans()}}</td>
                                    <td class="align-middle"><a target="_blank" href="https://bscscan.com/address/{{ $check->smart_chain }}#code">@if($check->code==1)<i class="fas fa-check-circle text-success font-size-xl"></i>@else <i class="fas fa-times-circle text-danger font-size-xl"></i> @endif</a></td>
                                    <td class="align-middle"><a target="_blank" href="https://bscscan.com/readContract?m=normal&a={{ $check->smart_chain }}&v={{ $check->smart_chain }}&t=false">@if($check->owner==1)<i class="fas fa-check-circle text-success font-size-xl"></i>@else <i class="fas fa-times-circle text-danger font-size-xl"></i> @endif</a></td>

                                    <td class="align-middle">  @if($transfer >10)<i class="fas fa-check-circle text-success font-size-xl"></i>@else <i class="fas fa-times-circle text-danger font-size-xl"></i> @endif
                                        {{--  <img src="img/3020989.png" class="img-fluid " style="height: 35px;" alt="Waitting">  --}}
                                    </td>
                                    <td class="align-middle"><i class="fas fa-exclamation-triangle font-size-xl text-warning mr-3"></i> {{ $check->holders }} </td>
                                    <td class="align-middle">${{$check->price}}</td>
                                    <td class="align-middle">@if($check->telegram ==null) <i class="fas fa-paper-plane font-size-xl"></i>  @else<a href="{{ $check->telegram }}"><i class="fas fa-paper-plane font-size-xl text-success"></i></a>  @endif @if($check->twitter ==null)<i class="fab fa-twitter font-size-xl"></i> @else<a href="{{ $check->twitter }}"><i class="fab fa-twitter text-success font-size-xl"></i></a>  @endif @if($check->offical_site ==null) <i class="fa fa-globe font-size-xl" ></i> @else<a href="{{ $check->offical_site }}"><i class="fa fa-globe text-success font-size-xl" ></i></a>  @endif</td>
                                    <td class="align-middle" style="min-width: 210px;">
                                        <span class="d-flex flex-row">
                                            <div class="">

                                                <div class="bg-warning my-1 d-block px-2 py-1 rounded">
                                                    <a target="_blank" href="https://pancakeswap.finance/swap?outputCurrency='{{$check->smart_chain}}'" class="text-drbg" >
                                                        Buy on Pancakeswap
                                                        </a>
                                                </div>
                                                <div class="bg-warning my-1 d-block px-2 py-1 rounded">
                                                    <a target="_blank" href="https://poocoin.app/tokens/'{{$check->smart_chain}}'" class="text-drbg">
                                                        Watch Chart
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pt-4 pl-3">
                                                <form method="GET" action="/token">
                                                    <input  name="token" type="hidden" value="{{ $check->smart_chain }}">
                                                <button type="submit" style="border: none;background: none;" ><i
                                                        class="fas fa-share-alt text-primary font-size-xl"></i></button>
                                                </form>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                @endif


                                @foreach($coins as $row)
                                <?php
                               $name= explode("(",$row->name);
                               $transfer= str_replace(",","",$row->seller);
                                ?>
                                <tr class="text-center">
                                    <td class="align-middle" ><a target="_blank" href="https://poocoin.app/tokens/{{$row->smart_chain}}">{{$name[0]}}</a></td>
                                    <td class="align-middle" >{{\Carbon\Carbon::createFromTimeStamp(strtotime($row->created_at))->subHour(5)->diffForHumans()}}</td>
                                    <td class="align-middle" ><a target="_blank" href="https://bscscan.com/address/{{ $row->smart_chain }}#code">@if($row->code==1)<i class="fas fa-check-circle text-success font-size-xl"></i>@else <i class="fas fa-times-circle text-danger font-size-xl"></i> @endif</a></td>
                                    <td class="align-middle" ><a target="_blank" href="https://bscscan.com/readContract?m=normal&a={{ $row->smart_chain }}&v={{ $row->smart_chain }}&t=false">@if($row->owner==1)<i class="fas fa-check-circle text-success font-size-xl"></i>@else <i class="fas fa-times-circle text-danger font-size-xl"></i> @endif</a></td>
                                    <td class="align-middle" > @if($transfer >10)<i id="linkA"
                                        data-toggle="tooltip" data-placement="top"
                                        title="{{ $transfer }}" class="fas fa-check-circle text-success font-size-xl"></i>@else <i id="linkA"
                                        data-toggle="tooltip" data-placement="top"
                                        title="{{ $transfer }}" class="fas fa-times-circle text-danger font-size-xl"></i> @endif
                                        {{--  <img src="img/3020989.png" class="img-fluid " style="height: 35px;" alt="Waitting">  --}}
                                    </td>
                                    <td class="align-middle" ><i class="fas fa-exclamation-triangle font-size-xl text-warning mr-3"></i> {{ $row->holders }} </td>
                                    <td class="align-middle" >${{$row->price}}</td>
                                    <td class="align-middle" >@if($row->telegram ==null) <i class="fas fa-paper-plane font-size-xl"></i>  @else<a href="{{ $row->telegram }}"><i class="fas fa-paper-plane font-size-xl text-success"></i></a>  @endif @if($row->twitter ==null)<i class="fab fa-twitter font-size-xl"></i> @else<a href="{{ $row->twitter }}"><i class="fab fa-twitter text-success font-size-xl"></i></a>  @endif @if($row->offical_site ==null) <i class="fa fa-globe font-size-xl" ></i> @else<a href="{{ $row->offical_site }}"><i class="fa fa-globe text-success font-size-xl" ></i></a>  @endif</td>
                                    <td class="align-middle"  style="min-width: 210px;">
                                        <span class="d-flex flex-row">
                                            <div class="">

                                                <div class="bg-warning my-1 d-block px-2 py-1 rounded">
                                                    <a target="_blank" href="https://pancakeswap.finance/swap?outputCurrency={{$row->smart_chain}}" class="text-drbg" >
                                                        Buy on Pancakeswap
                                                        </a>
                                                </div>
                                                <div class="bg-warning my-1 d-block px-2 py-1 rounded">
                                                    <a target="_blank" href="https://poocoin.app/tokens/{{$row->smart_chain}}" class="text-drbg">
                                                        Watch Chart
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pt-4 pl-3">
                                              <form method="GET" action="/token">
                                                    <input  name="token" type="hidden" value="{{ $row->smart_chain }}">
                                                <button type="submit" style="border: none;background: none;" ><i
                                                        class="fas fa-share-alt text-primary font-size-xl"></i></button>
                                                </form>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                           <!-- pagination start -->
                           <div>
                        <nav aria-label="Page navigation example" style="text-align:center">
                          <ul class="pagination" style="justify-content:center" >
                            <!--<li class="page-item"><a class="page-link" href="#">Previous</a></li>-->
                            @for($i=1; $i <= $page_count; $i++)
                                <li class="page-item"><a class="page-link" href="/?page_no={{$i}}">{{$i}}</a></li>
                            @endfor
                                <li class="page-item"><a class="page-link" href="/?page_no={{$end_page}}">Last</a></li>
                            <!--<li class="page-item"><a class="page-link" href="#">Next</a></li>-->
                          </ul>
                        </nav>
                        </div>
                        <!-- pagination end -->


                        <!-- add banner -->
                        <div class="add-box-banner p-5 bg-light mx-auto my-2"></div>
                    </div>
                    <!-- <div class="bg-dark p-3 text-center">No data available in table</div> -->
                </div>
                <div class="">
                    <footer class="mt-4  text-center bg-site-dark py-3">
                        <!--<div class="promote-coin py-3">-->
                        <!--    <a href="" class="btn  btn-sm btn-outline-success d-inline-block rounded-0">Promote Your-->
                        <!--        Coin</a>-->
                        <!--    <a href="" class="btn btn-sm btn-primary d-inline-block">Help</a>-->
                        <!--</div>-->
                        <span class="d-inline-block mx-auto">
                            <p class="m-0">© MrCheckers</p>
                        </span>
                        <!--<span class="d-inline-block">-->
                        <!--    <a href="" class=""><i class="fab fa-twitter site-color-l"></i></a>-->
                        <!--    <a href=""> <i class="fab fa-telegram-plane site-color-l"></i></a>-->
                        <!--</span> -->
                        <div>
                        <ul class="wp-block-social-links aligncenter has-large-icon-size has-icon-color has-icon-background-color items-justified-center is-style-default" style="display:flex; justify-content:center">
                            <li style="color: #111a22; background-color: var(--nv-primary-accent); " class="wp-social-link wp-social-link-twitter wp-block-social-link">
                                <a href="https://twitter.com/MrCryptoFamily" aria-label="https://twitter.com/MrCryptoFamily" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor">
                                     <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false">
                                         <path d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z">

                                         </path></svg></a></li><li style="color: #111a22; background-color: var(--nv-primary-accent); " class="wp-social-link wp-social-link-instagram wp-block-social-link">
                                             <a href="https://www.instagram.com/mrcryptofamily/" aria-label="Instagram: https://www.instagram.com/mrcryptofamily/" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor">
                                             <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false">
                                                 <path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z">

                                                 </path></svg></a></li><li style="color: #111a22; background-color: var(--nv-primary-accent); " class="wp-social-link wp-social-link-reddit wp-block-social-link">
                                                     <a href="https://www.reddit.com/r/MrCryptoFinance/" aria-label="Reddit: https://www.reddit.com/r/MrCryptoFinance/" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor">
                                                     <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false">
                                                         <path d="M22,11.816c0-1.256-1.021-2.277-2.277-2.277c-0.593,0-1.122,0.24-1.526,0.614c-1.481-0.965-3.455-1.594-5.647-1.69 l1.171-3.702l3.18,0.748c0.008,1.028,0.846,1.862,1.876,1.862c1.035,0,1.877-0.842,1.877-1.878c0-1.035-0.842-1.877-1.877-1.877 c-0.769,0-1.431,0.466-1.72,1.13l-3.508-0.826c-0.203-0.047-0.399,0.067-0.46,0.261l-1.35,4.268 c-2.316,0.038-4.411,0.67-5.97,1.671C5.368,9.765,4.853,9.539,4.277,9.539C3.021,9.539,2,10.56,2,11.816 c0,0.814,0.433,1.523,1.078,1.925c-0.037,0.221-0.061,0.444-0.061,0.672c0,3.292,4.011,5.97,8.941,5.97s8.941-2.678,8.941-5.97 c0-0.214-0.02-0.424-0.053-0.632C21.533,13.39,22,12.661,22,11.816z M18.776,4.394c0.606,0,1.1,0.493,1.1,1.1s-0.493,1.1-1.1,1.1 s-1.1-0.494-1.1-1.1S18.169,4.394,18.776,4.394z M2.777,11.816c0-0.827,0.672-1.5,1.499-1.5c0.313,0,0.598,0.103,0.838,0.269 c-0.851,0.676-1.477,1.479-1.812,2.36C2.983,12.672,2.777,12.27,2.777,11.816z M11.959,19.606c-4.501,0-8.164-2.329-8.164-5.193 S7.457,9.22,11.959,9.22s8.164,2.329,8.164,5.193S16.46,19.606,11.959,19.606z M20.636,13.001c-0.326-0.89-0.948-1.701-1.797-2.384 c0.248-0.186,0.55-0.301,0.883-0.301c0.827,0,1.5,0.673,1.5,1.5C21.223,12.299,20.992,12.727,20.636,13.001z M8.996,14.704 c-0.76,0-1.397-0.616-1.397-1.376c0-0.76,0.637-1.397,1.397-1.397c0.76,0,1.376,0.637,1.376,1.397 C10.372,14.088,9.756,14.704,8.996,14.704z M16.401,13.328c0,0.76-0.616,1.376-1.376,1.376c-0.76,0-1.399-0.616-1.399-1.376 c0-0.76,0.639-1.397,1.399-1.397C15.785,11.931,16.401,12.568,16.401,13.328z M15.229,16.708c0.152,0.152,0.152,0.398,0,0.55 c-0.674,0.674-1.727,1.002-3.219,1.002c-0.004,0-0.007-0.002-0.011-0.002c-0.004,0-0.007,0.002-0.011,0.002 c-1.492,0-2.544-0.328-3.218-1.002c-0.152-0.152-0.152-0.398,0-0.55c0.152-0.152,0.399-0.151,0.55,0 c0.521,0.521,1.394,0.775,2.669,0.775c0.004,0,0.007,0.002,0.011,0.002c0.004,0,0.007-0.002,0.011-0.002 c1.275,0,2.148-0.253,2.669-0.775C14.831,16.556,15.078,16.556,15.229,16.708z">

                                                         </path></svg></a></li><li style="color: #111a22; background-color: var(--nv-primary-accent); " class="wp-social-link wp-social-link-tiktok wp-block-social-link">
                                                             <a href="https://www.tiktok.com/@mrcryptofinance?lang=es" aria-label="TikTok: https://www.tiktok.com/@mrcryptofinance?lang=es" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor">
                                                                  <svg width="24" height="24" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M16.708 0.027c1.745-0.027 3.48-0.011 5.213-0.027 0.105 2.041 0.839 4.12 2.333 5.563 1.491 1.479 3.6 2.156 5.652 2.385v5.369c-1.923-0.063-3.855-0.463-5.6-1.291-0.76-0.344-1.468-0.787-2.161-1.24-0.009 3.896 0.016 7.787-0.025 11.667-0.104 1.864-0.719 3.719-1.803 5.255-1.744 2.557-4.771 4.224-7.88 4.276-1.907 0.109-3.812-0.411-5.437-1.369-2.693-1.588-4.588-4.495-4.864-7.615-0.032-0.667-0.043-1.333-0.016-1.984 0.24-2.537 1.495-4.964 3.443-6.615 2.208-1.923 5.301-2.839 8.197-2.297 0.027 1.975-0.052 3.948-0.052 5.923-1.323-0.428-2.869-0.308-4.025 0.495-0.844 0.547-1.485 1.385-1.819 2.333-0.276 0.676-0.197 1.427-0.181 2.145 0.317 2.188 2.421 4.027 4.667 3.828 1.489-0.016 2.916-0.88 3.692-2.145 0.251-0.443 0.532-0.896 0.547-1.417 0.131-2.385 0.079-4.76 0.095-7.145 0.011-5.375-0.016-10.735 0.025-16.093z">

                                                                  </path></svg></a></li><li style="color: #111a22; background-color: var(--nv-primary-accent); " class="wp-social-link wp-social-link-telegram wp-block-social-link">
                                                                      <a href="https://t.me/MrCryptoFinance" aria-label="Telegram: https://t.me/MrCryptoFinance" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor">
                                                                      <svg width="24" height="24" viewBox="0 0 128 128" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M28.9700376,63.3244248 C47.6273373,55.1957357 60.0684594,49.8368063 66.2934036,47.2476366 C84.0668845,39.855031 87.7600616,38.5708563 90.1672227,38.528 C90.6966555,38.5191258 91.8804274,38.6503351 92.6472251,39.2725385 C93.294694,39.7979149 93.4728387,40.5076237 93.5580865,41.0057381 C93.6433345,41.5038525 93.7494885,42.63857 93.6651041,43.5252052 C92.7019529,53.6451182 88.5344133,78.2034783 86.4142057,89.5379542 C85.5170662,94.3339958 83.750571,95.9420841 82.0403991,96.0994568 C78.3237996,96.4414641 75.5015827,93.6432685 71.9018743,91.2836143 C66.2690414,87.5912212 63.0868492,85.2926952 57.6192095,81.6896017 C51.3004058,77.5256038 55.3966232,75.2369981 58.9976911,71.4967761 C59.9401076,70.5179421 76.3155302,55.6232293 76.6324771,54.2720454 C76.6721165,54.1030573 76.7089039,53.4731496 76.3346867,53.1405352 C75.9604695,52.8079208 75.4081573,52.921662 75.0095933,53.0121213 C74.444641,53.1403447 65.4461175,59.0880351 48.0140228,70.8551922 C45.4598218,72.6091037 43.1463059,73.4636682 41.0734751,73.4188859 C38.7883453,73.3695169 34.3926725,72.1268388 31.1249416,71.0646282 C27.1169366,69.7617838 23.931454,69.0729605 24.208838,66.8603276 C24.3533167,65.7078514 25.9403832,64.5292172 28.9700376,63.3244248 Z"></path>
                                                                      </svg></a></li><li style="color: #111a22; background-color: var(--nv-primary-accent); " class="wp-social-link wp-social-link-facebook wp-block-social-link">
                                                                          <a href="https://www.facebook.com/Mr-Crypto-Family-107756094862918/" aria-label="Facebook: https://www.facebook.com/Mr-Crypto-Family-107756094862918/" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor"> <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path></svg></a></li></ul><br>
                        </div>
                        <small class="d-inline-block site-color-d ">Powered by Mr.Crypto and Ms. Crypto </small>
                    </footer>
                </div>
            </div>
        </div>
    </main>
    <!-- j-query cdn-link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#filter-btn").click(function () {
                $("#filter-parent").toggle();
                $("#rotate-180").toggleClass('rotate-180');
            });
            $("#btn-justify").click(function () {
                // $("body").css('display','none');
                $(".left-side-menue").toggleClass('h-100');
            });
        });

        setInterval(function(){
            $.ajax({
                type:'GET',
                url:'/test',
                data:{_token: "{{ csrf_token() }}"
                },
                success: function( res ) {
                    if(res.msg == true){
                        $('#myTable tr:first').before(res.data);

                        $('#myTable tr:last').hide();


                    }
                }
            });

        },10000);

        $('#linkA').tooltip();

    </script>
 <script>
    getPagination('#table-id');
	$('#maxRows').trigger('change');
	function getPagination (table){


    $('#paginate').DataTable({
		  $('#maxRows').on('change',function(){
		  	$('.pagination').html('');						// reset pagination div
		  	var trnum = 0 ;									// reset tr counter
		  	var maxRows = parseInt($(this).val());			// get Max Rows from select option

		  	var totalRows = $(table+' tbody tr').length;		// numbers of rows
			 $(table+' tr:gt(0)').each(function(){			// each TR in  table and not the header
			 	trnum++;									// Start Counter
			 	if (trnum > maxRows ){						// if tr number gt maxRows

			 		$(this).hide();							// fade it out
			 	}if (trnum <= maxRows ){$(this).show();}// else fade in Important in case if it ..
			 });											//  was fade out to fade it in
			 if (totalRows > maxRows){						// if tr total rows gt max rows option
			 	var pagenum = Math.ceil(totalRows/maxRows);	// ceil total(rows/maxrows) to get ..
			 												//	numbers of pages
			 	for (var i = 1; i <= pagenum ;){			// for each page append pagination li
			 	$('.pagination').append('<li data-page="'+i+'">\
								      <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
								    </li>').show();
			 	}											// end for i


			} 												// end if row count > max rows
			$('.pagination li:first-child').addClass('active'); // add active class to the first li


        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
       showig_rows_count(maxRows, 1, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT

        $('.pagination li').on('click',function(e){		// on click each page
        e.preventDefault();
				var pageNum = $(this).attr('data-page');	// get it's number
				var trIndex = 0 ;							// reset tr counter
				$('.pagination li').removeClass('active');	// remove active class from all li
				$(this).addClass('active');					// add active class to the clicked


        //SHOWING ROWS NUMBER OUT OF TOTAL
       showig_rows_count(maxRows, pageNum, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL



				 $(table+' tr:gt(0)').each(function(){		// each tr in table not the header
				 	trIndex++;								// tr index counter
				 	// if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
				 	if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
				 		$(this).hide();
				 	}else {$(this).show();} 				//else fade in
				 }); 										// end of for each tr in table
					});										// end of on click pagination list
		});
											// end of on select change

								// END OF PAGINATION

	}




// SI SETTING
$(function(){
	// Just to append id number for each row
default_index();

});

//ROWS SHOWING FUNCTION
function showig_rows_count(maxRows, pageNum, totalRows) {
   //Default rows showing
        var end_index = maxRows*pageNum;
        var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
        var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';
        $('.rows_count').html(string);
}



// All Table search script
function FilterkeyWord_all_table() {

// Count td if you want to search on all table instead of specific column

  var count = $('.table').children('tbody').children('tr:first-child').children('td').length;

        // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("search_input_all");
  var input_value =     document.getElementById("search_input_all").value;
        filter = input.value.toLowerCase();
  if(input_value !=''){
        table = document.getElementById("table-id");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) {

          var flag = 0;

          for(j = 0; j < count; j++){
            td = tr[i].getElementsByTagName("td")[j];
            if (td) {

                var td_text = td.innerHTML;
                if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                //var td_text = td.innerHTML;
                //td.innerHTML = 'shaban';
                  flag = 1;
                } else {
                  //DO NOTHING
                }
              }
            }
          if(flag==1){
                     tr[i].style.display = "";
          }else {
             tr[i].style.display = "none";
          }
        }
    }else {
      //RESET TABLE
      $('#maxRows').trigger('change');
    }
}

    </script>

</body>

</html>
