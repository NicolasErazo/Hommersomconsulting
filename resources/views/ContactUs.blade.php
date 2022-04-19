@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <section class="section section-sm context-dark bg-image novi-background" style="padding-bottom: 10%; background-image: url(images/Sonriendo.jpg);" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-17"}'>
      </section>
    <!-- Contact us-->
    <section class="section section-sm bg-light novi-background" id="journey" style="background-image: url(images/FondoPagina.jpg);" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-17"}'>
        <div class="container">
        <h3 class="text-center font-weight-bold">@if(session()->get('lenguaje')=='espanol') FORMULARIO DE CONTACTANOS @else CONTACT US FORM @endif</h3>
          <div class="row">
            <div class="col-md-6">
                <div class="icon-box">
                <img src="images/WhatsApp.png">
                <div class="h5"> <a href="tel:#">&nbsp;&nbsp;(+57 )319 4959 404</a></div>
                </div> 
                   
                <div class="icon-box">
                <img src="images/DeskPhone.png">
                <div class="h5"><a href="tel:#">&nbsp;&nbsp;(+31) 6 111 89 120</a></div>
                </div> 

                <div class="icon-box">
                <img src="images/Email.png">
                <div class="h5"><a href="tel:#">&nbsp;&nbsp;info@hommersomconsulting.com</a></div>
                </div> 
            </div>

            <div class="col-md-6">
              <form method="post" action="{{ route('ContactUsPost')}}">
                @csrf
                <div class="form-group">
                  <label for="input-name">@if(session()->get('lenguaje')=='espanol')Nombre: @else Name: @endif</label>
                  <div class="position-relative">
                    <input class="form-control"  type="text" name="nombre" placeholder="@if(session()->get('lenguaje')=='espanol')Tu nombre @else Your name @endif" data-constraints="@Required">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input-email">@if(session()->get('lenguaje')=='espanol') Correo Electronico: @else E-mail: @endif</label>
                  <div class="position-relative">
                    <input class="form-control"  type="email" name="correo" placeholder="@if(session()->get('lenguaje')=='espanol')Tu correo electronico @else Your e-mail address @endif" data-constraints="@Email @Required">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input-question">@if(session()->get('lenguaje')=='espanol') Pregunta: @else Question: @endif</label>
                  <div class="position-relative">
                    <textarea class="form-control"  name="pregunta" placeholder="@if(session()->get('lenguaje')=='espanol')Tu pregunta @else Your question @endif" data-constraints="@Required"></textarea>
                  </div>
                </div>
                <button class="btn btn-lg btn-primary" type="submit" >@if(session()->get('lenguaje')=='espanol') E n v i a r @else S e n d @endif</button>
              </form>
            </div>
          </div>
        </div> 
        <h4 class="text-center">@if(session()->get('lenguaje')=='espanol') SIGUENOS EN NUESTRAS REDES SOCIALES @HOMMERSONCONSULTING @else FOLLOW US ON OUR SOCIAL NETWORKS @HOMMERSONCONSULTING @endif</h4>
       </div>
      </section>
      
@endsection