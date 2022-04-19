@extends('layouts.app')
  @section('content')
      <section style="padding-top:2%" class="section section-lg bg-transparent novi-background" data-preset='{"title":"Case Studies","category":"content box, counter","reload":false,"id":"case-studies"}'>
        <div class="container">
          <div class="row row-50 row-lg-60">
            <div class="col-12">
              <article class="shadow-sm">
                <div class="row   justify-content-md-start novi-disabled">
                  <div class="col-11 " style="margin-left:3%;margin-right:3%">
                    <div style="padding:8%" class="section-lg">
                      <h3 class="offer-box-title">@if(session()->get('lenguaje')=='espanol')Crear Servicio @else Create Service @endif</h3>
                      <hr class="divider divider-sm">
                      <form method="POST" action="{{ route('servicios.update') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$servicio->id}}" name="id" >
                          <div class="row row-30 ">    
                            <div class="col-12">
                              <div class="form-group">
                                <div class="select-wrap">
                                  <select class="select2" id="simple-select" required name="tipo" data-select2-options='{"placeholder":"Tipo"}'>
                                    <option label="placeholder"></option>
                                    <option  @if($servicio->tipo =="Inbound") selected @endif value="Inbound">Inbound Services</option>
                                    <option   @if($servicio->tipo =="Outbound") selected @endif  value="Outbound">Outbound Services</option>
                                  </select>                              
                                </div>
                              </div>                    
                            </div>                    
                            <div class="col-md-12">
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text fa-handshake-o novi-icon"></span></div>
                                  <input  class="form-control" type="text" value="{{ $servicio->nombre_servicio}}"  name="nombre_servicio" id="nombre_servicio" 
                                  placeholder="@if(session()->get('lenguaje')=='espanol') Nombre del servicio @else Service name @endif"  required data-constraints="@Required" >
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 col-12">
                              <div class="form-group">
{{--                                 <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text fa-align-justify novi-icon"></span></div>
                                  <textarea required class="form-control" cols="3"  placeholder="@if(session()->get('lenguaje')=='espanol') Descripción @else Description  @endif " name="descripcion_servicio[]"  rows="3"  maxlength="1000"></textarea>
                                </div> --}}
                                <div id="agregar_descripcion">
                                    @foreach ($detalle as $detail)
                                        <div class="input-group" style="margin-top:2%">
                                            <div class="input-group-prepend"><span class="input-group-text fa-align-justify novi-icon"></span></div>
                                            <textarea required class="form-control" cols="3"  placeholder="@if(session()->get('lenguaje')=='espanol') Descripción @else Description  @endif " 
                                            name="descripcion_servicio[]"  rows="3"  maxlength="1000">{{$detail->descripcion_servicio}}</textarea>
                                      </div>
                                    @endforeach
                                </div>
                                <div class="">
                                  <label style="margin-top: 5%">@if(session()->get('lenguaje')=='espanol') Agregar descripción: @else Add description: @endif  &nbsp;&nbsp;<button class="btn btn-sm btn-primary btn-nuka" type="button" onclick="agregar_descripcion()" >  <div class="icon-box-icon novi-icon fa-plus "></div></button></label>
                                </div>
                              </div>
                            </div>
                          <div class="col-6">
                            <div class="form-group">
                              <h5 for="phone" class=" control-label">@if(session()->get('lenguaje')=='espanol') Imagen @else Image @endif: <span class="tool" data-tip="Tamaño ideal: 500 pixeles x 500 pixeles." tabindex="3"><i  class=" fa-question novi-icon "></i></span> </h5><br>
                              <div class="col-md-10">
                                <div class="row">
                                  <div class="col-md-5 imgUp"><div class="imagePreview" 
                                    @if($servicio->imagen_servicio)
                                    style=" background:url({{asset('img')}}/{{$servicio->imagen_servicio}});width: 150px;  height: 150px;  background-size: 100% 100%;"
                                    @else
                                    style="background:url({{asset('images')}}/camara.png);  width: 150px;  height: 150px;  background-size: 100% 100%;"
                                    @endif
                                    ></div>
                                    <label class="btn btn-primary boton-foto">
                                      @if(session()->get('lenguaje')=='espanol') Adjuntar @else To attach  @endif    <input  type="file" name="imagen_servicio" id="imagen_servicio" class="uploadFile img"  accept="image/x-png,image/gif,image/jpeg"  style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>                                          
                                  </div>
                                </div>   
                              </div> 
                             
                            </div>
                          </div>
                      </div> 
                      <button style="width:100%;margin-top:5%;margin-bottom:2%"  type="submit" value="Publicar anuncio"   class="btn btn-outline btn-info btn-anis">@if(session()->get('lenguaje')=='espanol') Editar @else Edit  @endif</button>
                        </form>
                    </div>                    
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

  @endsection

  @section('scripts')
  <script>
  $(document).on("change",".uploadFile", function()
  {

      var uploadFile = $(this);
      var files = !!this.files ? this.files : [];
      if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

      if (/^image/.test( files[0].type)){ // only image file
          var reader = new FileReader(); // instance of the FileReader
          reader.readAsDataURL(files[0]); // read the local file

          reader.onloadend = function(){ // set image data as background of div
              //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
          uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
          }
      }
    
  });
  function agregar_descripcion(){    
    var placeholder ="";
    var lenguaje = {!! json_encode( session()->get('lenguaje')) !!};
    if(lenguaje=="espanol"){
      placeholder = "Descripción";
    }else{
      placeholder = "Description";

    }
             $("#agregar_descripcion").append(`   
             <div class="input-group" style="margin-top:2%">
              <div class="input-group-prepend"><span class="input-group-text fa-align-justify novi-icon"></span></div>
              <textarea required class="form-control" cols="3"  placeholder="` +placeholder+` " 
              name="descripcion_servicio[]"  rows="3"  maxlength="1000"></textarea>
            </div>
             
             `);
  }


</script>
    @endsection