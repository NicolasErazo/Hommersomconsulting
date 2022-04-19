@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
     
    <!-- Revolution crossfade-->
    <section class="section" data-preset='{"title":"Revolution Crossfade","category":"slider","reload":true,"id":"revolution-crossfade"}'>
        <div class="rev_slider_wrapper fullscreen-container context-dark bg-900 text-center" id="rev_slider_crossfade_wrapper">
          <div class="rev_slider fullscreenbanner" id="rev_slider_crossfade" style="display:none;" data-version="5.4.1">
            <ul>
              <li data-transition="crossfade" data-delay="9000"><img class="rev-slidebg" src="images/Reunion.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="140" data-scaleend="100" data-bgparallax="15"/>
                <div class="rev_row_zone rev_row_zone_middle">
                  <div class="tp-caption" data-type="row" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:400,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                    <div class="tp-caption" data-type="column" data-columnwidth="100%" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;opacity:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                      <section class="section-sm">
                        <div class="container">
                          <div class="row justify-content-sm-center align-items-sm-center novi-disabled">
                            <div class="col-xl-10"><img class="shadow-lg" src="images/Hommerson---Negativo.png" alt="" width="600" height="600"/>      
                              </div>                              
                              <h3>@if(session()->get('lenguaje')=='espanol')NUESTRO EQUIPO EN HOMMERSON CONSULTING SE ENFOCA EN BRINDAR UN VALOR EXCEPCIONAL EN ESTRATEGIAS DE MIGRACION Y MOVILIDAD GLOBAL @else OUR TEAM AT HOMMERSON CONSULTING IS FOCUSED ON DELIVERING EXCEPTIONAL VALUE IN GLOBAL MOBILITY AND MIGRATION STRATEGIES @endif</h3>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </li>
              

              
            <div class="tp-bannertimer" style="height: 10px; background: rgba(255,255,255,0.25);"></div>
          </div>
          <!-- Preloader-->
          <div class="rev-slider-preloader">
                            <div class="rev-slider-preloader-item">
                              <div></div>
                              <div></div>
                              <div></div>
                              <div></div>
                            </div>
                          </div>
                  </div>
                </section> 
                

      <!-- Novi-->
      <section class="section section-sm bg-light novi-background" id="journey" style="padding-bottom: 11.6%; background-image: url(images/FondoPagina.jpg);" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-17"}'>
        <div class="container">
          <div class="row row-30 align-items-center justify-content-lg-between">
            <div class="col-md-6 text-center"><h1 class="text-uppercase" data-animate='{"class":"bounceInLeft"}'>@if(session()->get('lenguaje')=='espanol') ¿QUE NOS HACE DIFERENTES?  @else WHAT MAKES US DIFFERENT? @endif</h1>
            <img class="img-element" src="images/Different.jpg" alt="" width="400" height="600" data-animate='{"class":"bounceIn"}'/>
            </div>
            <div class="col-md-6" data-animate='{"class":"fadeInLeft"}'>
              <ul class="list list-marked ml-5">           
                                  <li class="list-item"> @if(session()->get('lenguaje')=='espanol') 100% La satisfacción de nuestros clientes es nuestra prioridad @else 100% customer satisfaction is our priority @endif </li>
                                  <li class="list-item"> @if(session()->get('lenguaje')=='espanol') Somos asesores legales expertos  @else We are expert legal advisors @endif </li>
                                  <li class="list-item"> @if(session()->get('lenguaje')=='espanol') Brindamos un servicio personalizado  @else We provide a personalized service  @endif</li>
                                  <li class="list-item"> @if(session()->get('lenguaje')=='espanol') Tiempo máximo de respuesta de 24 horas  @else Maximum response time of 24 hours @endif</li>
                                  <li class="list-item"> @if(session()->get('lenguaje')=='espanol') Comunicación clara y abierta  @else Clear and open communication @endif</li>
                                  <li class="list-item"> @if(session()->get('lenguaje')=='espanol') Comunicación en varios idiomas Español, Ingles, Holandés y Alemán  @else Communication in several languages Spanish, English, Dutch and German @endif</li>
                                  <li class="list-item"> @if(session()->get('lenguaje')=='espanol') Nuestro secreto es estar siempre actualizados y bien capacitados en todas las regulaciones migratorias.  @else Our secret is to always be up to date and well trained in all immigration regulations. @endif</li>
                                </ul>
            </div>
          </div>
        </div>
        <div class="row justify-content-center novi-disabled">
          <div class="col-md-6 text-center" data-animate='{"class":"fadeInUp"}'>
            <br>
       <h1 class="font-weight-bold" data-animate='{"class":"bounceInLeft"}'> @if(session()->get('lenguaje')=='espanol') NUESTRAS PRACTICAS  @else OUR PRACTICES @endif</h1>
       </div>
       </div>
    <!-- Thumbnail upward-->
    <div class="row show-grid">
    <div class="col-md-6 text-center">
    <figure class="thumbnail-upward">
      <img class="thumbnail-upward-img" src="images/DerechoMigratorio.jpg" alt="" width="400" height="267"/>
                      <figcaption class="thumbnail-upward-caption">
                        <h5 class="thumbnail-upward-title">@if(session()->get('lenguaje')=='espanol') DERECHO MIGRATORIO @else IMMIGRATION LAW @endif</h5>
                        <div class="thumbnail-upward-description">@if(session()->get('lenguaje')=='espanol') @else  @endif</div><a class="btn btn-primary thumbnail-upward-btn" href="ImmigrationLaw">@if(session()->get('lenguaje')=='espanol') Echar un vistazo @else Take a look @endif</a>
                      </figcaption>
                    </figure>
    <h3 class="font-weight-bold" data-animate='{"class":"bounceInLeft"}'> @if(session()->get('lenguaje')=='espanol') DERECHO MIGRATORIO  @else IMMIGRATION LAW @endif</h3>
          </div>
          
    <div class="col-md-6 text-center">
    <figure class="thumbnail-upward">
      <img class="thumbnail-upward-img" src="images/MejoramientoDeProcesos.png" alt="" width="400" height="267"/>
                      <figcaption class="thumbnail-upward-caption">
                        <h5 class="thumbnail-upward-title">@if(session()->get('lenguaje')=='espanol') MEJORAMIENTO DE PROCESOS @else PROCESS IMPROVEMENT @endif</h5>
                        <div class="thumbnail-upward-description">@if(session()->get('lenguaje')=='espanol') @else  @endif</div><a class="btn btn-primary thumbnail-upward-btn" href="ProcessImprovement">@if(session()->get('lenguaje')=='espanol') Echar un vistazo @else Take a look @endif</a>
                      </figcaption>
                    </figure>
    <h3 class="font-weight-bold" data-animate='{"class":"bounceInLeft"}'> @if(session()->get('lenguaje')=='espanol') MEJORAMIENTO DE PROCESOS  @else PROCESS IMPROVEMENT @endif</h3>
          </div>
        </div>
      </section>

  
  <section class="section section-sm context-dark bg-image novi-background" style="padding-bottom: 10%; background-image: url(images/Sonriendo.jpg);" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-17"}'>
      </section>

    <!-- Contact us-->
    <section class="section section-sm bg-light novi-background" id="journey" style="padding-bottom: 11.6%; background-image: url(images/FondoPagina.jpg);" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-17"}'>
        <div class="container">
          <div class="row row-40">
            <div class="col-sm-10 col-md-6">
              <h3>@if(session()->get('lenguaje')=='espanol') COMO ENCONTRARNOS @else HOW TO FIND US @endif</h3>
              <p>@if(session()->get('lenguaje')=='espanol')llámenos/envíenos un correo electrónico directamente utilizando la información a continuación. @else Call/email us directly using the information below. @endif</p>
             
            <div class="row row-40">  
            <div class="col-md-6 col-lg-10">
                <div class="icon-box">
                <img src="images/WhatsApp.png">
                <div class="h5"> <a href="tel:+573194959404">&nbsp;&nbsp;(+57 )319 4959 404</a></div>
                </div> 
                   
                <div class="icon-box">
                <img src="images/DeskPhone.png">
                <div class="h5"><a href="tel:+31611189120">&nbsp;&nbsp;(+31) 6 111 89 120</a></div>
                </div> 

                <div class="icon-box">
                <img src="images/Email.png">
                <div class="h5"><a href="mailto:info@hommersomconsulting.com">&nbsp;&nbsp;info@hommersomconsulting.com</a></div>
                </div> 
            </div>
            </div>   
            </div>


            <div class="col-md-6">
              <h3>@if(session()->get('lenguaje')=='espanol') PONERSE EN CONTACTO @else GET IN TOUCH @endif</h3>
              <form  method="post" action="{{ route('ContactUsPost')}}">
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
                    <input class="form-control"  type="text" name="correo" placeholder="@if(session()->get('lenguaje')=='espanol')Tu correo electronico @else Your e-mail address @endif" data-constraints="@Email @Required">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input-question">@if(session()->get('lenguaje')=='espanol') Pregunta: @else Question: @endif</label>
                  <div class="position-relative">
                    <textarea class="form-control"  name="pregunta" placeholder="@if(session()->get('lenguaje')=='espanol')Tu pregunta @else Your question @endif" data-constraints="@Required"></textarea>
                  </div>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">@if(session()->get('lenguaje')=='espanol') E n v i a r @else S e n d @endif</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
