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
              <li data-transition="crossfade" data-delay="9000"><img class="rev-slidebg" src="images/DerechoMigratorioHome.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="140" data-scaleend="100" data-bgparallax="15"/>
              <div class="rev_row_zone rev_row_zone_middle">
              <div class="container"> 
                <!-- Breadcrumb-->
                <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" >@if(session()->get('lenguaje')=='espanol') Inicio  @else Home @endif</a></li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link" >@if(session()->get('lenguaje')=='espanol') Servicios  @else Services @endif</a></li>
                        <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">@if(session()->get('lenguaje')=='espanol') Derecho Migratorio  @else Immigration Law @endif</span></li>
                </ul>
            <div class="container">
            <div class="row justify-content-center novi-disabled">                         
            <div class="container">
                <div class="col-md-6">
                  <br>
                <h4 class="text-left">@if(session()->get('lenguaje')=='espanol') Hommersom Consulting se centra en ofrecer un valor excepcional en estrategias de migración y movilidad global  @else Hommersom Consulting focuses on delivering exceptional value in migration strategies and global mobility  @endif</h4>
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

          <div class="row novi-disabled">
            <div class="col-md-12 text-center">
              <h1 data-animate='{"class":"bounceInLeft"}' class="font-weight-bold text-dark">@if(session()->get('lenguaje')=='espanol') Inbound Services and Outbound Services @else Inbound Services and Outbound Services @endif</h1>
              <h2 data-animate='{"class":"bounceInLeft"}' class="font-weight-bold text-dark">@if(session()->get('lenguaje')=='espanol') Extranjeros que ingresan a Colombia y Colombianos o extranjeros que viajen desde Colombia a otros países @else Foreigners entering Colombia and Colombians or foreigners traveling from Colombia to other countries @endif</h2>
            </div>
          </div>

    <!-- Thumbnail josip-->
    <div class="row show-grid">
    @foreach ($servicios as $servicio) 
    <div class="col-md-6 text-center"> 
      <br>    
    <figure class="thumbnail thumbnail-josip"><img src="{{asset('img')}}/{{$servicio->imagen_servicio}}" alt="" width="400" height="400"/>
                      <figcaption class="thumbnail-josip-caption">
                        <h5 data-animate='{"class":"bounceInLeft"}' class="thumbnail-josip-title">{{$servicio->nombre_servicio}}</h5>
                        <div class="thumbnail-josip-description">{{$servicio->tipo}}</div><button onclick="detalle({{$servicio->id}})"   style="margin:2px; " class="btn btn-secondary thumbnail-josip-btn" >@if(session()->get('lenguaje')=='espanol') Echar un vistazo @else Take a look @endif</button>
                    </figcaption>
                    </figure>
                    <h3 data-animate='{"class":"bounceInLeft"}' class="font-weight-bold text-dark">{{$servicio->nombre_servicio}}</h3>
          </div>  
          
    @endforeach    
    </section>            

          <div  id="modal"   class=" modalw3">  
          <div class="row align-items-center justify-content-center">
              <article class="accent-box col-md-6 col-sm-6 img-fluid rounded   d-block" style="padding:0%">
                <div onclick="salir_modal('modal')" style="margin:1%" class="icon icon-xs icon-secondary int-close novi-icon float-right"></div>
                <div class="modalw3-bodyw3 " style="padding:1%" >   
                  <section style="margin:3%;padding:0%" class="section section-lg bg-transparent novi-background" data-preset='{"title":"Team Member","category":"person","reload":true,"id":"team-member"}'>
                    <div class="container">
                    <div class="row row-40 novi-background">
                              <article class="blurb col-12">
                                <div class="blurb-header">
                                  <div class="blurb-embed"><span  class="blurb-icon fas fa-eye novi-icon"></span></div>
                                  <div class="blurb-title h5 " >@if(session()->get('lenguaje')=='espanol')Detalle @else Detail @endif</div>
                                </div>
          
                                
                                <hr class="blurb-divider divider divider-sm">
                                <div class="blurb-text" >

                                  <table  style="      overflow-x: auto; width:100%" class="table table-cart table-responsive-lg justify-content-center">
                                    <tbody id="tbody_detail">

                                    </tbody>
                                  </table>
                                
                                </div>
                              </article>
                      </div>
                    </div>
        </section>
        </div>
      </article>
    </div>
  </div>

@endsection    

@section('scripts')
  <script>
      
                    $(document).ready(function() {
                      var lenguaje = {!! json_encode( session()->get('lenguaje')) !!};
    if(lenguaje=="espanol"){
                $('#productos_table').DataTable( {
                    stateSave: true,
                    responsive: true,
                        columnDefs: [
                          { responsivePriority: 1},
                          { responsivePriority: 2 }
                      ],
                    dom: 'Bfrtip',
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                    language:
                      {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":    "Primero",
                            "sLast":     "Último",
                            "sNext":     "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    }
                } );
   
              }else{
                $('#productos_table').DataTable();
                    }

            });
            function detalle(id){    
              var url="{{route('get.detalle')}}";
            var datos = {
            "_token": $('meta[name="csrf-token"]').attr('content'),"id": id
            };
             
            $.ajax({
            type: 'GET',
            url: url,
            data: datos,                
            success: function(data) {

                    var td_detalle;
                console.log(data);
                for (var i=0; i<data.length;i++){           
                    td_detalle+='<tr><td >'+data[i].descripcion_servicio+'</td><tr>';
                    }                
                    $("#tbody_detail").html(td_detalle);

	                $("#modal").css({"display": "block"});	
                }
            });

        
  }
  </script>
  @endsection
