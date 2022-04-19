@extends('layouts.app')
  @section('content')
  <section class="vide section section-lg text-center d-flex align-items-center min-vh-100 overlay-dark-02 context-dark novi-vide" data-vide-bg="video/bg-video-2" data-vide-options="posterType: jpg" data-preset='{"title":"Intro","category":"intro, media","reload":true,"id":"intro-7"}'>
    <div class="vide-inner">
      <div class="container" data-animate='{"class":"fadeInUp"}'>
        <div class="row justify-content-center novi-disabled">
          <div class="col-md-10 col-lg-8">
            <div class="context text-center">
              <h3>Asesoría legal en Derecho Laboral y Migratorio</h3>          
            </div>
           {{--  <article class="accent-box"> --}}
              <h4 class="accent-box-title">Contactate con nosotros</h4>
              <p class="accent-box-text"></p>
              <form method="POST" action="{{ route('servicios.store') }}">
                {{ csrf_field() }}
                <div class="form-row row-15 novi-disabled">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="input-name">Nombre:</label>
                      <div class="position-relative">
                        <input class="form-control" id="input-name" type="text" name="nombre" placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="input-email">E-mail:</label>
                      <div class="position-relative">
                        <input class="form-control" id="input-email" type="email" name="email" placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="input-tel">Celular:</label>
                      <div class="position-relative">
                        <input class="form-control" id="input-tel" type="tel" name="tel" placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="input-subject">Tipo:</label>
                      <div class="position-relative">
                        <select class="select2" id="simple-select" name="country" data-select2-options='{"placeholder":"Seleccione"}'>
                          <option label="placeholder"></option>
                          <option>Derecho Laboral</option>
                          <option>Derecho Migratorio</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="input-question">Mensaje:</label>
                      <div class="position-relative">
                        <textarea class="form-control" id="input-question" name="mensaje" placeholder="" ></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="offset-xs group-20 d-flex flex-wrap justify-content-center align-items-center">
                 
                    <button class="btn btn-lg btn-primary accent-box-btn" type="submit">Enviar</button>
                 
  
                </div>
              </form>
              
         {{--    </article> --}}
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection