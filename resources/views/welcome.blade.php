<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AppCliente</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/6db84a70ad.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #3B3DCC;
                color: #FFFF;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #FFFFFF;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .icons
            {
                bottom: 5px;
                align-items: baseline;
                display: flex;
                justify-content: end;
                position: absolute;
            }

            .icons a
            {
                margin:0 5px;
            }

            .btn-adicionar
            {
                color: #FFF;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    AppCliente
                </div>
                @if (Route::has('login'))
                    <div class="links">
                        @auth
                            <a href="{{ url('cliente') }}">Inicio</a>
                        @else
                            <a href="{{ route('login') }}">Entrar</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Registrar</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <div class="align-bottom icons">
                <a href="https://www.linkedin.com/in/ronnievinnicius/"><span style="font-size:48px; color: #FFFF"><i class="fab fa-linkedin"></span></i></a>
                <a href="https://github.com/ronniepereira"><span style="font-size:48px; color: #FFFF"><i class="fab fa-github"></i></span></a>
            </div>
        </div>
          
    </body>
</html>
