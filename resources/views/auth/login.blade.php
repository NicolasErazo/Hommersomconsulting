@extends('layouts.app')

@section('content')
<section class="section section-one-screen section-sm overlay-dark-07 novi-background" data-preset='{"title":"Login","category":"one screen page, form","reload":true,"id":"login"}'>
    <div class="container">
      <div class="row justify-content-center novi-disabled">
        <div class="col-md-8 col-lg-6 col-xxl-5">
          <article class="accent-box">
            <h4 class="accent-box-title text-center">@if(session()->get('lenguaje')=='espanol')Ingreso @else Login @endif</h4>
            <p class="accent-box-text text-center">@if(session()->get('lenguaje')=='espanol')Ingrese sus credenciales. @else Enter your credentials below. @endif </p>
            <form class="accent-box-form" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text int-user novi-icon"></span></div>
                    <input class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}"  type="text" name="email" placeholder="E-mail" data-constraints="@Required">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text int-user novi-icon"></span></div>
                  <input class="form-control input-password password-login @error('password') is-invalid @enderror" id="password" type="text" name="password" placeholder="@if(session()->get('lenguaje')=='espanol')Contraseña @else Password @endif" data-constraints="@Required">
                  <div class="input-group-append"><span class="input-group-text input-group-text-nodivider input-password-icon" data-multi-switch='{"targets":".password-login"}'></span></div>
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div style="padding-left: 3%" class="form-group row">
                <div class="col-md-6 ">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                          @if(session()->get('lenguaje')=='espanol'){{ __('Recordarme') }} @else {{ __('Remember Me') }} @endif
                        </label>
                    </div>
                </div>
             </div>
              <button class="btn btn-block btn-lg btn-primary accent-box-btn" type="submit">@if(session()->get('lenguaje')=='espanol')Ingresar @else Login @endif</button>
              <div class="accent-box-text small group-15">
                @if (Route::has('password.request'))
                  <div>
                    <u class="font-weight-medium"><a class="link-inherit" href="{{ route('password.request') }}">@if(session()->get('lenguaje')=='espanol')¿No recuerda la contraseña? @else Forgot your password? @endif </a></u>
                  </div>
                @endif
                <div>@if(session()->get('lenguaje')=='espanol')¿No tienes cuenta?  @else Haven’t an account?@endif
                  <u class="font-weight-medium"><a class="link-inherit" href="{{ route('register') }}">@if(session()->get('lenguaje')=='espanol')Registrarse  @else Sign up here @endif </a></u>
                </div>
              </div>
            </form>
          </article>
        </div>
      </div>
    </div>
  </section>
@endsection
