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
              <li data-transition="crossfade" data-delay="9000"><img class="rev-slidebg" src="images/OurTeam.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="140" data-scaleend="100" data-bgparallax="15"/>
              <div class="rev_row_zone rev_row_zone_middle">
              <div class="container"> 
                <!-- Breadcrumb-->
                <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" >@if(session()->get('lenguaje')=='espanol') Inicio  @else Home @endif</a></li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link" >@if(session()->get('lenguaje')=='espanol') Nuestra Firma  @else Our Sign @endif</a></li>
                        <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">@if(session()->get('lenguaje')=='espanol') Nuestro Equipo  @else Our Team @endif</span></li>
                </ul>
            <div class="container">
            <div class="row justify-content-center novi-disabled">                         
            <div class="container">
                <div class="col-md-6">
                  <br>
                <h4 class="text-left">@if(session()->get('lenguaje')=='espanol') Nuestro equipo se compone de abogados y profesionales altamente cualificados con diferentes posgrados y MBA's @else Our team is made up of lawyers and highly qualified professionals with different postgraduate degrees and MBA's @endif</h4>
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

            <!-- Bootstrap accordion-->
      <section class="section section-sm bg-light novi-background" id="journey" style="background-image: url(images/FondoPagina.jpg);" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-17"}'>
        <div class="container-fluid">
        <h2 class="text-uppercase text-center font-weight-bold" data-animate='{"class":"bounceInLeft"}'>@if(session()->get('lenguaje')=='espanol') PERFILES PROFESIONALES @else PROFESIONAL PROFILES  @endif</h2>
        <div class="row row-10 row-md-10">
        <div class="col-md-12"><a class="thumbnail-up-shadow lightgallery-item"><img src="images/NuestroEquipo.png" data-animate='{"class":"slideInLeft"}'/></a></div>
            </div>  
            <div class="accordion accrordion-bootstrap">.
            <div class="accordion-item accordion-bootstrap-sample-1"><a class="accordion-header accordion-bootstrap-sample-group" href="#" data-multi-switch='{"targets":".accordion-bootstrap-sample-1","isolate":".accordion-bootstrap-sample-group","state":true}'>@if(session()->get('lenguaje')=='espanol') Perfil de Marina  @else Marina's Profile  @endif</a>
              <div class="accordion-body accordion-bootstrap-sample-1" data-multi-switch-target-slide>
              <div class="row row-40 novi-background">
               <div class="col-xs-10 col-md-5"><img class="rounded-lg" src="images/Marina.jpg" alt="" width="500" height="510"/>
                </div>
            <div class="col-md-7">
              <div class="pl-xl-4">
                <div class="row row-30 row-md-40 row-xl-60">
                  <div class="col-md-12 text-justify">
                    <h2>@if(session()->get('lenguaje')=='espanol') Hola, <br>Soy Marina Hommersom. <br>Soy la persona que se encarga de la realización de mejoras en el rendimiento empresarial con SAP Cloud ERP Solutions  @else Hello, <br>I'm Marina Hommersom. <br>I am the person in charge of making business performance improvements with SAP Cloud ERP Solutions  @endif</h2>
                  </div>
                  <div class="col-md-12 text-justify">
                    <h6>@if(session()->get('lenguaje')=='espanol') Consultor multilingüe (holandés, inglés, español y alemán) con amplia experiencia en consultoría apoyando a clientes en todo su proceso de transformación digital en ERP en la nube y optimizando sus procesos de negocio. A lo largo de los años, he adquirido mucha experiencia en diversas áreas de trabajo, lo que me ha dado una idea de los diferentes tipos de empresas e industrias. Tengo excelentes habilidades de comunicación y una fuerte orientación a resultados con experiencia en Gestión de Proyectos, Gestión de Procesos, Control de Calidad, Implementación y capacitación. @else Multilingual Consultant (Dutch, English, Spanish and German) with extensive consulting experience supporting clients throughout their digital transformation process in cloud ERP and optimizing their business processes. During the years I have gained a lot of experience in various working areas which has given me insights into different kinds of businesses and industries. I have excellent communication skills and a strong results orientation with experience in Project Management, Process Management, Quality Controlling, Implementation and training.  @endif</h6>
                  </div>
                  </div>
                  </div>
                  </div>
              </div>
            </div>
            <div class="accordion-item accordion-bootstrap-sample-2"><a class="accordion-header accordion-bootstrap-sample-group" href="#" data-multi-switch='{"targets":".accordion-bootstrap-sample-2","isolate":".accordion-bootstrap-sample-group","state":true}'>@if(session()->get('lenguaje')=='espanol') Perfil de Jonathan @else Jonathan's Profile  @endif</a>
              <div class="accordion-body accordion-bootstrap-sample-2" data-multi-switch-target-slide>
              <div class="row row-40 novi-background">
               <div class="col-xs-10 col-md-5"><img class="rounded-lg" src="images/Jonathan.jpg" alt="" width="500" height="510"/>
                </div>
            <div class="col-md-7">
              <div class="pl-xl-4">
                <div class="row row-30 row-md-40 row-xl-60">
                  <div class="col-md-12 text-justify">
                  <h2>@if(session()->get('lenguaje')=='espanol') Hola, <br>Soy Jonathan Agamez. <br>Soy Abogado de Inmigración Comercial  @else Hello, <br>I'm Jonathan Agamez. <br>I am a Business Immigration Lawyer  @endif</h2>
                  </div>
                  <div class="col-md-12 text-justify">
                    <h6>@if(session()->get('lenguaje')=='espanol') Abogado bilingüe de inmigración (español, inglés) con amplia experiencia en consultoría de inmigración corporativa, brindando orientación a los clientes sobre servicios de inmigración, movilidad global, derecho laboral local y asuntos de empleo para expatriados. A lo largo de los años, he adquirido mucha experiencia en varias áreas de trabajo, lo que me ha dado una idea de los diferentes tipos de negocios e industrias. Tengo excelentes habilidades de comunicación y una sólida experiencia en la gestión de un gran volumen de trabajo en un entorno dinámico. @else Bilingual Immigration Attorney (Spanish, English) with extensive corporate immigration consulting experience, providing guidance on immigration services, global mobility, local labor law and employment expatriate matters to clients. During the years I have gained a lot of experience in various working areas which has given me insights into different kinds of businesses and industries. I have excellent communication skills and a strong experience managing a high volume of work in dynamic environment.   @endif</h6>
                  </div>
                  </div>
                  </div>
                  </div>
            </div>
          </div>
        <br>

      <!-- Novi-->

        <div class="container">
          <div class="row row-30 align-items-center justify-content-lg-between">
            <div class="col-md-6" data-animate='{"class":"fadeInLeft"}'>
            <h3 class="text-center">@if(session()->get('lenguaje')=='espanol') Nuestro equipo en Hommersom Consulting se enfoca en brindar un valor excepcional en estrategias de migración y movilidad global. @else Our team at Hommersom Consulting is focused on delivering exceptional value in global mobility and migration strategies. @endif</h3>
            </div>
            <div class="col-md-6"><img class="img-element" src="images/OurTeamGif.gif" alt="" width="500" height="300" data-animate='{"class":"bounceIn"}'/>
            </div>
          </div>
        </div>
      </section>


@endsection