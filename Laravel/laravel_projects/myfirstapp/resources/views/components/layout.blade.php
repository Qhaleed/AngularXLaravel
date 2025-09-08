<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->

    </head>
    <body>

        <nav>
            <a href="/">Home</a>
            <a href="contact">contact</a>
            <a href="about">about</a>
            <a href="about">Meet the team</a>
        </nav>

        <!-- // same with < ?php?> + echo -->
        {{$slot}}

    </body>

    </html>
