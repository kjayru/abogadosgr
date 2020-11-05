@extends('layouts.app')

@section('content')
<main id="contacto">


    <section id="section1" class="pad-10 bg-contacto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                        <H1 class="titulo-seccion texto-verde">Contactanos</H1>

                </div>
            </div>
        </div>
    </section>
    <section id="section2">
        <div class="container">
            <div class="row">

                <div class="col-md-12 p-5">
                    <form action="" class="formgen">

                        <div class="form-row">
                            <div class="form-group col-md-6 col-12">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                            </div>

                            <div class="form-group col-md-6 col-12">
                                <input type="text" class="form-control" name="asunto" placeholder="Asunto">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>

                            <div class="form-group col-md-6 col-12">
                                <input type="phone" class="form-control" name="telefono" placeholder="Teléfono">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12 col-12">
                                <textarea class="form-control" placeholder="Escribe tu mensaje aqui"></textarea>
                            </div>

                        </div>
                        <div class="form-group text-center">

                            <button type="submit" class="btn btn-default fondo-boton botones">Enviar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section id="section3" class="fondo-verde2 texto-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-left d-flex align-items-start">
                    <span>ESCRÍBENOS<span>
                    info@gcr.com.mx
                </div>
                <div class="col-md-6 text-left d-flex align-items-end">
                    <span>LLÁMANOS<span>
                    +52 81 8192-0132 / +52 81 8192-0133
                </div>
            </div>
        </div>
    </section>
    <section id="section4">
        <div class="container-fluid"  class="p-0 m-0">
            <div class="row">
                <div class="col-md-12 p-0 m-0">
                    <img src="/images/mapa.png" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="boxaddress">
            NOS UBICAMOS EN:<br>
Juárez Nte. 898 Int. 2D, Colonia Centro, San Pedro Garza García, Nuevo León, México.  C.P. 66230
        </div>
    </section>

</main>
@endsection
