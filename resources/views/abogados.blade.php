@extends('layouts.app')

@section('content')
<main id="abogados">

    <section id="section1" class="pad-10 fondo-gris2 titular d-flex align-items-center">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12" data-aos="zoom-in">

                        <H1 class="titulo-seccion texto-verde2">{{ __('abogados.texto1')}}</H1>

                </div>
            </div>
        </div>
    </section>
    <section id="lawyer">

        <div class="container-fluid">
            <div class="row lienzo rowset" >
                <div class="col-md-6 lawyer1 order-1 order-sm-1 " data-aos="fade-right" >
                    <div class="boxlaw bright">
                        <span><img src="/images/logoblanco.png" width="40"></span>
                        Jaime Rodríguez Arévalo
                    </div>
                </div>
                <div class="col-md-6 fondo-gris pad-10 texto-white texto-law order-2 order-sm-2" data-aos="fade-left">
                    <p>
                        {{ __('abogados.texto2')}}
                    </p>
                    <p>
                        {{ __('abogados.texto3')}}
                    </p>
                    <p>
                        {{ __('abogados.texto4')}}
                    </p>
                    <hr>
                        <b>{{ __('abogados.texto5')}}</b>
                        <p> {{ __('abogados.texto6')}}</p>
                </div>
            </div>


            <div class="row rowset lienzo">

                <div class="col-md-6 fondo-gris pad-10 texto-white texto-law order-2 order-sm-1" data-aos="fade-right">
                    <p>
                        {{ __('abogados.texto7')}}
                    </p>
                    <p>
                        {{ __('abogados.texto8')}}
                    </p>
                    <hr>
                        <b>{{ __('abogados.texto5')}}</b>
                        <p>
                            {{ __('abogados.texto9')}}
                        </p>
                    <hr>
                        <b>{{ __('abogados.texto10')}}</b>
                        <p>{{ __('abogados.texto11')}}</p>
                </div>

                <div class="col-md-6 lawyer2 order-1 order-sm-2" data-aos="fade-left">
                    <div class="boxlaw bleft">
                        <span><img src="/images/logoblanco.png" width="40"></span>
                        Hernán García-Corral
                    </div>
                </div>

            </div>


            <div class="row  rowset lienzo" >
                <div class="col-md-6 lawyer3 order-1 order-sm-1" data-aos="fade-right">
                    <div class="boxlaw bright">
                        <span><img src="/images/logoblanco.png" width="40"></span>
                        Francisco Javier Tamez Ochoa
                    </div>
                </div>
                <div class="col-md-6 fondo-gris pad-10 texto-white texto-law order-2" data-aos="fade-left">
                    <div class="divcenter">
                    <p>{{ __('abogados.texto12')}}</p>

                        <hr>
                        <b>{{ __('abogados.texto5')}}</b>
                        <p>{{ __('abogados.texto13')}}</p>

                        <hr>
                        <b>{{ __('abogados.texto10')}}</b>
                       <p> {{ __('abogados.texto11')}}</p>
                    </div>
                </div>
            </div>




            <div class="row rowset lienzo" >

                <div class="col-md-6 fondo-gris pad-10 texto-white texto-law order-2 order-sm-1" data-aos="fade-right">
                   <div class="divcenter">
                    <p>{{ __('abogados.texto14')}}</p>

                        <hr>
                        <b>{{ __('abogados.texto5')}}</b>
                       <p> {{ __('abogados.texto15')}}</p>
                    </div>

                </div>

                <div class="col-md-6 lawyer4 order-1 order-sm-2" data-aos="fade-left">
                    <div class="boxlaw bleft">
                        <span><img src="/images/logoblanco.png" width="40"></span>
                        Oziel Mireles Dávila
                    </div>
                </div>

            </div>


        </div>
    </section>

</main>
@endsection
