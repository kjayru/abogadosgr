@extends('layouts.app')

@section('content')
<main id="areas">

    <section id="section1" class="pad-10 fondo-gris2 titular">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                        <H1 class="titulo-seccion texto-verde2">Nuestros <br>Servicios</H1>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid p-0 m-0">
            <div class="row">
                <div class="col-md-12 p-0 m-0">

                    <div id="accordion">


                        <div class="card">
                          <div class="card-header ascensor" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link asc1 radio" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Inmobiliario
                              </button>
                            </h5>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="/images/Inmobiliario.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado">
                                       <p> La asesoría a desarrolladores y personas físicas en la adquisición y desarrollo de inmuebles incluye:</p>
                                        <ol>

                                         <li> La realización de una opción a compra o precontrato, por la cual se cuente con un plazo para realizar un Due Diligence (Administrativo y Legal)
                                              del inmueble a adquirir, con el propósito de que al realizar la transacción se cuente con todos los elementos legales y administrativos, para tomar
                                              la decisión de adquirir el inmueble mediante el ejercicio de la opción.</li>

                                         <li> Asesoría para la estructuración y celebración del instrumento por el cual se haría la transmisión de la propiedad del inmueble correspondiente.</li>

                                         <li> Instrumentación de coinversiones, entre propietarios de la tierra y desarrolladores, fideicomisos de administración y/o empresariales.</li>

                                         <li> Asesoría en la tramitología para la obtención de los permisos, municipales, estatales o federales que se requieran, para obtener la autorización
                                             del desarrollo inmobiliario que se pretende llevar a cabo.</li>

                                         <li> Redacción de los formatos de precontratos u ofertas de compra que se celebren con los adquirentes de las unidades del desarrollo Inmobiliario a realizar,
                                              entre el momento que empiece la preventa, hasta el momento en que se tenga la autorización de ventas.</li>

                                         <li> Redacción de los formatos de los contratos privados a plazos o de contado que se celebren con los adquirentes de las unidades del desarrollo
                                             Inmobiliario a realizar, al momento en que se tenga la autorización de ventas.</li>

                                         <li> Redacción de los formatos de folios a firmar ante notario público en los que consten los actos jurídicos que se celebren con los adquirentes de
                                             las unidades del desarrollo Inmobiliario a realizar.</li>

                                         <li> Redacción de contratos de obra a celebrar con los contratistas para la realización de las obras de los desarrollos inmobiliarios.</li>

                                         <li> Constitución de condominios horizontales o verticales, en caso que el desarrollo inmobiliario sea un condominio.</li>

                                         <li> Asesoría en compras de terrenos, casas, departamentos, oficinas en forma individual por personas físicas o morales.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header ascensor" id="headingTwo">
                            <h5 class="mb-0 ">
                              <button class="btn btn-link  collapsed asc2 radio" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Corporativo, Societario y Mercantil
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                              <div class="row">
                                    <div class="col-md-3">
                                        <img src="/images/Corporativo.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado">
                                     <ol>
                                       <li> Formación de sociedades mercantiles en México y en los Estados Unidos de América
                                           (Redacción de estatutos, acuerdos de intención y acuerdos entre accionistas).</li>

                                      <li>Operaciones de capitalización, operación, fusión, escisión, venta y due dilligence
                                          de entidades mercantiles en general.</li>

                                      <li>Negociación e implementación de coinversiones, alianzas estratégicas, fusiones, adquisiciones
                                           y escisiones, reorganizaciones corporativas, integración post-adquisición, franquicias y redes
                                            de distribución.</li>

                                      <li>Redacción y asesoría de contratos mercantiles de acuerdo con la legislación mexicana y
                                          norteamericana (Tomando en consideración los tratados comerciales que México ha suscrito).</li>

                                      <li>Secretaría corporativa.</li>

                                      <li>Mediación, litigio y arbitraje comercial (nacional e internacional).</li>

                                     </ol>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header ascensor" id="headingThree">
                            <h5 class="mb-0 ">
                              <button class="btn btn-link  collapsed asc3 radio" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Agrario
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3">
                                        <img src="/images/Agrario.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado">
                                      <ol>
                                         <li> Elaboración de estrategias de adquisición de bienes inmuebles rústicos a particulares y ejidos
                                       para fines agrícolas.</li>

                                         <li> Constitución de sociedades de producción rural, asociaciones rurales de interés colectivo y otras entidades
                                          jurídicas afines al ramo agrario.</li>

                                         <li> Creación de estrategias para la celebración de actos jurídicos con ejidos tales como préstamos, asociaciones,
                                          sociedades con acciones de terrenos, arrendamientos, etc.</li>
                                      </ol>


                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>




                        <div class="card">
                          <div class="card-header ascensor" id="headingcuatro">
                            <h5 class="mb-0 ">
                              <button class="btn btn-link  collapsed asc4 radio" data-toggle="collapse" data-target="#collapsecuatro" aria-expanded="false" aria-controls="collapseThree">
                                Administrativo
                              </button>
                            </h5>
                          </div>
                          <div id="collapsecuatro" class="collapse" aria-labelledby="headingcuatro" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3">
                                        <img src="/images/Administrativo.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado">
                                        <ol>
                                      <li>Cabildeo y gestionamiento ante las autoridades administrativas (audiencias administrativas y apelaciones y empresas paraestatales).
                                      </li></ol>
                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header ascensor" id="headingcinco">
                            <h5 class="mb-0 ">
                              <button class="btn btn-link  collapsed asc5 radio" data-toggle="collapse" data-target="#collapsecinco" aria-expanded="false" aria-controls="collapseThree">
                                Laboral
                              </button>
                            </h5>
                          </div>
                          <div id="collapsecinco" class="collapse" aria-labelledby="headingcinco" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3">
                                        <img src="/images/Laboral.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado">
                                        <ol>
                                      <li>Consultoría laboral y de recursos humanos.</li>

                                      <li>Negociación de contratos individuales y colectivos de trabajo.</li>

                                      <li>Recisión y terminación de relaciones laborales.</li>

                                      <li>Litigio ante tribunales laborales, estatales y federales.</li>

                                      <li>Atención a asuntos derivados de huelgas y paros laborales.</li>

                                        </ol>
                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>









                        <div class="card">
                          <div class="card-header ascensor" id="headingseis">
                            <h5 class="mb-0 ">
                              <button class="btn btn-link  collapsed asc6 radio" data-toggle="collapse" data-target="#collapseseis" aria-expanded="false" aria-controls="collapseThree">
                                Propiedad Intelectual
                              </button>
                            </h5>
                          </div>
                          <div id="collapseseis" class="collapse" aria-labelledby="headingseis" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3">
                                        <img src="/images/Agrario.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado">
                                        <ol>
                                      <li>Asesoría y valoración sobre propiedad intelectual de empresas e individuos
                                          (Patentes, marcas, derechos de autor, diseños industriales).</li>

                                      <li>Adquisición, registro, protección y explotación de derechos de propiedad intelectual.</li>

                                      <li>Litigio administrativo en relación con derechos propiedad intelectual.</li>
                                        </ol>
                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>







                        <div class="card">
                          <div class="card-header ascensor" id="headingsiete">
                            <h5 class="mb-0 ">
                              <button class="btn btn-link  collapsed asc7 radio" data-toggle="collapse" data-target="#collapsesiete" aria-expanded="false" aria-controls="collapsesiete">
                                Bancario, Financiero y Bursátil
                              </button>
                            </h5>
                          </div>
                          <div id="collapsesiete" class="collapse" aria-labelledby="headingsiete" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3">
                                        <img src="/images/Bancario.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado">
                                        <ol>
                                      <li>Colocación de papel, acciones y obligaciones en mercados bursátiles.</li>

                                      <li>Negociación de instrumentos de garantía hipotecaria y apertura de líneas de crédito.</li>

                                      <li>Estructuración, manejo y administración de certificados de capital de desarrollo bajo
                                           esquemas de llamadas de capital para la realización de desarrollos inmobiliarios.</li>

                                      <li>Representación de acreedores en procesos de quiebra y suspensión de pagos.</li>
                                        </ol>

                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>








                        <div class="card">
                          <div class="card-header ascensor" id="headingocho">
                            <h5 class="mb-0 ">
                              <button class="btn btn-link  collapsed asc8 radio" data-toggle="collapse" data-target="#collapseocho" aria-expanded="false" aria-controls="collapseocho">
                                Penal
                              </button>
                            </h5>
                          </div>
                          <div id="collapseocho" class="collapse" aria-labelledby="headingocho" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3">
                                        <img src="/images/Penal.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado">
                                        <ol>
                                      <li>Litigio estratégico en relación con la comisión de delitos de cuello blanco (tráfico de influencias,
                                      fraude, lavado de dinero, cohecho, peculado, malversación de fondos económicos, etc.).</li>
                                        </ol>


                                    </div>
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
