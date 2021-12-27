<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Luan Felipe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @yield("styles")
        <link rel="stylesheet" href="{{ url(mix("site/css/style.css")) }}">
        <link rel="stylesheet" href="{{ url(mix("site/css/fontawesome.css")) }}">
    </head>
    <body>
        <header id='header'>
            <nav class="HeaderFlex">
                <h2><a href="{{ route("home") }}">Luan Felipe</a></h2>
                <button aria-label="Abrir Menu" aria-controls="menu" aria-expanded="false" class="OpenMenu" id="OpenMenu">
                    <i class="fas fa-bars"></i>
                </button>
                <nav class="HeaderAnchors">
                    <ul class='Anchors'>
                        <li><a href="#WhoAmI">Quem sou eu?</a></li>
                        <li><a href="#Projects">Projetos</a></li>
                        <li><a href="#Services">Serviços</a></li>
                        <li><a href="#Skills">Habilidades</a></li>
                        <li><a href="#Contact">Contato</a></li>
                    </ul>
                </nav>
            </nav>
        </header>
        <div class="Global">
            @yield('content')
        </div>
        <script src="{{ url(mix("site/js/script.js")) }}"></script>
        @yield('scripts')
    </body>
</html>
