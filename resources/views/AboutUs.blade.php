@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
   

    <!-- About us-->
    <section class="section" data-preset='{"title":"Revolution Crossfade","category":"slider","reload":true,"id":"revolution-crossfade"}'>
        <div class="rev_slider_wrapper fullscreen-container context-dark bg-900 text-center" id="rev_slider_crossfade_wrapper">
        <div class="rev_slider fullscreenbanner" id="rev_slider_crossfade" style="display:none;" data-version="5.4.1">                    
            <ul>           
              <li data-transition="crossfade" data-delay="9000"><img class="rev-slidebg" src="images/AboutUs.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="140" data-scaleend="100" data-bgparallax="15"/>
              <div class="rev_row_zone rev_row_zone_middle">
              <div class="container"> 
                <!-- Breadcrumb-->
                <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" >@if(session()->get('lenguaje')=='espanol') Inicio  @else Home @endif</a></li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link" >@if(session()->get('lenguaje')=='espanol') Nuestra Firma  @else Our Sign @endif</a></li>
                        <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">@if(session()->get('lenguaje')=='espanol') Quienes Somos  @else About Us @endif</span></li>
                </ul>
            <div class="container">
            <div class="row justify-content-center novi-disabled">                         
            <div class="container">
                <div class="col-md-6">
                <h6 class="text-primary text-left">@if(session()->get('lenguaje')=='espanol') Unas Pocas Palabras Sobre Nosotros  @else A Few Words About Us @endif</h6>
                <h4 class="text-left">@if(session()->get('lenguaje')=='espanol') Somos una compañía internacional con amplia experiencia en consultoría de migración corporativas  @else We are an international company with extensive experience in corporate migration consulting @endif</h4>
                <h4 class="text-left">@if(session()->get('lenguaje')=='espanol') Contamos con oficinas en Europa y Sudamérica  @else We have offices in Europe and South America @endif</h4>  
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

    <section class="section section-sm bg-light novi-background" id="journey" style="background-image: url(images/FondoPagina.jpg);" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-17"}'>
        <div class="container">
          <div class="row justify-content-lg-between">
            <div class="col-md-6">
              <div class="section-sm">
                
                <h5 data-animate='{"class":"bounceInLeft"}'><img src="images/Infinito.png" width="120" height="80">@if(session()->get('lenguaje')=='espanol') PROFESIONALES ESPECIALIZADOS  @else SPECIALIZED PROFESSIONALS @endif</h5>
                <h1 data-animate='{"class":"bounceInLeft"}'>@if(session()->get('lenguaje')=='espanol') Gracias a la experiencia y conocimiento de nuestro equipo multidisciplinar, ofrecemos:  @else Thanks to the experience and knowledge of our multidisciplinary team, we offer:  @endif</h1>
                <div class="row justify-content-lg-end novi-disabled">
                  <div class="col-lg-10 col-xl-9 col-xxl-8" data-animate='{"class":"fadeInUp"}'>
                  <h2 class="mt-5"><span class="text-rotator" data-text-class="text-dark" data-words="@if(session()->get('lenguaje')=='espanol') Estrategias de movilidad global y de derecho migratorio  @else Global mobility and immigration law strategies @endif,@if(session()->get('lenguaje')=='espanol') Valor y servicio excepcional a nuestros clientes  @else Exceptional value and service to our customers  @endif" data-rotate-interval="3000" data-rotate-animation="bounceInDown, bounceOutDown"><span class="rotate-area"></span></span></h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-auto" data-animate='{"class":"fadeInUp"}'>
              <img class="d-none d-sm-block" src="images/AboutUs2.jpg" alt="" width="550" height="350" "/>
            </div>
      </section> 

      <section class="section section-sm bg-transparent novi-background" style="padding-top: 0px; padding-bottom: 0px;" data-preset='{"title":"Services","category":"slider","reload":true,"id":"services"}'>
        <!-- Swiper slider-->
        <div class="swiper-container">
          <!-- Additional required wrapper-->
          <div class="swiper-wrapper">
            <!-- Slides-->
            <div class="swiper-slide section-sm px-xl-5 align-items-lg-end context-dark overlay-dark" style="background-image: url( images/OurVision.jpg )">
              <div class="container">
                <div class="row row-20 justify-content-between align-items-end">
                  <div class="col-sm-8 col-md-6">
                    <h2>@if(session()->get('lenguaje')=='espanol') NUESTRA VISION  @else OUR VISION @endif</h2>
                    <h5 class="text-left">@if(session()->get('lenguaje')=='espanol') Combinamos nuestro conocimiento con las necesidades de nuestros clientes para que cada proceso sea único y excepcional.</br> Ser ese aliado estratégico para nuestros clientes.  @else We combine our knowledge with the needs of our clients so that each process is unique and exceptional.</br> Being that strategic ally for our clients. @endif</h5>
                  </div>
                  <div class="col-auto"><a class="link small"><span></span></a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide section-sm px-xl-5 align-items-lg-end context-dark overlay-dark" style="background-image: url( images/OurMision.jpeg )">
              <div class="container">
                <div class="row row-20 justify-content-between align-items-end">
                  <div class="col-sm-8 col-md-6">
                    <h2>@if(session()->get('lenguaje')=='espanol') NUESTRA MISION  @else OUR MISSION @endif</h2>
                    <h5 class="text-left">@if(session()->get('lenguaje')=='espanol') Aportar nuestra experiencia y conocimiento en la implementación de diferentes estrategias migratorias y de movilidad global que se ajusten a las necesidades de nuestros clientes, brindando asesoría personalizada en cada paso del proceso  @else Provide our experience and knowledge in the implementation of different migration and global mobility strategies that meet the needs of our clients, providing personalized advice at each step of the process @endif</h5>
                  </div>
                  <div class="col-auto"><a class="link small"><span></span></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Pagination-->
          <div class="swiper-pagination d-xl-none"></div>
          <!-- Navigation buttons-->
          <div class="swiper-button-prev d-none d-xl-flex"></div>
          <div class="swiper-button-next d-none d-xl-flex"></div>
        </div>
      </section>

      <section class="section section-lg bg-light novi-background" id="journey" style="padding-bottom: 11.6%; background-image: url(images/FondoPagina.jpg);" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-17"}'>
      <div class="container">
          <div class="text-center col-md-auto" data-animate='{"class":"fadeInUp"}'>
              <div class="tab">
                <ul class="nav nav-classic" role="tablist" data-animate='{"class":"fadeInRight"}'>
                  <li class="nav-item"><img class="img-element" src="images/Experience.png" width="350" height="250" data-animate='{"class":"bounceIn"}'/><a class="nav-link h2 active" data-toggle="tab" href="#navClassic2-1" role="tab" aria-selected="true"><br>@if(session()->get('lenguaje')=='espanol') EXPERIENCIA  @else EXPERIENCE @endif</a></li>
                  <li class="nav-item"><img class="img-element" src="images/Know-How.png" width="350" height="250" data-animate='{"class":"bounceIn"}'/><a class="nav-link h2" data-toggle="tab" href="#navClassic2-2" role="tab" aria-selected="false"><br>@if(session()->get('lenguaje')=='espanol') KNOW-HOW  @else KNOW-HOW  @endif</a></li>
                  <li class="nav-item"><img class="img-element" src="images/Knowledge.png" width="350" height="250" data-animate='{"class":"bounceIn"}'/><a class="nav-link h2" data-toggle="tab" href="#navClassic2-3" role="tab" aria-selected="false"><br>@if(session()->get('lenguaje')=='espanol') CONOCIMIENTO  @else KNOWLEDGE @endif</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="navClassic2-1" role="tabpanel">
                   <div class="row justify-content-center novi-disabled">
                      <div class="col-md-12" data-animate='{"class":"fadeInUp"}'>
                              <!-- Blurb small-->
                      <article class="blurb blurb-small">
                                <div class="blurb-title h3 text-left">@if(session()->get('lenguaje')=='espanol') 8+ años brindando orientación sobre:  @else 8+ years providing guidance on:  @endif</div>
                                <ul class="list list-marked-arrow ml-12 text-left">           
                                  <li class="list-item h4"> @if(session()->get('lenguaje')=='espanol') Servicion de inmigración @else Immigration service @endif </li>
                                  <li class="list-item h4"> @if(session()->get('lenguaje')=='espanol') Movilidad global y empleabilidad de extranjeros a nuestros clientes  @else Global mobility and employability of foreigners to our clients  @endif </li>
                                </ul>
                              </article>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="navClassic2-2" role="tabpanel">
                   <div class="row justify-content-center novi-disabled">
                    <div class="col-md-12" data-animate='{"class":"fadeInUp"}'>
                              <!-- Blurb small-->
                              <article class="blurb blurb-small">
                                <div class="blurb-title h3 text-center">@if(session()->get('lenguaje')=='espanol') Nuestros servicios no solo incluyen brindar asesoría experta, sino también orientación a través del proceso migratorio. manteniendo su empresa en pleno cumplimiento legal  @else Our services not only include providing expert advice, but also guidance through the immigration process. keeping your company in full legal compliance @endif</div>
                              </article>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="navClassic2-3" role="tabpanel">
                   <div class="row justify-content-center novi-disabled">
                    <div class="col-md-12" data-animate='{"class":"fadeInUp"}'>
                              <!-- Blurb small-->
                              <article class="blurb blurb-small">
                                <ul class="list list-marked-arrow ml-12 text-left">           
                                  <li class="list-item h3"> @if(session()->get('lenguaje')=='espanol') Derecho migratorio colombiano @else Colombian immigration law  @endif </li>
                                  <li class="list-item h3"> @if(session()->get('lenguaje')=='espanol') Servicios consulares  @else Consular services @endif </li>
                                  <li class="list-item h3"> @if(session()->get('lenguaje')=='espanol') Obtención @else Obtaining @endif </li>
                                  <li class="list-item h3"> @if(session()->get('lenguaje')=='espanol') Legalización  @else Legalization @endif </li>
                                  <li class="list-item h3"> @if(session()->get('lenguaje')=='espanol') Apostilla de Documentos @else Apostille of Documents @endif </li>
                                  <li class="list-item h3"> @if(session()->get('lenguaje')=='espanol') Capacitaciones migratorias corporativas  @else Corporate immigration training  @endif </li>
                                  <li class="list-item h3"> @if(session()->get('lenguaje')=='espanol') Auditorias @else Audits  @endif </li>
                                </ul>
                              </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


@endsection