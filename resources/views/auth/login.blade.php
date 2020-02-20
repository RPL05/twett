@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 py-4">
            <div class="card border-0 shadow" style="rounded">
                <div class="card-body">
                    <form action="" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="" id="" class="form-control bg-light" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" name="" id="" class="form-control bg-light" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info col-md-4">
                                    {{ __('Login') }}
                                </button>
                            </div>  
                        </div>
                    </form>
                    <div class="py-3"></div>
                </div>
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                         <img src="{{('image/1259px-Twitter_bird_logo_2012.svg.png')}}" alt="" class="" height="30" style="margin-top: -30px;">
                    </div>
                     <br>
                        <h5 class="text-muted text-center" >See What's Happening in <br>the world right now</h5>
                        <br>
                            <a href="http://twitter.com/account/access?flow=signup">
                                <h6 class="font-weight-bold">Join twitter Today</h6>
                            </a>
                            @if (Route::has('register'))
                        <div class="form-group ">
                            <div class="col-md-12">
                            <div class="row justify-content-center">    
                                <button class="btn btn-info btn-block">
                                    {{ __('Sign Up') }}
                                </button>
                            </div>
                            </div>  
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>






















                <!-- <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
