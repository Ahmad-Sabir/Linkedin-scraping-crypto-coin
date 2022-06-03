@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                @if(Session::has('info'))
                    <div style="background-color: #727CF5" class="alert alert-primary alert-dismissible fade show text-center text-white font-weight-bold" role="alert">
                        {{ Session::get('info') }}
                        <button type="button" class="close" style="color: black; outline: none" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card-body">
                    <h6 class="card-title">Enter New Password Here</h6>

                    <form method="post" action="{{ url('password') }}" class="forms-sample">
                        <div class="form-group">
                            <label>Password</label>
                            <input value="{{ old('password') }}" type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Enter New Password Here">
                            @if ($errors->has('password'))
                                <span class="text-danger">
                                <small class="font-weight-bold">{{ $errors->first('password') }}</small>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input value="{{ old('confirm_password') }}" type="password" name="confirm_password" class="form-control {{ $errors->has('confirm_password') ? 'is-invalid' : '' }}" placeholder="Re-enter New Password Here">
                            @if ($errors->has('confirm_password'))
                                <span class="text-danger">
                                <small class="font-weight-bold">{{ $errors->first('confirm_password') }}</small>
                            </span>
                            @endif
                        </div>
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <button type="submit" class="btn btn-primary mr-2">Change Password</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
