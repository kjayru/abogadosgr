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
        <div class="container">
            <div class="row">

                <div class="col-md-12 p-5" data-aos="fade-up">
                    <form action="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.gracias')}}" method="POST" class="formgen">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 col-12">
                                <input type="text" class="form-control" name="nombre" placeholder="{{__('contacto.texto2')}}">
                            </div>

                            <div class="form-group col-md-6 col-12">
                                <input type="text" class="form-control" name="asunto" placeholder="{{__('contacto.texto3')}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 col-12">
                                <input type="email" class="form-control" name="email" placeholder="{{__('contacto.texto4')}}">
                            </div>

                            <div class="form-group col-md-6 col-12">
                                <input type="phone" class="form-control" name="telefono" placeholder="{{__('contacto.texto5')}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12 col-12">
                                <textarea class="form-control" placeholder="{{__('contacto.texto6')}}"></textarea>
                            </div>

                        </div>
                        <div class="form-group text-center">

                            <button type="submit" class="btn lipad btn-default fondo-boton botones">{{__('contacto.texto7')}}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section id="section3" class="fondo-verde2 texto-white" data-aos="fade-up">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-left d-flex align-items-start">
                   <p> <span>{{__('contacto.texto8')}}</span>
                    <strong>info@gcr.com.mx</strong></p>
                </div>
                <div class="col-md-6 text-left d-flex align-items-end">
                    <p><span>{{__('contacto.texto9')}}</span>
                    <strong>+52 81 8192-0132 / +52 81 8192-0133</strong></p>
                </div>
            </div>
        </div>
    </section>
    <section id="section4" class="backmapa" data-aos="fade-up">
        <div class="container-fluid"  class="p-0 m-0">
            <div class="row">
                <div class="col-md-12 p-0 m-0">
                    <img src="/images/mapa.png" class="img-fluid d-none d-sm-block">
                </div>
            </div>
        </div>
        <div class="boxaddress">
            <span class="texto-verde2">{{__('contacto.texto11')}}</span><br>
            Juárez Nte. 898 Int. 2D, Colonia Centro, San Pedro Garza García, Nuevo León, México.  C.P. 66230
            <b><img src="/images/Logocolor.png" width="40"></b>
        </div>
    </section>

</main>
@endsection
