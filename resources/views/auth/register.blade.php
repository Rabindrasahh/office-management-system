

@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Royal Websie Register Page</title>
        <meta content="#" name="descriptison" />
        <meta content="#" name="keywords" />
        
    </head>
    <body>
        <div class="login-page">
            <div class="box">
                <div class="square" style="--i: 0;"></div>
                <div class="square" style="--i: 1;"></div>
                <div class="square" style="--i: 2;"></div>
                <div class="square" style="--i: 3;"></div>
                <div class="square" style="--i: 4;"></div>
                <div class="square" style="--i: 5;"></div>
                <div class="login-data">
                    <div class="form">
                        <h2>Signup</h2>
                        <form action="{{ route('register') }}" method="POST">
                                @csrf
                            <div class="inputBx">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span>Name</span>
                                <i class="fas fa-user"></i>
                                 <div> 
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                   </span>
                                    @enderror
                               </div>
                            </div>
                            <div class="inputBx">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span>Email</span>
                                <div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror
                                </div>
                                <i class="fas fa-envelope"></i>
                            </div>

                            <div class="inputBx">
                                <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company">
                                <span>Company</span>
                                <div>
                                    @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror
                                </div>
                                <i class="fas fa-company"></i>
                            </div>


                            <div class="inputBx password">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                                <span>Password</span>
                                <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="inputBx password">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                                <span>Confirm Password</span>
                                <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                                <i class="fas fa-lock"></i>
                            </div>
                            <label class="remember"><input type="checkbox" /> Remember</label>
                            <div class="inputBx">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <!-- <input type="submit" value="Log in" disabled /> -->
                            </div>
                        </form>
                         @if (Route::has('login'))
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        Already have account
                                    </a>
                        @endif 
                    </div>
                </div>
            </div>
        </div>

       
    </body>
</html>
@endsection