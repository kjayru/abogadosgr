@extends('layouts.app')

@section('content')
<main id="areas">
    <section id="section1" class="pad-10 fondo-gris2 titular d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                        <h1 class="titulo-seccion texto-verde2">{!! __('areas.texto1')!!}</h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12 m-0">

                    <div id="accordion" data-aos="fade-up">
                        <div class="card">
                          <div class="card-header ascensor" id="headingOne">
                            <h5 class="mb-0 ascensor__h5">
                                <figure class="ascensor__figure">
                                    <?xml version="1.0" encoding="utf-8"?> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><style type="text/css">.st0{fill:#706F6F}.st1{fill:#008B84}</style><g> <path class="st1" d="M9.8,13.4H8.5c-0.2,0-0.3,0.1-0.3,0.3v7.1c0,0.2,0.1,0.3,0.3,0.3h1.2c0.2,0,0.3-0.1,0.3-0.3v-7.1 C10.1,13.6,9.9,13.4,9.8,13.4L9.8,13.4z M9.8,13.4"/> <g> <path class="st1" d="M15.5,13.4h-1.2c-0.2,0-0.3,0.1-0.3,0.3v7.1c0,0.2,0.1,0.3,0.3,0.3h1.2c0.2,0,0.3-0.1,0.3-0.3v-7.1 C15.7,13.6,15.6,13.4,15.5,13.4L15.5,13.4z M15.5,13.4"/> <path class="st1" d="M23.8,5.7L12.1,2.9c0,0-0.1,0-0.1,0L0.2,5.7C0.1,5.7,0,5.8,0,5.9v0.7c0,0.2,0.1,0.3,0.3,0.3h0.4v13.9 c0,0.2,0.1,0.3,0.3,0.3h3.1c0.2,0,0.3-0.1,0.3-0.3v-9c0,0,0-1.1,0.6-1.7c0.3-0.3,0.8-0.5,1.3-0.5c0.6,0,1,0.2,1.4,0.5 c0.6,0.7,0.6,1.7,0.6,1.7v0.4H8c0,0-0.1,0-0.1,0.1v0.6c0,0,0,0.1,0.1,0.1h2.3c0,0,0.1,0,0.1-0.1v-0.6c0,0,0-0.1-0.1-0.1h-0.3v-0.4 c0,0,0-1.1,0.6-1.7C11,9.7,11.4,9.5,12,9.5c0.6,0,1,0.2,1.4,0.5c0.6,0.7,0.6,1.7,0.6,1.7v0.4h-0.3c0,0-0.1,0-0.1,0.1v0.6 c0,0,0,0.1,0.1,0.1H16c0,0,0.1,0,0.1-0.1v-0.6c0,0,0-0.1-0.1-0.1h-0.3v-0.4c0,0,0-1.1,0.6-1.7c0.3-0.3,0.8-0.5,1.3-0.5 c0.6,0,1,0.2,1.4,0.5c0.6,0.7,0.6,1.7,0.6,1.7v9c0,0.2,0.1,0.3,0.3,0.3H23c0.2,0,0.3-0.1,0.3-0.3V6.9h0.4c0.2,0,0.3-0.1,0.3-0.3 V5.9C24,5.8,23.9,5.7,23.8,5.7L23.8,5.7z M3.2,16.6C3.2,16.6,3.2,16.6,3.2,16.6L2,16.6c0,0-0.1,0-0.1-0.1v-3c0,0,0,0,0,0l0.6-0.7 c0,0,0.1,0,0.1,0l0.6,0.7c0,0,0,0,0,0V16.6z M22.1,16.6C22.1,16.6,22.1,16.6,22.1,16.6l-1.2,0.1c0,0-0.1,0-0.1-0.1v-3c0,0,0,0,0,0 l0.6-0.7c0,0,0.1,0,0.1,0l0.6,0.7c0,0,0,0,0,0V16.6z M22.1,16.6"/> </g> </g> </svg>
                                </figure>
                              <button class="btn btn-link asc1 radio " data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                {{__('areas.texto2')}}
                              </button>
                            </h5>
                          </div>

                          <div id="collapseOne" class="collapse collapse1" aria-labelledby="headingOne" data-parent="#accordion">
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
                                        <p class="text-center">
                                         <a href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.contacto')}}" class="btn btn-default  botones fondo-boton">{{ __('inicio.texto6')}}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header ascensor" id="headingTwo">
                            <h5 class="mb-0 ascensor__h5">

                                <figure class="ascensor__figure">
                                    <?xml version="1.0" encoding="utf-8"?> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><style type="text/css">.st0{fill:#706F6F}.st1{fill:#008B84}</style><g> <path class="st1" d="M22.7,14.1C22.4,14,22.2,14,21.9,14c-0.6,0-1.2,0.3-1.6,0.7l-0.5-0.2L18.6,14c0.2-0.6,0.3-1.3,0.3-2 c0-0.7-0.1-1.3-0.3-2l1.3-0.5l0.5-0.2c0.4,0.4,1,0.7,1.6,0.7c0.3,0,0.5-0.1,0.8-0.2c1.1-0.4,1.6-1.7,1.1-2.8 c-0.3-0.8-1.1-1.3-1.9-1.3c-0.3,0-0.5,0.1-0.8,0.2c-0.8,0.4-1.3,1.2-1.3,2.1l-0.5,0.2L18,8.7c-0.6-1.2-1.6-2.1-2.8-2.8l0.5-1.3 L16,4.2c0,0,0.1,0,0.1,0c0.9,0,1.6-0.5,1.9-1.3c0.4-1.1-0.1-2.3-1.1-2.8C16.6,0.1,16.4,0,16.1,0c-0.9,0-1.6,0.5-1.9,1.3 c-0.4,0.8-0.1,1.8,0.5,2.4l-0.2,0.5L14,5.4c-0.6-0.2-1.3-0.3-2-0.3c-0.7,0-1.3,0.1-2,0.3L9.5,4.1L9.3,3.7c0.6-0.6,0.9-1.5,0.5-2.4 C9.5,0.5,8.8,0,7.9,0C7.6,0,7.4,0.1,7.1,0.2C6,0.6,5.5,1.8,6,2.9C6.3,3.7,7,4.2,7.9,4.2c0,0,0.1,0,0.1,0l0.2,0.5L8.7,6 C7.6,6.6,6.6,7.6,6,8.7L4.7,8.2L4.2,8c0-0.9-0.5-1.7-1.3-2.1C2.7,5.8,2.4,5.8,2.1,5.8c-0.9,0-1.6,0.5-1.9,1.3 c-0.4,1.1,0.1,2.3,1.1,2.8C1.6,10,1.8,10,2.1,10c0.6,0,1.2-0.3,1.6-0.7l0.5,0.2L5.4,10c-0.2,0.6-0.3,1.3-0.3,2s0.1,1.3,0.3,2 l-1.3,0.5l-0.5,0.2c-0.4-0.4-1-0.7-1.6-0.7c-0.3,0-0.5,0.1-0.8,0.2c-1.1,0.4-1.6,1.7-1.1,2.8c0.3,0.8,1.1,1.3,1.9,1.3 c0.3,0,0.5-0.1,0.8-0.2c0.8-0.4,1.3-1.2,1.3-2.1l0.5-0.2L6,15.3c0.6,1.2,1.6,2.1,2.8,2.8l-0.5,1.3L8,19.8c0,0-0.1,0-0.1,0 c-0.9,0-1.6,0.5-1.9,1.3c-0.4,1.1,0.1,2.3,1.1,2.8C7.4,23.9,7.6,24,7.9,24c0.9,0,1.6-0.5,1.9-1.3c0.4-0.8,0.1-1.8-0.5-2.4l0.2-0.5 l0.5-1.3c0.6,0.2,1.3,0.3,2,0.3c0.7,0,1.3-0.1,2-0.3l0.5,1.3l0.2,0.5c-0.6,0.6-0.9,1.5-0.5,2.4c0.3,0.8,1.1,1.3,1.9,1.3 c0.3,0,0.5-0.1,0.8-0.2c1.1-0.4,1.6-1.7,1.1-2.8c-0.3-0.8-1.1-1.3-1.9-1.3c0,0-0.1,0-0.1,0l-0.2-0.5L15.3,18 c1.2-0.6,2.1-1.6,2.8-2.8l1.3,0.5l0.5,0.2c0,0.9,0.5,1.7,1.3,2.1c0.3,0.1,0.5,0.2,0.8,0.2c0.9,0,1.6-0.5,1.9-1.3 C24.3,15.8,23.8,14.6,22.7,14.1z M12,17.4c-3,0-5.4-2.4-5.4-5.4S9,6.6,12,6.6S17.4,9,17.4,12S15,17.4,12,17.4z"/> <path class="st1" d="M12,8c-2.2,0-4,1.8-4,4s1.8,4,4,4s4-1.8,4-4S14.2,8,12,8z M12.7,13.5h-1.4v-3.1h1.4V13.5z"/> </g> </svg>
                                </figure>

                              <button class="btn btn-link  collapsed asc2 radio" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{__('areas.texto3')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse collapse2" aria-labelledby="headingTwo" data-parent="#accordion">
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
                                     <p class="text-center">
                                        <a href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.contacto')}}" class="btn btn-default  botones fondo-boton">{{ __('inicio.texto6')}}</a>
                                       </p>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header ascensor" id="headingThree">
                            <h5 class="mb-0 ascensor__h5">

                                <figure class="ascensor__figure">
                                    <?xml version="1.0" encoding="utf-8"?> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><style type="text/css">.st0{fill:#706F6F}.st1{fill:#008B84}</style><g> <g> <path class="st1" d="M3,8.9L0.5,10C0.2,10.2,0,10.5,0,10.8c0,0.3,0.2,0.7,0.5,0.8l1.8,0.8l0,0l4.2-1.9L3,8.9z M3,8.9"/> <path class="st1" d="M8.2,11.4l-4.2,1.9l2.2,1l4.1-1.9L8.2,11.4z M8.2,11.4"/> <path class="st1" d="M12,13.1L8,15l3.7,1.6c0.1,0.1,0.2,0.1,0.4,0.1c0.1,0,0.2,0,0.4-0.1l3.7-1.7L12,13.1z M12,13.1"/> <path class="st1" d="M10.3,8.9L8.3,9.8L4.7,8.2l2-0.9L10.3,8.9z M10.3,8.9"/> <path class="st1" d="M14.1,10.6l-2.1,1l-2.1-1L12,9.7h0L14.1,10.6z M14.1,10.6"/> <g> <path class="st1" d="M15.8,11.4l-2.1,1l4.1,1.9l2.2-1L15.8,11.4z M15.8,11.4"/> </g> <path class="st1" d="M19.3,8.2l-3.6,1.6l-2.1-0.9l3.6-1.6L19.3,8.2z M19.3,8.2"/> <path class="st1" d="M24,10.8c0,0.3-0.2,0.7-0.5,0.8l-1.8,0.8h0l-4.2-1.9L21,8.9l2.4,1.1C23.8,10.2,24,10.5,24,10.8L24,10.8z M24,10.8"/> <path class="st1" d="M23.5,13.3l-0.3-0.1L12.4,18c-0.1,0.1-0.2,0.1-0.4,0.1c-0.1,0-0.2,0-0.4-0.1L0.8,13.2l-0.3,0.1 C0.2,13.4,0,13.7,0,14.1c0,0.3,0.2,0.7,0.5,0.8l11.1,5c0.1,0.1,0.2,0.1,0.4,0.1c0.1,0,0.2,0,0.4-0.1l11.1-5 c0.3-0.1,0.5-0.5,0.5-0.8C24,13.7,23.8,13.4,23.5,13.3L23.5,13.3z M23.5,13.3"/> <path class="st1" d="M23.5,16.6l-0.3-0.1l-10.8,4.9c-0.1,0.1-0.2,0.1-0.4,0.1c-0.1,0-0.2,0-0.4-0.1L0.8,16.4l-0.3,0.1 C0.2,16.7,0,17,0,17.4c0,0.3,0.2,0.7,0.5,0.8l11.1,5c0.1,0.1,0.2,0.1,0.4,0.1c0.1,0,0.2,0,0.4-0.1l11.1-5c0.3-0.1,0.5-0.5,0.5-0.8 C24,17,23.8,16.7,23.5,16.6L23.5,16.6z M23.5,16.6"/> </g> <path class="st1" d="M13.2,9c0.1,0.3,0.1,0.5,0.1,0.8c1.2,0.6,2.5,0.4,3.7-0.2c2.1-1,3.4-3.1,3.6-5.2c0-0.2-0.1-0.4-0.2-0.5 c-1.8-1.3-4.2-1.4-6.2-0.5C15.3,5.3,14.8,7.6,13.2,9L13.2,9z M13.2,9 M12.2,2.6C10.6,1,8.2,0.4,6.1,1C5.9,1,5.8,1.2,5.7,1.4 C5,4.1,6.2,7,8.6,8.5c0.7,0.4,1.5,0.6,2.3,0.4c0.3,0.7,0.5,1.4,0.6,2.3h1.1c-0.1-0.9-0.3-1.9-0.7-2.7c-0.5-1.7-1.5-2.9-2.6-3.3 C9.1,5,8.9,4.7,9.1,4.4C9.2,4.1,9.5,4,9.8,4.1c1.5,0.7,2.5,2.1,3.1,3.6c0.4-0.5,0.6-1,0.7-1.6C13.8,4.8,13.2,3.6,12.2,2.6z"/> </g> </svg>
                                </figure>

                              <button class="btn btn-link  collapsed asc3 radio" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{__('areas.texto4')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse collapse3" aria-labelledby="headingThree" data-parent="#accordion">
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

                                      <p class="text-center">
                                        <a href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.contacto')}}" class="btn btn-default  botones fondo-boton">{{ __('inicio.texto6')}}</a>
                                       </p>
                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header ascensor" id="headingcuatro">
                            <h5 class="mb-0 ascensor__h5">

                                <figure class="ascensor__figure">
                                    <?xml version="1.0" encoding="utf-8"?> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><style type="text/css">.st0{fill:#706F6F}.st1{fill:#008B84}</style><g> <path class="st1" d="M21.8,16.2V4.7c0-0.5-0.4-0.9-0.9-0.9H3.1c-0.5,0-0.9,0.4-0.9,0.9v11.6L0,18.9c0,0.7,0.6,1.3,1.3,1.3h21.3 c0.7,0,1.3-0.6,1.3-1.3L21.8,16.2z M13.8,19.8h-3.6c-0.1,0-0.2-0.1-0.2-0.2c0-0.1,0.1-0.2,0.2-0.2h3.6c0.1,0,0.2,0.1,0.2,0.2 C14,19.7,13.9,19.8,13.8,19.8L13.8,19.8z M8.3,18.9L9,18.1h6l0.7,0.8H8.3z M20.5,14.7c0,0.4-0.4,0.8-0.8,0.8H4.3 c-0.4,0-0.8-0.4-0.8-0.8V5.4c0-0.4,0.3-0.8,0.8-0.8h15.5c0.4,0,0.8,0.3,0.8,0.8V14.7z M20.5,14.7"/> </g> </svg>
                                </figure>

                              <button class="btn btn-link  collapsed asc4 radio" data-toggle="collapse" data-target="#collapsecuatro" aria-expanded="false" aria-controls="collapseThree">
                                {{__('areas.texto5')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapsecuatro" class="collapse collapse4" aria-labelledby="headingcuatro" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Administrativo.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                        <ol>
                                            <li>{{__('areas.texto30')}}</li>
                                        </ol>
                                        <p class="text-center">
                                            <a href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.contacto')}}" class="btn btn-default  botones fondo-boton">{{ __('inicio.texto6')}}</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header ascensor" id="headingcinco">
                            <h5 class="mb-0 ascensor__h5">

                                <figure class="ascensor__figure">
                                    <?xml version="1.0" encoding="utf-8"?> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><style type="text/css">.st0{fill:#706F6F}.st1{fill:#008B84}</style><g> <path class="st1" d="M12.1,3c0.1-0.2,0.4-0.3,0.6-0.2l1.5,0.9C14,2.4,13.3,1.8,12,1.8c-1.4,0-2.1,0.7-2.2,2.2 C10.6,4,11.8,3.7,12.1,3C12,3,12,3,12.1,3z"/> <path class="st1" d="M12,6.8c0.7,0,2-0.9,2.2-2l-1.6-1c-0.6,0.8-2,1.1-2.8,1.1C10.2,5.9,11,6.6,12,6.8z"/> <polygon class="st1" points="11.6,9.3 12,9.7 12.4,9.3 12,8.4 	"/> <path class="st1" d="M5,15.9C5,15.4,4.6,15,4.1,15s-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9S5,16.4,5,15.9z"/> <path class="st1" d="M15.1,10.2C15.1,10.2,15.1,10.2,15.1,10.2l0-1.1c0-0.8-0.7-1.5-1.5-1.5h-1l0.6,1.6c0.1,0.2,0,0.4-0.1,0.5 l-0.9,0.9c-0.2,0.2-0.5,0.2-0.6,0l-0.9-0.9c-0.1-0.1-0.2-0.3-0.1-0.5l0.6-1.6h-1c-0.8,0-1.5,0.7-1.5,1.5v1.1 C10.8,11.5,13.2,11.5,15.1,10.2L15.1,10.2z"/> <path class="st1" d="M8.4,21.7c-0.3,0.1-0.6,0.4-0.7,0.7H4.4v-1.6C5,20.7,5.5,20.5,6,20.3v-0.7c0-1-0.8-1.8-1.8-1.8 s-1.8,0.8-1.8,1.8v0.8c0.3,0.2,0.7,0.3,1.1,0.3c0.1,0,0.1,0,0.2,0v2c0,0.2,0.2,0.4,0.4,0.4h3.7c0.2,0.6,0.9,1,1.5,0.7 c0.6-0.2,1-0.9,0.7-1.5C9.7,21.8,9,21.4,8.4,21.7z"/> <polygon class="st1" points="18,22.3 18.4,22.7 18.8,22.3 18.4,21.4 	"/> <path class="st1" d="M20,20.7h-1l0.6,1.6c0.1,0.2,0,0.3-0.1,0.5l-0.9,0.9c-0.2,0.2-0.4,0.2-0.6,0l-0.9-0.9 c-0.1-0.1-0.2-0.3-0.1-0.5l0.6-1.6h-1c-0.8,0-1.4,0.6-1.4,1.4v1c1.1,0.7,2.4,1,3.8,0.8c0.8-0.1,1.6-0.4,2.2-0.8v-1 C21.4,21.3,20.8,20.7,20,20.7z"/> <path class="st1" d="M23.9,17.6c-0.4-2.7-2.6-4.7-5.3-4.8L16,9.5c0.9-0.9,1.5-2.2,1.6-3.5h4v0.4c-0.9,0.2-1.6,1-1.6,2 c0,1.1,0.9,2,2,2s2-0.9,2-2c0-0.9-0.7-1.8-1.6-2V5.6c0-0.2-0.2-0.4-0.4-0.4h-4.4c-0.1-1.1-0.5-2.2-1.2-3L17,1.6h4.7 c0.2,0.6,0.9,1,1.5,0.7c0.6-0.2,1-0.9,0.7-1.5c-0.2-0.6-0.9-1-1.5-0.7c-0.3,0.1-0.6,0.4-0.7,0.7h-4.9c-0.1,0-0.2,0-0.3,0.1 l-0.6,0.6C13.6-0.6,10.1-0.5,8,1.7C7.1,2.7,6.5,3.9,6.4,5.2H3.1L1.8,2.3c0.6-0.3,0.8-1,0.5-1.6C2,0.1,1.2-0.2,0.6,0.1 c-0.6,0.3-0.8,1-0.5,1.6c0.2,0.3,0.4,0.5,0.8,0.6l1.5,3.4C2.5,5.9,2.6,6,2.8,6h3.6C6.5,7.3,7.1,8.5,8,9.5l-3.4,3.4 C2.4,12.5,0.4,14,0,16.2c-0.2,1.4,0.3,2.7,1.3,3.6v-0.2c0-1,0.5-1.9,1.4-2.4c-0.7-0.7-0.7-1.8,0-2.5c0.7-0.7,1.9-0.8,2.6-0.1 c0.7,0.7,0.8,1.9,0.1,2.6c0.8,0.4,1.3,1.2,1.4,2.1v0c0,0.1,0,0.2,0,0.3c0.8-0.8,1.2-2,1.1-3.2c-0.1-1.5-1.1-2.8-2.5-3.3L8.6,10 c0,0,0,0,0.1,0C8.4,9.8,8.1,9.6,7.9,9.4V9.1c0-1.2,0.9-2.2,2.1-2.4C9.3,6.2,8.9,5.4,8.8,4.5c0-3,1.7-3.6,3.1-3.6 c1.4,0,3.1,0.6,3.1,3.6c-0.1,0.9-0.5,1.7-1.2,2.3C15.1,6.9,16,7.9,16,9.1v0.1l0,0.2l0,0c-0.3,0.3-0.5,0.5-0.9,0.8 c0.1-0.1,0.2-0.1,0.3-0.2l2.2,2.8c-3.1,0.4-5.2,3.3-4.8,6.3c0.2,1.3,0.8,2.4,1.7,3.3l0-0.3c0-1.1,0.9-2.1,2-2.3 c-0.7-0.5-1.1-1.3-1.1-2.2c0-2.8,1.6-3.4,3-3.4c1.4,0,3,0.6,3,3.4c-0.1,0.9-0.5,1.6-1.1,2.2c1.1,0.1,2,1.1,2,2.3v0.3 C23.5,21.3,24.2,19.5,23.9,17.6z"/> <path class="st1" d="M18.5,16.2c0.1-0.2,0.4-0.3,0.6-0.1l1.4,0.9c-0.2-1.2-0.9-1.8-2.1-1.8c-1.3,0-2,0.7-2.1,2.1 C17,17.2,18.2,16.9,18.5,16.2C18.4,16.2,18.4,16.2,18.5,16.2z"/> <path class="st1" d="M18.4,19.8c0.7,0,2-0.9,2.1-1.9L19,17v0c-0.6,0.8-1.9,1-2.7,1.1C16.6,19,17.4,19.7,18.4,19.8z"/> </g> </svg>
                                </figure>

                              <button class="btn btn-link  collapsed asc5 radio" data-toggle="collapse" data-target="#collapsecinco" aria-expanded="false" aria-controls="collapseThree">
                                {{__('areas.texto6')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapsecinco" class="collapse collapse5" aria-labelledby="headingcinco" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Laboral.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                        <ol>
                                            <li>{{__('areas.texto31')}}</li>

                                            <li>{{__('areas.texto32')}}</li>

                                            <li>{{__('areas.texto33')}}</li>

                                            <li>{{__('areas.texto34')}}</li>

                                            <li>{{__('areas.texto35')}}</li>

                                        </ol>
                                        <p class="text-center">
                                            <a href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.contacto')}}" class="btn btn-default  botones fondo-boton">{{ __('inicio.texto6')}}</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header ascensor" id="headingseis">
                            <h5 class="mb-0 ascensor__h5">

                                <figure class="ascensor__figure">
                                    <?xml version="1.0" encoding="utf-8"?> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><style type="text/css">.st0{fill:#706F6F}.st1{fill:#008B84}</style><g> <path class="st1" d="M21.1,0h-5.8c-0.2,0-0.4,0.2-0.4,0.4v1.7h-0.8c-0.5,0-0.8,0.4-0.8,0.8s0.4,0.8,0.8,0.8h0.8v2.1h1.7 c0-0.9,0.7-1.7,1.7-1.7c0.9,0,1.7,0.7,1.7,1.7h1.2c0.2,0,0.4-0.2,0.4-0.4v-5C21.5,0.2,21.3,0,21.1,0L21.1,0z M21.1,0"/> <path class="st1" d="M9.9,24c1,0,1.8-0.7,2-1.7H7.9C8.1,23.3,8.9,24,9.9,24L9.9,24z M9.9,24"/> <path class="st1" d="M6.6,7.4c0.9,0,1.7,0.7,1.7,1.7h1.7V7.9C9,7.9,8.3,7.1,8.3,6.2S9,4.6,9.9,4.6V2.5H9.6c-3.8,0-6.9,2.9-7.1,6.6 H5C5,8.2,5.7,7.4,6.6,7.4L6.6,7.4z M6.6,7.4"/> <path class="st1" d="M7,18.2h2.9v-3.3c-0.9,0-1.7-0.7-1.7-1.7s0.7-1.7,1.7-1.7V9.9H7.4V9.1c0-0.5-0.4-0.8-0.8-0.8 c-0.5,0-0.8,0.4-0.8,0.8v0.8H2.5c0.1,2.1,1,4,2.6,5.3L7,16.8V18.2z M7,18.2"/> <path class="st1" d="M14.9,9.1c0-0.5-0.4-0.8-0.8-0.8s-0.8,0.4-0.8,0.8v0.8h-2.5v2.5H9.9c-0.5,0-0.8,0.4-0.8,0.8 c0,0.5,0.4,0.8,0.8,0.8h0.8v4.1h2.1v-1.4l1.9-1.6c1.6-1.3,2.5-3.2,2.6-5.3h-2.5V9.1z M14.9,9.1"/> <path class="st1" d="M12.4,20.7h-5c-0.2,0-0.4,0.2-0.4,0.4c0,0.2,0.2,0.4,0.4,0.4h5c0.2,0,0.4-0.2,0.4-0.4 C12.8,20.9,12.6,20.7,12.4,20.7L12.4,20.7z M12.4,20.7"/> <path class="st1" d="M13.2,19H6.6c-0.2,0-0.4,0.2-0.4,0.4c0,0.2,0.2,0.4,0.4,0.4h6.6c0.2,0,0.4-0.2,0.4-0.4 C13.7,19.2,13.5,19,13.2,19L13.2,19z M13.2,19"/> </g> </svg>
                                </figure>

                              <button class="btn btn-link  collapsed asc6 radio" data-toggle="collapse" data-target="#collapseseis" aria-expanded="false" aria-controls="collapseThree">
                                {{__('areas.texto7')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapseseis" class="collapse collapse6" aria-labelledby="headingseis" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Propiedad-intelectual.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                        <ol>
                                            <li>{{__('areas.texto36')}}</li>

                                            <li>{{__('areas.texto37')}}</li>

                                            <li>{{__('areas.texto38')}}</li>
                                        </ol>
                                        <p class="text-center">
                                            <a href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.contacto')}}" class="btn btn-default  botones fondo-boton">{{ __('inicio.texto6')}}</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header ascensor" id="headingsiete">
                            <h5 class="mb-0 ascensor__h5 ">

                                <figure class="ascensor__figure">
                                    <?xml version="1.0" encoding="utf-8"?> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><style type="text/css">.st0{fill:#706F6F}.st1{fill:#008B84}</style><g> <path class="st1" d="M8.2,7.5C3.7,7.5,0,11.2,0,15.8S3.7,24,8.2,24s8.2-3.7,8.2-8.2S12.8,7.5,8.2,7.5z M8.2,15c1.2,0,2.2,1,2.2,2.2 c0,1-0.6,1.8-1.5,2.1v0.9C9,20.7,8.7,21,8.2,21c-0.4,0-0.8-0.3-0.8-0.8v-0.8H6.8c-0.4,0-0.8-0.3-0.8-0.8S6.3,18,6.8,18h1.5 C8.7,18,9,17.7,9,17.2c0-0.4-0.3-0.8-0.8-0.8c-1.2,0-2.2-1-2.2-2.2c0-1,0.6-1.8,1.5-2.1v-0.9c0-0.4,0.3-0.8,0.8-0.8 c0.4,0,0.8,0.3,0.8,0.8V12h0.8c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8H8.2c-0.4,0-0.8,0.3-0.8,0.8S7.8,15,8.2,15z"/> <path class="st1" d="M15.8,9c-0.2,0-0.4,0-0.6-0.1c0.4,0.4,0.8,0.9,1.1,1.3c0.1-0.1,0.2-0.3,0.2-0.5C16.5,9.3,16.2,9,15.8,9z"/> <path class="st1" d="M15.8,0c-3.8,0-7,2.6-7.9,6C8,6,8.1,6,8.2,6c2,0,3.9,0.6,5.5,1.7c-0.1-0.3-0.2-0.6-0.2-0.9 c0-1,0.6-1.8,1.5-2.1V3.8C15,3.3,15.3,3,15.8,3s0.8,0.3,0.8,0.8v0.8h0.8c0.4,0,0.8,0.3,0.8,0.8S17.7,6,17.2,6h-1.5 C15.3,6,15,6.3,15,6.8s0.3,0.8,0.8,0.8c1.2,0,2.2,1,2.2,2.2c0,0.8-0.4,1.4-1,1.8c0.6,1.3,1,2.7,1,4.2c0,0.1,0,0.3,0,0.4 c3.5-1,6-4.2,6-7.9C24,3.7,20.3,0,15.8,0z"/> </g> </svg>
                                </figure>

                              <button class="btn btn-link  collapsed asc7 radio" data-toggle="collapse" data-target="#collapsesiete" aria-expanded="false" aria-controls="collapsesiete">
                                {{__('areas.texto8')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapsesiete" class="collapse collapse7" aria-labelledby="headingsiete" data-parent="#accordion">
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
                                        <p class="text-center">
                                            <a href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.contacto')}}" class="btn btn-default  botones fondo-boton">{{ __('inicio.texto6')}}</a>
                                           </p>
                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header ascensor" id="headingocho">
                            <h5 class="mb-0 ascensor__h5">

                                <figure class="ascensor__figure">
                                    <?xml version="1.0" encoding="utf-8"?> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><style type="text/css">.st0{fill:#706F6F}.st1{fill:#008B84}</style><g> <path class="st1" d="M0.7,24h12.7c0.4,0,0.7-0.3,0.7-0.7v-0.7c0-0.8-0.6-1.4-1.4-1.4v-0.8c0-1.1-0.9-2-2-2H3.4c-1.1,0-2,0.9-2,2 v0.8c-0.8,0-1.4,0.6-1.4,1.4v0.7C0,23.7,0.3,24,0.7,24L0.7,24z M0.7,24"/> <g> <path class="st1" d="M8.8,15.5c0.5,0.6,1.3,0.7,2,0.3c0.6-0.5,0.7-1.3,0.3-2L6.8,8.2c-0.5-0.6-1.3-0.7-2-0.3 c-0.6,0.5-0.7,1.3-0.3,2L8.8,15.5z M8.8,15.5"/> <path class="st1" d="M18.9,7.9c0.5,0.6,1.3,0.7,2,0.3c0.6-0.5,0.7-1.3,0.3-2l-4.2-5.6c-0.5-0.6-1.3-0.7-2-0.3 c-0.6,0.5-0.7,1.3-0.3,2L18.9,7.9z M18.9,7.9"/> </g> <path class="st1" d="M15.8,12c1-0.8,1.8-1.8,2.3-2.8l-4.9-6.5c-1.1,0.2-2.3,0.7-3.3,1.5c-1,0.8-1.8,1.8-2.3,2.8l4.9,6.5 C13.6,13.2,14.8,12.7,15.8,12L15.8,12z M15.8,12"/> <g> <path class="st1" d="M17.7,12.1c-0.3,0.3-0.7,0.7-1.1,0.9c-0.4,0.3-0.8,0.5-1.2,0.8l0.9,1.2l2.2-1.7L17.7,12.1z M17.7,12.1"/> <path class="st1" d="M19.5,14.5l-2.2,1.7l4.2,5.6c0.5,0.6,1.3,0.7,2,0.3c0.6-0.5,0.7-1.3,0.3-2L19.5,14.5z M19.5,14.5"/> </g> </g> </svg>
                                </figure>

                              <button class="btn btn-link  collapsed asc8 radio" data-toggle="collapse" data-target="#collapseocho" aria-expanded="false" aria-controls="collapseocho">
                                {{__('areas.texto9')}}
                              </button>
                            </h5>
                          </div>
                          <div id="collapseocho" class="collapse collapse8" aria-labelledby="headingocho" data-parent="#accordion">
                            <div class="card-body">


                                  <div class="row">
                                    <div class="col-md-3 d-none d-sm-block">
                                        <img src="/images/Penal.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 listado col-12">
                                        <ol>
                                            <li>{{__('areas.texto43')}}</li>
                                        </ol>
                                        <p class="text-center">
                                            <a href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.contacto')}}" class="btn btn-default  botones fondo-boton">{{ __('inicio.texto6')}}</a>
                                        </p>
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
