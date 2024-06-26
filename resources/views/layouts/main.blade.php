<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title') </title>

        <!-- / Link do bootstrap do projeto -->
        <link href={{URL::asset("boot/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
        <link href={{URL::asset("boot/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
        <link href={{URL::asset("boot/boxicons/css/boxicons.min.css")}} rel="stylesheet">
   
        <!-- link do css do projeto -->
        <link href={{{URL::asset("css/main.css")}}} rel="stylesheet">
        <link href={{{URL::asset("css/sobre.css")}}} rel="stylesheet">
    </head>

    <body>
            <!-- header -->
                <header>
                    <nav class="barra-navegacao">
                        <a href="#">Home</a>
                        <a href="#">contacto</a>
                        <a href="#">Sobre</a>
                        <a href="#">ghgghgh</a>
                        <button class="btn-login">Login</button>
                        <button class="btn-cadastro">cadastro</button>
                    </nav>
                </header>
            <!-- footer -->
                @yield('conteudo')

                @include('layouts.footer')

    </body>
</html>