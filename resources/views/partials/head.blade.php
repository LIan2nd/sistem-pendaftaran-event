<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} |
        @if (Request::is('/'))
            Home
        @endif
        @if (Request::is('events'))
            Events
        @endif
        @if (Request::is('histories'))
            History
        @endif
        @if (Request::is('registration'))
            Registration
        @endif
        @if (Request::is('categories'))
            Categories
        @endif
        @if (Request::is('login'))
            User Login
        @endif
        @if (Request::is('register'))
            User Register
        @endif
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user') }}/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('user') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/magnific-popup.css">
    {{-- Awesome Icon --}}
    <link rel="stylesheet" href="{{ asset('user') }}/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/fontawesome.min.css">
    {{-- -- --}}
    <link rel="stylesheet" href="{{ asset('user') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/responsive.css">
</head>
