<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/styles.css">

        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    </head>
    <body>

        <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collpse navbar-collapse" id="navbar">
                        <a href="/" class="navbar-brand">
                            <img src="/img/icone.png" alt="Icone">
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Criar Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Cadastrar</a>
                            </li>
                    </div>

                </nav>

            
        </header>

        @yield('content')
        <footer>
            <P>Eventos &copy; 2021 </p>
        </footer>

    </body>
</html>
