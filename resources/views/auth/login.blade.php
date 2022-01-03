

@extends('layouts.app')

@section('content')

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
                        <h2>Login</h2>
                        <form action="{{ route('login') }}" method="POST">
                               @csrf
                            <div class="inputBx">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span>Email</span>
                                <i class="fas fa-user"></i>
                                
                            </div>
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="inputBx password">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span>Password</span>
                                <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                                <i class="fas fa-lock"></i>

                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label class="remember"><input type="checkbox" /> Remember</label>
                            <div class="inputBx">
                                <button type="submit" class="btn btn-primary">Login
                                </button>
                                <!-- <input type="submit" value="Log in" disabled /> -->
                            </div>
                        </form>
                      @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forget Password
                                    </a>
                                @endif 
                               @if (Route::has('register'))
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        Register
                                    </a>
                                @endif 



                                              
                    </div>
                </div>
            </div>
        </div>

       
    </body>
</html>
@endsection



