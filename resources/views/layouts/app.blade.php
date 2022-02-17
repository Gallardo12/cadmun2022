<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CADMUN 2022 - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('partials.style')

</head>

<body>
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    @include('partials.preloader')

    @include('partials.javascript')

</body>
