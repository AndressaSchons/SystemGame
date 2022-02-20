<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
        <title>Jogos</title>

        <style>
            #app{
                font-family: 'Roboto Mono', monospace;
                background-color: #000080;
            }

        </style>
    </head>
    <body>
        <div id="app">

            <router-view>
            </router-view>

        </div>
        <script src="{{ mix('/js/app.js')}}"></script>
    </body>
</html>
