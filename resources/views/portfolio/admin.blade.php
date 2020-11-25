<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 追加コード -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>My Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #421C26;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div id="app">
            <portfolio-header></portfolio-header>
            <editor-content></editor-content>
        </div>
        <script src=" {{ mix('js/app.js') }} "></script>
    </body>
</html>
