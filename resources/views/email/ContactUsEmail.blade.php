@component('mail::message', ['nombre' => $nombre , 'correo' => $correo, 'pregunta' => $pregunta])


![logo](http://127.0.0.1:8000/images/Hommerson-Digital---Principal-sin-bordes-con-tagline-ajustado.png)

<h5>El usuario {{ $nombre }} 
    <br>
    Desea comunicarse con Hommersomconsulting. 
    <br>
    Desde el correo electronico: {{ $correo }}
    <br>
    Realizando la siguiente pregunta: {{ $pregunta }}
    <br>
    Gracias
<br></h5>
@endcomponent
