@extends('layouts.app')

@section('content')
<main id="contacto">


    <section id="section1" class="pad-10 bg-contacto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">

                        <H1 class="titulo-seccion texto-verde2">{{__('contacto.texto1')}}</H1>

                </div>
            </div>
        </div>
    </section>
    <section id="section2">
        <div class="container bg-sala">
            <div class="row">

                <div class="col-md-12 p-5" data-aos="fade-up">
                        <div class="gracias">
                            {!! __('gracias.texto1')!!}
                        </div>
                </div>

            </div>
        </div>
    </section>


</main>
@endsection
