<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <!-- Scripts -->
    {{--     <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <!-- Styles --> 
    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="{{asset('images/Icono.png')}}" type="image/x-icon">
    
    <link rel="stylesheet" href="{{asset('components/base/base.css')}}">
    <script src="{{asset('components/base/core.min.js')}}"></script>
    <script src="{{asset('components/base/script.js')}}"></script>
    <link href="{{asset('css/bvselect.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/datatables.min.css')}}" rel="stylesheet">    
    @yield('head')
  </head>
  <body>
    <div  class="page ">
      <header class="section rd-navbar-wrap" data-preset='{"title":"Navbar Default","category":"header","reload":true,"id":"navbar-default"}'>
        <nav class="rd-navbar">
          <div class="navbar-container">
            <div class="navbar-cell">
              <div class="navbar-panel" style="height: 120px;">
                <button class="navbar-switch int-hamburger novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}'></button>
                <div class="navbar-logo"><a class="navbar-logo-link">
                  <img style="margin-top: 20%;" class="navbar-logo-default" src="{{asset('images/Hommerson-Digital---Principal-sin-bordes-con-tagline-ajustado.png')}}" alt="Intense" width="200" height="51"/>
                  <img class="navbar-logo-inverse" src="{{asset('images/Hommerson-Digital---Principal-sin-bordes-con-tagline-ajustado.png.png')}}" alt="Intense" width="200" height="51"/>
                </a>
              </div>
              </div>
            </div>
            <div class="navbar-cell navbar-spacer"></div>
            <div class="navbar-cell navbar-sidebar">
              <ul class="navbar-navigation rd-navbar-nav">

                <li class="navbar-navigation-root-item">
                      
                      <a class="navbar-navigation-root-link" href="{{ url('/home') }}">@if(session()->get('lenguaje')=='espanol') Inicio @else Home @endif </a>
                    </li>

                  <li class="navbar-navigation-root-item">
                    <a class="navbar-navigation-root-link">@if(session()->get('lenguaje')=='espanol') Nuestra Firma @else Our Sign @endif </a>
                  <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{ route('AboutUs') }}">@if(session()->get('lenguaje')=='espanol') Quienes Somos @else About Us @endif</a>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{ route('OurTeam') }}">@if(session()->get('lenguaje')=='espanol') Nuestro Equipo @else Our Team @endif</a>
                    </li>
                    </li>
                  </ul>

                  <li class="navbar-navigation-root-item">
                  <a class="navbar-navigation-root-link">@if(session()->get('lenguaje')=='espanol') Servicios @else Services @endif </a>
                  <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{ route('OurPractices') }}">@if(session()->get('lenguaje')=='espanol') Nuestras Practicas @else Our Practices @endif</a>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{ route('ImmigrationLaw') }}">@if(session()->get('lenguaje')=='espanol') Derecho Migratorio @else Immigration Law @endif</a>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{ route('ProcessImprovement') }}">@if(session()->get('lenguaje')=='espanol') Mejoramiento de Procesos @else Process Improvement @endif</a>
                    </li>
                    </li>
                  </ul>
              
                  
                <li class="navbar-navigation-root-item">
                    
                      <a class="navbar-navigation-root-link" href="{{ route('ContactUs') }}">@if(session()->get('lenguaje')=='espanol') Contactenos @else Contact Us @endif </a>
                    </li>
                    
                <li class="navbar-navigation-root-item active"><a class="navbar-navigation-root-link">@if(session()->get('lenguaje')=='espanol') Lenguaje @else Language @endif</a>
                  <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                    <li class="navbar-navigation-back">
                      <button class="navbar-navigation-back-btn">Back</button>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{ route('lenguaje.show','espanol') }}">Español</a>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{ route('lenguaje.show','ingles') }}">Ingles</a>
                    </li>
                  </ul>
                </li>
                
                @if (Route::has('login'))
                @auth
                    
                    <li class="navbar-navigation-root-item">
                      
                      <a class="navbar-navigation-root-link" href="{{ route('logout') }}" onclick="event.preventDefault();   document.getElementById('logout-form').submit();">
                        @if(session()->get('lenguaje')=='espanol') Salir @else Logout @endif  </a>
                      <form id="logout-form" action="{{ route('logout') }}"  method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    </li>
                    @else
                    <li class="navbar-navigation-root-item">
                      <a class="navbar-navigation-root-link" href="{{ route('login') }}">@if(session()->get('lenguaje')=='espanol') Ingresar @else Login @endif </a>
                      
                    </li>
                      @if (Route::has('register'))
                      <li class="navbar-navigation-root-item">

                          <a class="navbar-navigation-root-link" href="{{ route('register') }}"> @if(session()->get('lenguaje')=='espanol') Registrarse @else Register @endif  </a>
                      </li>
                        @endif
                    @endauth
                          
                  
                @endif  

              </ul>
            </div>

          </div>
        </nav>
      </header>
       
    @include('partials.error')
    @include('partials.success')
    @include('partials.alert')
    @yield('content') 
    
    <footer class="section- context-dark" style="background-image: linear-gradient(270deg, #98bee7 0, #0084d0 50%, #004fb8 100%);" data-preset='{"title":"Footer Default","category":"footer","reload":false,"id":"footer-default"}'>
      <div class="container">
        <div class="row align-items-center justify-content-sm-between">
          <div class="col-md-6">
            <!-- Logo-->
          <div class="logo"><a class="logo-link">
            <img class="text-left" src="{{asset('images/Hommerson---Negativo.png')}}" alt="foto" width="300" height="60"/></a>
          </div>
            </div>
            <div class="col-md-6">
            <h6 data-text-class="text-white">
              
              @if(session()->get('lenguaje')=='espanol') 8+ años brindando orientación sobre servicios de inmigración, movilidad global y empleabilidad de extranjeros a nuestros clientes. 
              @else 8+ years providing guidance on immigration services, global mobility and employment expatriate matters to clients  @endif
            </h6>
            </div>
          </div>
        </div>
    </footer>


