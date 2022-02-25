<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

<body style="height: 100vh">

    <div id="app">
        <router-view></router-view>
    </div>
    <script src="{{ mix('/js/app.js')}}"></script>
    </body>

</html>
