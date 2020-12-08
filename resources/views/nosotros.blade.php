@extends('layouts.app')

@section('content')
<main id="nosotros">


    <section id="section1" class="p-5 pl-7 lienzo bg-nosotros bloque1">
        <div class="container-fluid">
            <div class="row justify-content-start rowset nosotro">

                <div class="col-md-3 bloq" data-aos="fade-right">
                    <div class="subtitulo">{{__('nosotros.25years')}}</div>
                    <div class="contenido texto-verde2">
                        <p>{{__('nosotros.texto1')}}</p>
                    </div>
                </div>
                <div class="col-md-3 bloq" data-aos="fade-up">
                    <div class="subtitulo">{{__('nosotros.exitos')}}</div>
                    <div class="contenido texto-verde2">
                        <p>{{__('nosotros.texto2')}}</p>
                    </div>
                </div>
                <div class="col-md-3 bloq" data-aos="fade-left">
                    <div class="subtitulo ending">{{__('nosotros.especialidad')}}</div>
                    <div class="contenido texto-verde2">
                        <p>{{__('nosotros.texto3')}}
                        </p>
                    </div>
                </div>
                <picture class="nosotro__picture d-block d-sm-none">

                </picture>
            </div>
        </div>
    </section>
    <section id="section2" >
        <div class="container-fluid">
            <div class="row rowset">
                <div class="col-md-4 bg-nosotros-2">

                </div>
                <div class="col-md-8  pad-10">
                    <p data-aos="fade-left">
                        {{__('nosotros.texto4')}}
                    </p>
                    <figure class="d-block d-sm-none text-center">
                    <img src="/images/Logo-movil.png"  class="img-fluid " alt="">
                </figure>
                    <img src="/images/logo-content.png" class="img-fluid d-none d-sm-block" data-aos="zoom-in">

                    <p class="texto-resaltado " data-aos="fade-left">
                        {{__('nosotros.texto5')}}
                    </p>
                </div>

                <div class="col-12 p-0 d-block d-sm-none">
                    <img src="/images/MazoFirma.jpg"  class="img-fluid ">
                </div>
            </div>
        </div>
    </section>
    <section id="section3" class="bg-nosotros-3">
        <div class="container-fluid">
            <div class="row rowset">
                <div class="col-md-12" data-aos="fade-right">

                        <H1 class="titulo-abogado texto-white">{!! __('nosotros.texto6')!!}</H1>

                </div>
            </div>
           <div class="row rowset justify-content-end texto-pad1 texto-white" >
               <div class="col-md-6 p-0" data-aos="fade-left">
                    <p>{{__('nosotros.texto7')}}
                    </p>
                    <p>
                        {{__('nosotros.texto8')}}
                    </p>
               </div>
           </div>
        </div>
    </section>
    <section id="section4" >
        <div class="container-fluid">
            <div class="row  rowset nosotros-content">
                <div class="col-md-6 back-green-oscuro bloque" data-aos="fade-right">
                    <div class="titulo-blq titulo2 texto-white">
                        {{__('nosotros.texto9')}}
                    </div>
                    <div class="contenido texto-white op1">
                        <p>{{__('nosotros.texto10')}}
                        </p>
                        <p>
                            {{__('nosotros.texto11')}}
                        </p>
                    </div>
                </div>
                <div class="col-md-6 back-grey bloque" data-aos="fade-left">
                    <div class="titulo-blq titulo2 texto-verde2">{!!__('nosotros.texto12')!!}</div>
                    <div class="contenido op2">
                        <p>{{__('nosotros.texto13')}}
                        </p>
                        <p>
                            {{__('nosotros.texto14')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section5" class="bg-nosotros-4">
        <div class="container-fluid">
            <div class="row rowset" >
                <div class="col-md-12" data-aos="fade-right">

                        <H1 class="titulo-alcance texto-verde2">{!! __('nosotros.texto15')!!}</H1>

                </div>
            </div>
           <div class="row rowset justify-content-end texto-pad1 texto-grey" >
               <div class="col-md-6 p-0" data-aos="fade-left">
                    <p>
                        {{__('nosotros.texto16')}}
                    </p>
                    <p>
                        {{__('nosotros.texto17')}}
                    </p>
               </div>
           </div>
    </section>
</main>
@endsection
