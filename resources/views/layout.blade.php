<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <header>
            <ul>
                <li class="{{ Request::path() === 'contacto' ? 'active_link' : '' }}">
                    <a href="contacto">Contacto</a>
                </li>
                <li class="{{ Request::path() === 'mas' ? 'active_link' : '' }}">
                    <a href="mas">Más</a>
                </li>
                <li class="{{ Request::path() === 'articles' ? 'active_link' : '' }}">
                    <a href="articles">Articles</a>
                </li>
                <li class="{{ Request::is('articulos*') ? 'active_link' : '' }}">
                    <a href="articulos">Artículos</a>
                </li>
            </ul>
        </header>
    </head>
    <body>
        @yield ('contenido')
        @php
            if (Request::path() === 'articles') $contentTag='content';
            else $contentTag= '';
        @endphp
        @yield ('{{ $contentTag }}')
    </body>
</html>