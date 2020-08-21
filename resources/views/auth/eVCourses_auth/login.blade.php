@extends('layouts.auth-layout')

@section('content')
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
               <div class="col-md-5 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <img src="{{ asset('assets/img/favicon.png') }}" class="img-fluid" alt="LOGO">
                        <h5 class="mt-3 mb-3">Welcome to Vidoe</h5>
                        <p>It is a long established fact that a reader <br> will be distracted by the readable.</p>
                     </div>
                     
                     <!-- LARAVEL FORM -->
                     <!-- <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                    </form> -->

                    <!-- LARAVEL FORM -->
                  
                    <!-- TEMPLATE FORM -->
                     <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                           <label>Email</label>
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>
                        <div class="form-group">
                           <label>Password</label>
                           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror

                              <input class="form-check-input" type="hidden" name="remember" id="remember" checked >
                        </div>
                        <div class="mt-4">
                           <div class="row">
                              <div class="col-12">
                                <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Sign In</button>
                              </div>
                           </div>
                        </div>
                     </form>

                   <!-- TEMPLATE FORM -->
                     <div class="text-center mt-5">
                        <p class="light-gray">Don’t have an account? <a href="register.html">Sign Up</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="login-main-right bg-white p-5 mt-5 mb-5">
                     <div class="owl-carousel owl-carousel-login">
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="{{ asset('assets/img/login.png') }}" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">​Watch videos offline</h5>
                              <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="{{ asset('assets/img/login.png') }}" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Download videos effortlessly</h5>
                              <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="{{ asset('assets/img/login.png') }}" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Create GIFs</h5>
                              <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

@endsection