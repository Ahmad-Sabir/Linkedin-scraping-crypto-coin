@extends('layout.app')
<style>
    table th {
        /* border-top: none !important;
   border-bottom: none !important; */

        text-align: center !important;
    }

    table td {
        /* border-top: none !important; */
        text-align: center !important;
    }

    .form-inline-custom {
        display: flex !important;
        align-items: flex-end !important;
        align-content: center;
    }

    .form-inline-custom label {
        width: 25% !important;
    }

    .btn-grabar {
        background-color: #9B75A6 !important;
        color: #fff !important;
        padding: 10px 15px !important;
        font-size: 16px !important;
    }

    select.form-control,
    select,
    .email-compose-fields .select2-container--default select.select2-selection--multiple,
    .select2-container--default select.select2-selection--single,
    .select2-container--default .select2-selection--single select.select2-search__field,
    select.typeahead,
    select.tt-query,
    select.tt-hint {
        color: black !important;
    }

</style>
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-2">
            @if(Session::has('success'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
            @endif
            @if(Session::has('alert'))
            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('alert') }}</p>
            @endif
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ $error }}</p>
            @endforeach
            @endif


            <div class="row">

                <div class="col-md-12">
                    <div class="div-flex" style="margin: 2%">
                        <h5>All Coins</h5>

                    </div>
                    <div class="row">
                        <div class="col-md-8">

                        </div>
                        <div class="col-md-4">
                            <div class="div-btns text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalLong">
                                    Add Coin
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th>Logo</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Symbol</th>
                                    
                                    <th>Price</th>
                                    <th>Market Cap</th>
                                    <th>Volume</th>
                                    <th>Launch Date</th>
                                    <th>Smart Chain</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($coins as $coin)
                                <tr>
                                <td>
                                        <img src="{{$coin->logo}}">
                                    </td>
                                    <td>
                                        {{$coin->id}}
                                    </td>
                                    <td>
                                        {{$coin->name}}
                                    </td>
                                    <td>
                                        {{$coin->symbol}}
                                    </td>
                                    
                                    <td>
                                        {{$coin->price}}
                                    </td>
                                    <td>
                                        {{$coin->market_cap}}
                                    </td>
                                    <td>
                                        {{$coin->volume}}
                                    </td>
                                    <td>
                                        {{$coin->launch_date}}
                                    </td>
                                    <td>
                                        {{$coin->smart_chain}}
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Coin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="col-md-12">
                    <div class="card custom-border">
                        <div class="row">
                            
                            <div class="col-md-12 py-4 pr-4 pl-4">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 text-left">
                                       
                                       <hr>
                                    </div>
                                        <form action="/add_coin" method="post" enctype="multipart/form-data">
                                          @csrf
                                          @if(isset($coin))
                                            <input type="hidden" name="id" value="{{$coin->id}}">
                                          @endif
                                            
                                            
                                     
                                   
                                        <h4 class="coin-color">Contract Address</h4>
                                       
                                            <div class="form-group">
                                                <label for="">Binance Smart Chain <small class="text-danger">Required</small></label>
                                                <input type="text" value="" required name="smart_chain" class="form-control" >
                                            </div>
                                            
                                        
                                    
                                    <div class="col-md-12 my-5 text-center">
                                        <button class="btn btn-danger">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
@endsection
