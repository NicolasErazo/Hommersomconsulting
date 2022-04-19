@extends('layouts.app')
  @section('content')
  <section style="padding:3%" class='section section-lg  text-center text-lg-left novi-background'>
    <div class='container' >
      <div class='row  align-items-lg-center '>
        <div class="text-center col-lg-12" data-animate='{"class":"fadeInLeft"}' style="margin-bottom: 2%;margin-top: 5%">              
            <h2 >@if(session()->get('lenguaje')=='espanol')Servicios @else Services @endif  <a class="btn btn-primary btn-nuka" style="margin-top:0%"  href="{{ route('servicios.create') }}">Agregar</a>
            </h2>
        </div>
      </div>
    </div>
  </section>
  <section style="padding:2%" class="section section-lg bg-transparent novi-background" data-preset='{"title":"Cart","category":"shop","reload":false,"id":"cart"}'>
    <div style="margin-left:8%;margin-right:8%;margin-bottom:8%">   
      <div class="row justify-content-center">
        <div class="col-lg-12 col-xl-12 col-xxl-12" style="    font-size: 1rem;">
          <table id="productos_table" style="      overflow-x: auto; width:100%" class="table table-cart table-responsive-lg justify-content-center">
            <thead>
              <tr>
                <th data-priority="1">Id</th>
                <th data-priority="1">@if(session()->get('lenguaje')=='espanol') Imagen @else Image @endif </th>
                <th data-priority="1">@if(session()->get('lenguaje')=='espanol')Nombre Servicio @else Name service @endif  </th>
                <th data-priority="1">@if(session()->get('lenguaje')=='espanol')Detalle @else Detail @endif </th>
                <th data-priority="1">@if(session()->get('lenguaje')=='espanol')Acciones @else Actions @endif </th>
  

              </tr>
            </thead>
            <tbody>
              @foreach ($servicios as $servicio)
                <tr>
                  <td>     
                    {{$servicio->id}}
                  </td>    
   
                  <td>     
                    <img src="{{asset('img')}}/{{$servicio->imagen_servicio}}" alt="" width="200" height="100"/>
                  </td>    
                  <td>     
                    {{$servicio->nombre_servicio}}
                  </td>    
                  <td>     
                    <a   onclick="detalle({{$servicio->id}})"   style="margin:2px; "  ><i class="fas fa-eye icon icon-blue-violet  icon-md" ></i></a>  
                  </td>    
                  <td>     
                    <a   href="{{route('servicios.edit',$servicio->id)}}"   style="margin:2px; "  ><i class="fas fa-edit icon icon-blue-violet  icon-md" ></i></a>  
                    <a   href="{{route('servicios.destroy',$servicio->id)}}"   style="margin:2px; "  ><i class="int-trash icon icon-electric-violet  icon-md" ></i></a>  
                  </td> 

                </tr>
              @endforeach

      
            </tbody>
          </table>
        </div>
      </div>
    </div>
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