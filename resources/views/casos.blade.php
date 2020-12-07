@extends('layouts.app')

@section('content')
<main id="casos">

    <section id="section1" class="pad-10 fondo-gris2 titular d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">

                        <H1 class="titulo-seccion texto-verde2">{!!__('casos.texto1')!!}</H1>

                </div>
            </div>
        </div>
    </section>

    <section id="section2" class="pad-10">
        <div class="container-fluid">
            <div class="row relativo" data-aos="fade-up">
                <div class="col-md-6">
                    <div class="texto-section texto-verde2">
                     {{ __('casos.texto2')}}
                    </div>

                </div>
                <div class="col-md-6 ">
                    <div class="figure">
                        <img src="/images/Imagen-casos.jpg"  class="img-fluid">
                    </div>
                </div>
                <div class="bloque-casos">
                    {{ __('casos.texto3')}}
                    <figure>
                    <img src="/images/logoblanco.png" width="50">
                </figure>
                </div>

            </div>
        </div>
    </section>

    <section id="section3" class="seccioncasos">
        <div class="container-fluid">
            <div class="row rowset">
                <div class="col-md-12">
                    <div class="texto-sugerencia" data-aos="fade-right">
                        {!!__('casos.texto4')!!}
                    </div>

                    <div class="slideexito" data-aos="fade-left">

                         <div class="slider">

                                <div class="numerico">1</div>
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="/images/Casos-exito-fondos-09.jpg" class="img-fluid">
                                        </div>
                                    <div class="card-body">
                                        <div class="cuadro d-flex align-items-center">
                                            <p class="card-text">
                                                {{__('casos.texto5')}}
                                        </p>
                                        </div>
                                    </div>
                                    </div>

                            </div>
                            <div class="slider">
                                <div class="numerico">2</div>
                                <div class="card">
                                    <div class="card-header">
                                        <img src="/images/Casos-exito-fondos-08.jpg" class="img-fluid">
                                    </div>
                                <div class="card-body">
                                    <div class="cuadro d-flex align-items-center">
                                    <p class="card-text">
                                        {{__('casos.texto6')}}

                                        </p>
                                    </div>
                                </div>
                                </div>

                            </div>
                            <div class="slider">
                                <div class="numerico">3</div>
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="/images/Casos-exito-fondos-07.jpg" class="img-fluid">
                                        </div>
                                    <div class="card-body">
                                        <div class="cuadro d-flex align-items-center">
                                        <p class="card-text">
                                            {{__('casos.texto7')}}
                                            </p>
                                        </div>
                                    </div>
                                    </div>

                            </div>
                            <div class="slider">
                                <div class="numerico">4</div>
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="/images/Casos-exito-fondos-06.jpg" class="img-fluid">
                                        </div>
                                    <div class="card-body">
                                        <div class="cuadro d-flex align-items-center">
                                        <p class="card-text">
                                            {{__('casos.texto8')}}
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                            </div>



                            <div class="slider">
                                <div class="numerico">5</div>
                                <div class="card">
                                    <div class="card-header">
                                        <img src="/images/Casos-exito-fondos-05.jpg" class="img-fluid">
                                    </div>
                                <div class="card-body">
                                    <div class="cuadro d-flex align-items-center">
                                        <p class="card-text">

                                            {{__('casos.texto9')}}
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>


                            <div class="slider">
                                <div class="numerico">6</div>
                                <div class="card">
                                    <div class="card-header">
                                        <img src="/images/Casos-exito-fondos-04.jpg" class="img-fluid">
                                    </div>
                                <div class="card-body">
                                    <div class="cuadro d-flex align-items-center">
                                        <p class="card-text">
                                        {{ __('casos.texto10')}}
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>



                            <div class="slider">
                                <div class="numerico">7</div>
                                <div class="card">
                                    <div class="card-header">
                                        <img src="/images/Casos-exito-fondos-03.jpg" class="img-fluid">
                                    </div>
                                <div class="card-body">
                                    <div class="cuadro d-flex align-items-center">
                                        <p class="card-text">

                                        {{__('casos.texto11')}}
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>


                            <div class="slider">
                                <div class="numerico">8</div>
                                <div class="card">
                                    <div class="card-header">
                                        <img src="/images/Casos-exito-fondos-02.jpg" class="img-fluid">
                                    </div>
                                <div class="card-body">
                                    <div class="cuadro d-flex align-items-center">
                                        <p class="card-text">

                                            {{__('casos.texto12')}}
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="slider">
                                <div class="numerico">9</div>
                                <div class="card">
                                    <div class="card-header">
                                        <img src="/images/Casos-exito-fondos.jpg" class="img-fluid">
                                    </div>
                                <div class="card-body">
                                    <div class="cuadro d-flex align-items-center">
                                        <p class="card-text">

                                        {{__('casos.texto13')}}
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
