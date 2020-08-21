@extends('layouts.auth-layout')

@section('content')
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
               <div class="col-md-5 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <img src="{{ asset('assets/img/favicon.png') }}" class="img-fluid" alt="LOGO">
                        <h5 class="mt-3 mb-3">Login</h5>
                        <p>Plataforma de cursos e videos online <br> Assista os melhores videos gratuitamente.</p>
                     </div>
                  
                    <!-- TEMPLATE FORM -->
                     <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                           <label>Email:</label>
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>
                        <div class="form-group">
                           <label>Password:</label>
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
                                <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Entrar</button>
                              </div>
                           </div>
                        </div>
                     </form>

                   <!-- TEMPLATE FORM -->
                     <div class="text-center mt-5">
                        <p class="light-gray">Ainda nao tem conta? <a href="/register">Cadastre-se aqui</a></p>
                     </div>
                  </div>
               </div>
               @include('layouts.auth-slide')
            </div>
         </div>

@endsection