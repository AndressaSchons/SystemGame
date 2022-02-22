<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Jogos</title>

    <style>
        body{
            background-color: #000080;
        }
        #app{
            font-family: 'Roboto Mono', monospace;

        }
    </style>

</head>
    <body style="height: 100vh">
        <header>
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/login">
                        <img src="https://prints.ultracoloringpages.com/97859f73d4df4c596681f3908a5fe585.png" width="28" height="28">
                    </a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>

                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item">
                            Home
                        </a>

                        <a class="navbar-item">
                            List
                        </a>

                        <a class="navbar-item">
                            Dashboard
                        </a>

                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <a class="button is-light">
                                    Log in
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        {{ $slot }}
        <script src="{{ mix('/js/app.js')}}"></script>
    </body>
</html>
