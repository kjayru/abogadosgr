<header>
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-transparent">
        <a class="navbar-brand" href="#"><img src="/images/logoHeader.png" width="70"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/{{ str_replace('_', '-', app()->getLocale()) }}">{{__('navbar.inicio')}} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.nosotros')}}">{{__('navbar.nosotros')}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.areas')}}">{{__('navbar.areas')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.abogados')}}">{{__('navbar.abogados')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.casos')}}">{{__('navbar.casos')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('navbar.blog')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.contacto')}}">{{__('navbar.contacto')}}</a>
                </li>

            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ Str::upper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/en">EN</a>
                      <a class="dropdown-item" href="/es">ES</a>


                    </div>
                  </li>
                <li class="nav-item">
                    <a class="btn btn-default btn-cotizar botones fondo-boton mayor" href="#">{{__('navbar.cotizar')}}</a>
                </li>
            </ul>

        </div>
        </nav>
</div>
</header>
