<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}"></script>

        <!-- Fonts -->
        <script>
            window.Laravel = {};
            window.Laravel.csrfToken = "alroganaornvoa";
        </script>
    </head>
    <body>
        @yield('content')
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>

