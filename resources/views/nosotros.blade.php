@extends('layouts.app')

@section('content')
<main id="nosotros">

    <section id="section1" class="p-5 pl-7 lienzo bg-nosotros">
        <div class="container-fluid">
            <div class="row justify-content-start">
                <div class="col-md-3 bloq">
                    <div class="subtitulo">{{__('nosotros.25years')}}</div>
                    <div class="contenido">
                        <p>Profesionales expertos en la práctica jurídica con más de 25 años de experiencia.</p>
                    </div>
                </div>
                <div class="col-md-3 bloq">
                    <div class="subtitulo">{{__('nosotros.exitos')}}</div>
                    <div class="contenido">
                        <p>Somos un despacho de abogados con éxitos nacionales e internacionales.</p>
                    </div>
                </div>
                <div class="col-md-3 bloq">
                    <div class="subtitulo ending">{{__('nosotros.especialidad')}}</div>
                    <div class="contenido">
                        <p>Especialistas que inspiran confianza brindando servicios
                            jurídicos en las áreas de derecho mercantil, corporativo, bursátil,
                            inmobiliario, laboral y administrativo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section2" class="p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 bg-nosotros-2">

                </div>
                <div class="col-md-8  pad-10">
                    <p>
                        Somos un despacho fundado en el año de 1995. Ahora, con más de 25 años de experiencia,
                        es inevitable que no miremos atrás para recordar las razones que nos motivaron a asociarnos.
                         Todos los miembros de este despacho buscaban colegas con alta capacidad profesional
                          que compartieran no solamente los mismos objetivos y metas, sino que también
                          coincidieran en los métodos por los que dichos objetivos serían alcanzados. Excelencia,
                          honestidad y responsabilidad personal son los cimientos de nuestra práctica del derecho.
                    </p>
                    <img src="/images/logo-content.png" class="img-fluid">
                    <p class="texto-resaltado">
                        A lo largo de nuestra amplia trayectoria, hemos adquirido valiosa experiencia brindando servicios de asesoría,
                        consultoría y litigio – nacional e internacional, con enfoque en las áreas de derecho corporativo, inmobiliario,
                        laboral, administrativo, entre otras.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section id="section3" class="p-0 bg-nosotros-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                        <H1 class="titulo-abogado texto-white"><span>Nuestros</span><br>  Abogados</H1>

                </div>
            </div>
           <div class="row justify-content-end texto-pad1 texto-white">
               <div class="col-md-6">
                    <p>Los profesionistas que laboran con nosotros cuentan con las capacidades necesarias para comprender
                        los asuntos de nuestros clientes, asesorándolos correctamente.
                    </p>
                    <p>
                        Esto se ha logrado a través de una atención personalizada, siendo accesibles y manteniéndolos informados
                        del avance de sus asuntos, evitando o reduciendo al mismo tiempo, gastos de litigio y de asesoría adicionales
                        mediante la recomendación de medidas preventivas o métodos alternativos de resolución de controversias.
                    </p>
               </div>
           </div>
        </div>
    </section>
    <section id="section4" class="p-0">
        <div class="container-fluid">
            <div class="row nosotros-content">
                <div class="col-md-6 back-green-oscuro bloque">
                    <div class="titulo-blq titulo2 texto-white">
                        Visión
                    </div>
                    <div class="contenido texto-white op1">
                        <p>Para el futuro, seguiremos proporcionando los servicios de la más alta calidad profesional,
                            siempre actuando dentro del marco de la legalidad.
                        </p>
                        <p>
                            Deseamos atraer nuevos clientes, los cuales puedan recomendarnos posteriormente y tengan
                            confianza en que este despacho les proveerá de una acertada asistencia legal.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 back-grey bloque">
                    <div class="titulo-blq titulo2 texto-verde2">Asesoría en la<br> República Mexicana</div>
                    <div class="contenido op2">
                        <p>En nuestro país, hemos establecido una amplia red de corresponsales que cuentan con toda nuestra confianza,
                            los cuales se encuentran ubicados en las principales ciudades: Ciudad de México, Guadalajara, Querétaro, entre otras.
                        </p>
                        <p>
                        Nuestros corresponsales son expertos que conocemos a profundidad y que cuentan con el más alto
                        prestigio personal y profesional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section5" class="p-0 bg-nosotros-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                        <H1 class="titulo-alcance texto-verde2">Alcance <br>Internacional</H1>

                </div>
            </div>
           <div class="row justify-content-end texto-pad1 texto-grey">
               <div class="col-md-6">
                    <p>
                        Las fronteras nunca han sido un límite. Aún y cuando las oficinas de García Corral y Rodríguez se encuentran
                        ubicadas físicamente en la ciudad de Monterrey, Nuevo León, México, contamos con acceso inmediato a asesoría
                         jurídica en diversos países, especialmente en los Estados Unidos de América, mediante corresponsales que han
                          sido cuidadosamente seleccionados.
                    </p>
                    <p>
                        En adición a sus conocimientos legales, estas firmas de abogados en el extranjero cuentan con la experiencia
                         para representar empresas extranjeras y poseen el prestigio y conocimiento necesario para realizar
                          el trabajo requerido con la más alta calidad y confiabilidad.
                    </p>
               </div>
           </div>
    </section>
</main>
@endsection
