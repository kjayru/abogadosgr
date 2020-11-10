@extends('layouts.app')

@section('content')
<main id="home">

<section id="section1" class="relativo">
    <div class="container-fluid p-0 lienzo">
        <div class="row justify-content-center">
            <div class="col-md-7 col-12">
                <div class="logo" data-aos="zoom-in">
                    <img src="/images/Logo.png" class="img-fluid">

                </div>
            </div>
        </div>
        <div class="bg1 bg-montain"></div>
        <a href="#" class="circulo shaes"><i class="fas fa-arrow-down"></i></a>
    </div>

    <div class="container-fluid p-0  lienzo bg2">

        <div class="row justify-content-end text-center pt-5">
            <div class="col-md-6 col-12">
               <div class="slidesec1" data-aos="fade-right">

                    <div class="slide">
                        <div class="texto-1 texto-verde bg-circular d-flex align-items-center ">
                        <p>   {!!__('inicio.texto1')!!}
                        </p>
                        </div>

                        <a href="#" class="btn btn-default  botones fondo-boton">{{__('inicio.mas')}}</a>
                    </div>

                    <div class="slide">
                        <div class="texto-1 texto-verde bg-circular d-flex align-items-center ">
                           <p> {!!__('inicio.texto2')!!}</p>
                        </div>

                        <a href="#" class="btn btn-default  botones fondo-boton">{{__('inicio.mas')}}</a>
                    </div>

                    <div class="slide">
                        <div class="texto-1 texto-verde bg-circular d-flex align-items-center ">
                            <p>{!!__('inicio.texto3')!!}</p>
                        </div>

                        <a href="#" class="btn btn-default  botones fondo-boton">{{__('inicio.mas')}}</a>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>
<section id="section2" class="pt-0 pb-0 pl0 pr0 " >
    <div class="container-fluid p-0">
        <div class="row" data-aos="fade-right">
            <div class="col-md-12 p0">

                    <div class="slideabogado">

                        <div>
                            <div class="row relativo">
                                <div class="tituloverde texto-verde flotante">
                                   {!!__('inicio.texto4')!!}
                                </div>
                                <div class="col-md-4 p0 m0 col-6" style="background:url(/images/FondoAbogados-recortado.jpg) no-repeat center center; background-size:cover; ">
                                    <div class="marco">

                                    </div>
                                </div>
                                <div class="col-md-8 p0 m0 col-6 " style="background:url(/images/Paisaje-Monterrey-Abogados-Recortado.jpg) no-repeat center center; background-size:cover;">

                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <div class="col-md-4 p0 m0 d-none d-sm-block " style="background:url(/images/FondoAbogados-recortado.jpg) no-repeat center center; background-size:cover; ">
                                    <div class="marco">

                                       <div class="textobox texto-rojo">Hernan</div>
                                    </div>
                                </div>
                                <div class="col-md-8 p0 m0 col-12 imarco" style="background:url(/images/Hernan.jpg) no-repeat center center; background-size:cover;">
                                    <div class="textobox texto-rojo d-block d-sm-none">Hernan</div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <div class="col-md-4 p0 m0  d-none d-sm-block " style="background:url(/images/FondoAbogados-recortado.jpg) no-repeat center center;  background-size:cover;">
                                    <div class="marco">

                                        <div class="textobox texto-azul">Jaime</div>
                                    </div>
                                </div>
                                <div class="col-md-8 p0 m0 imarco" style="background:url(/images/Jaime.jpg) no-repeat center center; background-size:cover;">
                                    <div class="textobox texto-rojo d-block d-sm-none">Jaime</div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <div class="col-md-4 p0 m0 d-none d-sm-block" style="background:url(/images/FondoAbogados-recortado.jpg) no-repeat center center;  background-size:cover;">
                                    <div class="marco">
                                        <div class="textobox texto-marron text-center">Francisco<br> Javier</div>

                                    </div>
                                </div>
                                <div class="col-md-8 p0 m0 imarco" style="background:url(/images/FcoJavier-recortado.jpg) no-repeat center center; background-size:cover;">
                                    <div class="textobox texto-rojo d-block d-sm-none">Francisco Javier</div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="row">
                                <div class="col-md-4 p0 m0 d-none d-sm-block" style="background:url(/images/FondoAbogados-recortado.jpg) no-repeat center center;  background-size:cover;">
                                    <div class="marco">
                                        <div class="textobox texto-azul">Oziel</div>

                                    </div>
                                </div>
                                <div class="col-md-8 p0 m0 imarco" style="background:url(/images/Oziel-representacion.jpg) no-repeat center center; background-size:cover;">
                                    <div class="textobox texto-rojo d-block d-sm-none">Oziel</div>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
         </div>
    </div>
