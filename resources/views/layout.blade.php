<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel + Bootstrap 5</title>

    <!-- Le css Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body >
<div class="container">
    @yield('content')
</div>

<!-- Le javascript Bootstrap -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>