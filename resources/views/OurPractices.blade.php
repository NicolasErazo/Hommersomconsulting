@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <!-- Intro-->

    <section class="section" data-preset='{"title":"Revolution Crossfade","category":"slider","reload":true,"id":"revolution-crossfade"}'>
        <div class="rev_slider_wrapper fullscreen-container context-dark bg-900 text-center" id="rev_slider_crossfade_wrapper">
        <div class="rev_slider fullscreenbanner" id="rev_slider_crossfade" style="display:none;" data-version="5.4.1">                    
            <ul>           
              <li data-transition="crossfade" data-delay="9000"><img class="rev-slidebg" src="images/OurPractices.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="140" data-scaleend="100" data-bgparallax="15"/>
              <div class="rev_row_zone rev_row_zone_middle">
              <div class="container"> 
                <!-- Breadcrumb-->
                <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" >@if(session()->get('lenguaje')=='espanol') Inicio  @else Home @endif</a></li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link" >@if(session()->get('lenguaje')=='espanol') Servicios  @else Services @endif</a></li>
                        <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">@if(session()->get('lenguaje')=='espanol') Nuestras Practicas  @else Our Practices @endif</span></li>
                </ul>
            <div class="container">
            <div class="row justify-content-center novi-disabled">                         
            <div class="container">
                <div class="col-md-6">
                  <br>
                <h4 class="text-left">@if(session()->get('lenguaje')=='espanol') Nuestros servicios no solo incluyen brindar asesoría experta, sino también orientación a través del proceso migratorio, manteniendo su empresa en pleno cumplimiento legal @else Our services not only include providing expert advice, but also guidance through the immigration process, keeping your company in full legal compliance. @endif</h4>
                </div>
                </div>
                </div>
                </div>
                <div class="tp-caption" data-type="row" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:400,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                <div class="tp-caption" data-type="column" data-columnwidth="100%" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;opacity:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">    
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

      <section class="section section-sm bg-light novi-background" id="journey" style=" background-image: url(images/FondoPagina.jpg);" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-17"}'>
         <div class="row justify-content-center novi-disabled">
          <div class="col-md-6 text-center" data-animate='{"class":"fadeInUp"}'>
       <h1 class="font-weight-bold"> @if(session()->get('lenguaje')=='espanol') NUESTRAS PRACTICAS  @else OUR PRACTICES @endif</h1>
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

@endsection    