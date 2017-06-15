<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>{{config('app.name','Demo-App')}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>