<!--          <div class="col-md-11 col-lg-7 col-xxl-6">
            <div class="row row-20 novi-disabled">
              <div class="col-auto col-sm-4">
                <div class="media media-xxs text-white">
                  <div class="media-left"><span class="icon icon-xs int-phone novi-icon"></span></div>
                  <div class="media-body">
                    <ul class="list list-contact">
                      <li class="list-contact-item">
                        <a class="list-contact-link" href="tel:#">(+57) 313 320 4343</a></li>   
                        <a class="list-contact-link" href="tel:#">(+31) 6 29 010 165 </a></li>   
                        <a class="link link-contrast text-white" href="mailto:#">info@hommersomconsulting.com</a>
                    </ul>
                  </div>
                </div>
                <p class="small">{{-- Calle 121 #2343-32432, Bogotá D.C. Colombia 2020 --}}</p>
              </div> 
{{--               <div class="col-auto col-sm-4">
                <ul class="list list-xs small">
                  <li class="list-item">Lun-Vi: 8am - 6pm</li>
                  <li class="list-item">Festivos: Cerrado</li>
                </ul>
              </div> --}}
{{--               <div class="col-auto col-sm-4">
                <ul class="list list-lg small text-white">
                  <li class="list-item"><a class="link link-contrast text-white" href="mailto:#">info@hommersomconsulting.com</a></li>
                </ul>
              </div> --}}
            </div>
          </div>
        </div>
        <hr class="divider footer-divider">
        <div class="row row-15 align-items-center justify-content-between footer-panel novi-disabled">
          <div class="col-auto"> -->

            <!-- Copyright-->


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bvselect.js') }}"></script>
  <script src="{{ asset('js/sweetalert2@9.js') }}"></script>
  <script src="{{asset('components/base/core.min.js') }}"></script>
  <script src="{{asset('components/base/script.js') }}"></script>
  <script src="{{ asset('js/Chart.bundle.min.js') }}"></script>
  <script type="text/javascript" >
    function salir_modal(id){
      $("#"+id).css({"display": "none"});	
  }
    </script>
    @yield('scripts')


</body>
</html>

