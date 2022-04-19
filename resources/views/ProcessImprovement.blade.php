@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <section class="section section-sm context-dark bg-image novi-background" style="background-image: url(images/ComingSoon.png);" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-17"}'>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </section>
<!--
    <section class="section bg-transparent novi-background" data-preset='{"title":"Features","category":"carousel","reload":false,"id":"features-2"}'>     
            <div class="bt_bb_column_inner col-md-12 col-ms-12 bt_bb_align_center bt_bb_vertical_align_middle bt_bb_animation_fade_in animate bt_bb_padding_0 animated" data-width="12"><div class="bt_bb_column_inner_content">

            <meta charset="UTF-8">
            <title>Animación</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap');
            *{
                font-family: 'Lato', sans-serif;
                margin:0;
                padding:0;
                box-sizing:border-box;

            }

            figcaption .service-desc {
                opacity: 1;
            }
            #customer-animations {
                font-size: 1px;
            }
            #customer-animations #service-center-info .service-desc h3 {
                font-size: 46em;
            }
            #customer-animations .service-desc h5 {
                font-size: 30em;
            }
            #customer-animations .section-wrapper{
                display: -webkit-flex;
                display: -moz-flex;
                display: -ms-flex;
                display: -o-flex;
                display: flex;
                -ms-align-items: center;
                align-items: center;
                justify-content: center;
            }
            #customer-animations .service-animation-wrapper,
            #customer-animations .service-animation-wrapper *{
                margin:0;
                padding:0;
                box-sizing: border-box;
            }
            #customer-animations .service-animation-wrapper{
                width: 700em;
                height: 700em;
                position: relative;
            }
            #customer-animations .service-animation-wrapper>figure#service-center-info{
                width: 357em;
                height: 357em;
                border-radius:100%;
                position: absolute;
                transform: translateX(-50%) translateY(-50%);
                display: -webkit-flex;
                display: -moz-flex;
                display: -ms-flex;
                display: -o-flex;
                display: flex;
                -ms-align-items: center;
                align-items: center;
                justify-content: center;
            }
            #customer-animations .service-animation-wrapper>figure.service-item{
                width: 150em;
                height: 150em;
                background: #009fe3;
                position: absolute;
                transform: translateX(-50%) translateY(-50%);
                border-radius: 100%;
                display: -webkit-flex;
                display: -moz-flex;
                display: -ms-flex;
                display: -o-flex;
                display: flex;
                -ms-align-items: center;
                align-items: center;
                justify-content: center;
            }
            #customer-animations .service-animation-wrapper>figure.service-main-info#service-center-info{
                top:50%;
                left:50%;            
            }
            #customer-animations .service-animation-wrapper>figure.service-main-info#service-center-info figcaption.service-desc{
                opacity: 1;   
                display: flex;        
            }
            #customer-animations .service-animation-wrapper>figure.service-main-info#service-center-info figcaption.service-desc img{
                width: 100%;
                height: 100%;      
            }
            #customer-animations .service-animation-wrapper>figure.service-main-info#service-center-info.active{
                animation: fadeUp;
                animation-fill-mode: forwards;
                animation-duration: .3s;
            }
            #customer-animations .service-animation-wrapper>figure.service-item#service-animation-1{
                left: 231em;
                top: 101em;
            }
            #customer-animations .service-animation-wrapper>figure.service-item#service-animation-2{
                left: 468em;
                top: 101em;
                animation-delay: .5s;
            }
            #customer-animations .service-animation-wrapper>figure.service-item#service-animation-3{
                left: 612em;
                top: 243em;
                animation-delay: 1s;
            }
            #customer-animations .service-animation-wrapper>figure.service-item#service-animation-4{
                left: 612em;
                top: 431em;
                animation-delay: 1.5s;
            }
            #customer-animations .service-animation-wrapper>figure.service-item#service-animation-5{
                left: 468em;
                top: 598em;
                animation-delay: 2s;
            }
            #customer-animations .service-animation-wrapper>figure.service-item#service-animation-6{
                left: 231em;
                top: 598em;
                animation-delay: 2.5s;
            }
            #customer-animations .service-animation-wrapper>figure.service-item#service-animation-7{
                left: 87em;
                top: 431em;
                animation-delay: 3s;
            }
            #customer-animations .service-animation-wrapper>figure.service-item#service-animation-8{
                left: 87em;
                top: 243em;
                animation-delay: 3.5s;
            }
            #customer-animations .service-animation-wrapper>figure.service-item>.service-desc{
                text-align: center;
                opacity: 0.85 !important;
                width: 100%;
            }
            #customer-animations .service-animation-wrapper>figure.service-item>.service-desc>.service-main-info>h3{
                font-size: 20em;
                color: #ffffff;
                padding: 0 .5em;
            }
            #customer-animations .service-animation-wrapper>figure.service-item>.service-desc>.service-icon{
                width: 55em;
                height:55em;
                margin: 0 auto 5em;
            }
            #customer-animations .service-animation-wrapper>figure.service-item{
                animation: fadeUp;
                animation-fill-mode: forwards;
                animation-duration: .7s;
                opacity:0;
                visibility: hidden;
                cursor: pointer;
            }
            #customer-animations .service-animation-wrapper>figure.service-item::before{
                content:'';
                position: absolute;
                left:0;
                top:0;
                bottom: 0;
                right:0;
                border:1em solid #98cd09;
                border-radius: 100%;
                transform: scale(1);
                transition:.3s all ease;
            }
            #customer-animations .service-animation-wrapper>figure.service-item:hover::before{
                transform: scale(1.1);
            }
            #customer-animations .service-animation-wrapper>figure.service-item:hover>.service-desc>.service-detail-info{
                opacity: 1;
            }
            #customer-animations .service-animation-wrapper>.service-detail-info{
                width: 357em;
                height: 357em;
                position: absolute;
                top:50%;
                left:50%;
                transform: translateX(-50%) translateY(-50%);
                display: -webkit-flex;
                display: -moz-flex;
                display: -ms-flex;
                display: -o-flex;
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                visibility: hidden;
                border:4em solid #95c11f;
                background: #ffffff;
                padding: 15em;
                border-radius: 100%;
                transition: .3s all ease
            }
            #customer-animations .service-animation-wrapper>figure.service-item:hover + .service-detail-info{
                opacity: 1;
                visibility: visible;
            }
            #customer-animations .service-animation-wrapper>figure.service-item:hover + .service-detail-info div.text {
                font-size: 1em;
                position: relative;
            }
            #customer-animations div.text:before {
                font-size: 92em;
                /*content: "\e902";*/
                font-family: Highlight;
                display: block;
                line-height: .4em;
                position: absolute;
                top: 1rem;
                left: 0;
                right: 0;
                z-index: -1;
                color: #edeef0;
            }
            #customer-animations .service-animation-wrapper>.service-detail-info>div.text.text>p{
                height: 100%;
                font-size: 16em;
                line-height: 1.25;
                padding: 0;
                text-align: center;
                font-style: normal;
                /*text-shadow: 0.5em 0.5em 1em rgba(0, 0, 0, 0.3);*/
                color: #1c233f;
            }
            #customer-animations .service-animation-wrapper>figure#service-center-info::before,
            #customer-animations .service-animation-wrapper>.service-detail-info::before {
                /*content: "\201C";*/
                font-size: 270em;
                height: 82em;
                line-height: 0.78;
                line-height: 1;
                position: absolute;
                top: -48em;
                left: 0;
                z-index: 1;
                font-family: sans-serif, serif;
                color: #ccc;
                opacity: 0.9;
            }
            @keyframes fadeUp {
                from{
                    transform: translateX(-50%) translateY(-45%);
                    opacity: 0;
                    visibility: hidden;
                } to {
                    transform: translateX(-50%) translateY(-50%);
                    opacity: 1;
                    visibility: visible;
                }
            }
            @media (min-width: 993px) and (max-width:1183px) {
                #customer-animations {
                    font-size: .87px;
                }

            }
            @media (min-width: 525px) and (max-width:756px) {
                #customer-animations {
                    font-size: .7px;
                }

            }
            @media (min-width: 375px) and (max-width:525px) {
                #customer-animations {
                    font-size: .43px;
                }
            }
            @media (min-width: 0) and (max-width:375px) {
                #customer-animations {
                    font-size: .43px;
                }
            }
        </style>

            <div id="customer-animations">
            <div class="section-wrapper">
                <div class="service-animation-wrapper">
                    <figure class="service-main-info" id="service-center-info">
                        <figcaption class="service-desc">
                            <h2 class="text-center">ACERCAMIENTO AL CLIENTE</h2>
                        </figcaption>
                    </figure>
                    <figure class="service-item bg-success" id="service-animation-1">
                        <figcaption class="service-desc">
                            <div class="service-icon">
                                <img src="images/Telefono.png" alt="">
                            </div>
                            <div class="service-main-info">
                                <h3></h3>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="service-detail-info">
                        <div class="text">
                            <p>Estrictos protocolos / tiempos de respuesta de acuerdo al servicio solicitado</p>
                        </div>
                    </div>
                    <figure class="service-item bg-success" id="service-animation-2">
                        <figcaption class="service-desc">
                            <div class="service-icon">
                                <img src="images/Passport.jpg" alt="">
                            </div>
                            <div class="service-main-info">
                                <h3></h3>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="service-detail-info">
                        <div class="text">
                            <p>Alta sensibilidad en el cuidado del manejo de la información y de los documentos</p>
                        </div>
                    </div>
                    <figure class="service-item bg-success" id="service-animation-3">
                        <figcaption class="service-desc">
                            <div class="service-icon">
                                <img src="images/Lista.png" alt="">
                            </div>
                            <div class="service-main-info">
                                <h3></h3>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="service-detail-info">
                        <div class="text">
                            <p>Garantizar la calidad y fortalecer la operación</p>
                        </div>
                    </div>
                    <figure class="service-item bg-success" id="service-animation-4">
                        <figcaption class="service-desc">
                            <div class="service-icon">
                                <img src="images/Carta.png" alt="">
                            </div>
                            <div class="service-main-info">
                                <h3></h3>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="service-detail-info">
                        <div class="text">
                            <p>Concientes de la dinámica juridica y empresarial, el equipo se capacita y alínea constantemente</p>
                        </div>
                    </div>
                    <figure class="service-item bg-success" id="service-animation-5">
                        <figcaption class="service-desc">
                            <div class="service-icon">
                                <img src="images/Firma.png" alt="">
                            </div>
                            <div class="service-main-info">
                                <h3></h3>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="service-detail-info">
                        <div class="text">
                            <p>Soluciones adecuadas para escenarios complejos</p>
                        </div>
                    </div>
                    <figure class="service-item bg-success" id="service-animation-6">
                        <figcaption class="service-desc">
                            <div class="service-icon">
                                <img src="images/Visas.png" alt="">
                            </div>
                            <div class="service-main-info">
                                <h3></h3>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="service-detail-info">
                        <div class="text">
                            <p>Actividad respaldada por herramientas informaticas de vanguardia</p>
                        </div>
                    </div>
                    <figure class="service-item bg-success" id="service-animation-7">
                        <figcaption class="service-desc">
                            <div class="service-icon">
                                <img src="images/Calendar.png" alt="">
                            </div>
                            <div class="service-main-info">
                                <h3></h3>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="service-detail-info">
                        <div class="text">
                            <p>Cubrimiento en varios paises por medio de nuestra red de aliados</p>
                        </div>
                    </div>
                    <figure class="service-item bg-success" id="service-animation-8">
                        <figcaption class="service-desc">
                            <div class="service-icon">
                                <img src="images/Identidad.png" alt="">
                            </div>
                            <div class="service-main-info">
                                <h3></h3>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="service-detail-info">
                        <div class="text">
                            <p>Gracias a la sensibilidad interculutural adquirida durante varios años. tenemos la capacidad de percibir y reaccionar de la manera adecuada frente a los retos que se presentan en el día a día</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            </div></div>
    </section>  
        -->
@endsection    