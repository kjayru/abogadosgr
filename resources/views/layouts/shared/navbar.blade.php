<header>
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light  bg-transparent">
        <a class="navbar-brand" href="#"><img src="/images/logoHeader.png" width="70"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto bar1">
                <li class="nav-item">
                    <a class="nav-link" href="/{{ str_replace('_', '-', app()->getLocale()) }}">{{__('navbar.inicio')}} </a>
                </li>
                <li class="nav-item ">
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
                    <a class="nav-link" href="https://medium.com/@gcrabogados" target="_blank">{{__('navbar.blog')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.contacto')}}">{{__('navbar.contacto')}}</a>
                </li>

            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      @if(Str::upper(app()->getLocale()) =="EN")
                      <img src="/images/BanderaUSA.png" width="40">
                      @else
                      <img src="/images/BanderaMexico.png" width="40">
                      @endif
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/en"><img src="/images/BanderaUSA.png" width="40"> </a>
                      <a class="dropdown-item" href="/es"><img src="/images/BanderaMexico.png" width="40"> </a>


                    </div>
                  </li>
                <li class="nav-item">
                    <a class="btn btn-default btn-cotizar botones fondo-boton mayor" href="/{{ str_replace('_', '-', app()->getLocale()) }}/{{__('message.contacto')}}">{{__('navbar.cotizar')}}</a>
                </li>
            </ul>

        </div>
        </nav>
</div>
</header>