</section>
<section id="section3" class="p-5 lienzo ajedrez">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="titulo text-center texto-gris" >
                      {!!__('inicio.texto5')!!}
                    </div>
                </div>

        </div>
        <div class="row d-none d-sm-block">
           <div class="col-md-12">

                <div class="d-flex justify-content-center ">
                    <div class="p-2 radiopress topradio" data-aos="zoom-in"><picture><img src="/images/Servicio-Corporativo.png" class="img-fluid" ></picture></div>
                    <div class="p-2 radiopress" data-aos="zoom-in"><picture><img src="/images/Servicio-Inmobiliario.png"  class="img-fluid"></picture></div>
                    <div class="p-2 radiopress" data-aos="zoom-in"><picture><img src="/images/Servicio-Agrario.png"  class="img-fluid"></picture></div>
                    <div class="p-2 radiopress" data-aos="zoom-in"><picture><img src="/images/Servicio-Administrativo.png"  class="img-fluid"></picture></div>

                </div>

                <div class="d-flex justify-content-center">
                    <div class="p-2 radiopress" data-aos="zoom-in"><picture><img src="/images/Servicio-Laboral.png" class="img-fluid" ></picture></div>
                    <div class="p-2 radiopress" data-aos="zoom-in"><picture><img src="/images/Servicio-PropiedadIntelectual.png"  class="img-fluid"></picture></div>
                    <div class="p-2 radiopress" data-aos="zoom-in"><picture><img src="/images/Servicio-Bancario.png"  class="img-fluid"></picture></div>
                    <div class="p-2 radiopress bottomradio" data-aos="zoom-in"><picture><img src="/images/Servicio-Penal.png"  class="img-fluid"></picture></div>

                </div>

            </div>
           </div>
        <div class="row d-block d-sm-none">


                    <div class="p-2 radiopress col"><picture><img src="/images/Servicio-Corporativo.png" class="img-fluid" ></picture></div>
                    <div class="p-2 radiopress col"><picture><img src="/images/Servicio-Inmobiliario.png"  class="img-fluid"></picture></div>
                    <div class="p-2 radiopress col"><picture><img src="/images/Servicio-Agrario.png"  class="img-fluid"></picture></div>
                    <div class="p-2 radiopress col"><picture><img src="/images/Servicio-Administrativo.png"  class="img-fluid"></picture></div>


                    <div class="p-2 radiopress col"><picture><img src="/images/Servicio-Laboral.png" class="img-fluid" ></picture></div>
                    <div class="p-2 radiopress col"><picture><img src="/images/Servicio-PropiedadIntelectual.png"  class="img-fluid"></picture></div>
                    <div class="p-2 radiopress col"><picture><img src="/images/Servicio-Bancario.png"  class="img-fluid"></picture></div>
                    <div class="p-2 radiopress col"><picture><img src="/images/Servicio-Penal.png"  class="img-fluid"></picture></div>



        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 text-center p-5">
                <a href="#" class="btn btn-default  botones fondo-boton">{{ __('inicio.texto6')}}</a>
            </div>
        </div>
    </div>
</section>
<section id="section4" class="p-0 ">
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-md-4 blq-casos col-12" data-aos="fade-right">
                <h2 class="casos-texto texto-verde2">{{ __('inicio.texto8')}}</h2>
                <p>{{ __('inicio.texto9')}}
                </p>
                <div class="text-left p-2">
                    <a href="#" class="btn btn-default  botones fondo-boton">{{ __('inicio.texto7')}}</a>
                </div>
            </div>
            <div class="col-md-8 col-12 mbg"  style="background:url(/images/Casos-Exito-Home.jpg) no-repeat center center; background-size:cover;">

            </div>
        </div>

    </div>
</section>
<section id="section5"  class="p-0 ">
    <div class="container-fluid p-0">

        <div class="row">

            <div class="col-md-8 pad pad-left pad-bottom pad-right" data-aos="fade-right" style="background:url(/images/SalaJuntas.jpg) no-repeat center center; background-size:cover;">
                <div class="titulo titulo-bold gris-oscuro">{{ __('inicio.texto10')}}</div>

                    <form action="" class="formgen">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="{{__('inicio.texto12')}}">
                        </div>
                        <div class="form-group">
                            <input type="asunto" class="form-control" name="asunto" placeholder="{{__('inicio.texto13')}}">
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" placeholder="{{__('inicio.texto14')}}"></textarea>
                        </div>
                    <div class="form-group">

                        <button type="submit" class="btn btn-default fondo-boton botones">{{__('inicio.texto15')}}</button>
                        </div>
                    </form>


            </div>
            <div class="col-md-4 blq-contacto texto-white" data-aos="fade-left">
                <h2 class="subtitulo text-upper">{{ __('inicio.texto11')}}</h2>
                <p>
                    Juárez Nte. 898 Int. 2D, Colonia Centro, San Pedro Garza García, Nuevo León, México.  C.P. 66230
                </p>
                <p>
                    info@gcr.com.mx
                </p>
                <p>+52 81 8192-0132 / +52 81 8192-0133</p>
            </div>
        </div>

    </div>
</section>


</main>
@endsection
