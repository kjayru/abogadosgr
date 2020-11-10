@extends('layouts.app')

@section('content')
<main id="areas">

    <section id="section1" class="pad-10 fondo-gris2 titular">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">

                        <H1 class="titulo-seccion texto-verde2">{!! __('areas.texto1')!!}</H1>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid p-0 m-0">
            <div class="row">
                <div class="col-md-12 p-0 m-0">

                    <div id="accordion" data-aos="fade-up">


                        <div class="card">
                          <div class="card-header ascensor" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link asc1 radio" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{__('areas.texto2')}}
                              </button>
                            </h5>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Inmobiliario.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                       <p> {{__('areas.texto10')}}</p>

                                       <ol>
                                         <li> {{__('areas.texto11')}}</li>

                                         <li> {{__('areas.texto12')}}</li>

                                         <li>{{__('areas.texto13')}} </li>

                                         <li>{{__('areas.texto14')}} </li>

                                         <li>{{__('areas.texto15')}} </li>

                                         <li>{{__('areas.texto16')}} </li>

                                         <li>{{__('areas.texto17')}} </li>

                                         <li>{{__('areas.texto18')}} </li>

                                         <li>{{__('areas.texto19')}} </li>

                                         <li>{{__('areas.texto20')}} </li>
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
                                {{__('areas.texto3')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                              <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Corporativo.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                     <ol>
                                       <li> {{__('areas.texto21')}}</li>

                                      <li>{{__('areas.texto22')}}</li>

                                      <li>{{__('areas.texto23')}}</li>

                                      <li> {{__('areas.texto24')}}</li>

                                      <li>{{__('areas.texto25')}}</li>

                                      <li>{{__('areas.texto26')}}</li>

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
                                {{__('areas.texto4')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Agrario.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                      <ol>
                                         <li>  {{__('areas.texto27')}}</li>

                                         <li>  {{__('areas.texto28')}}</li>

                                         <li>  {{__('areas.texto29')}}</li>
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
                                {{__('areas.texto5')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapsecuatro" class="collapse" aria-labelledby="headingcuatro" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Administrativo.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                        <ol>
                                            <li>{{__('areas.texto30')}}</li>
                                        </ol>
                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header ascensor" id="headingcinco">
                            <h5 class="mb-0 ">
                              <button class="btn btn-link  collapsed asc5 radio" data-toggle="collapse" data-target="#collapsecinco" aria-expanded="false" aria-controls="collapseThree">
                                {{__('areas.texto6')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapsecinco" class="collapse" aria-labelledby="headingcinco" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Laboral.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                        <ol>
                                      <li>{{__('areas.texto6')}}</li>

                                      <li>{{__('areas.texto7')}}</li>

                                      <li>{{__('areas.texto8')}}</li>

                                      <li>{{__('areas.texto9')}}</li>

                                      <li>{{__('areas.texto10')}}</li>

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
                                {{__('areas.texto7')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapseseis" class="collapse" aria-labelledby="headingseis" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Agrario.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                        <ol>
                                      <li>{{__('areas.texto36')}}</li>

                                      <li>{{__('areas.texto37')}}</li>

                                      <li>{{__('areas.texto38')}}</li>
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
                                {{__('areas.texto8')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapsesiete" class="collapse" aria-labelledby="headingsiete" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Bancario.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                        <ol>
                                      <li>  {{__('areas.texto39')}}</li>

                                      <li>  {{__('areas.texto40')}}</li>

                                      <li>  {{__('areas.texto41')}}</li>

                                      <li>  {{__('areas.texto42')}}</li>
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
                                {{__('areas.texto9')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapseocho" class="collapse" aria-labelledby="headingocho" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Penal.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                        <ol>
                                            <li>{{__('areas.texto43')}}</li>
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
