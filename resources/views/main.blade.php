<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            {{
                ucwords(env('app_name'))._(" Location Virtual Community | Welcome")
            }}
        </title>
        @include('app.head.dist')
    </head>
    <body>
        @guest
            @include('app.content.welcome')
        @else
            @include('app.content.home')
        @endguest
    </body>
</html>
