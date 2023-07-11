<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} |
        @if (Request::is('/'))
            Home
        @elseif (Request::is('home'))
            Home
        @elseif (Request::is('our'))
            Siapa Kita?
        @elseif (Request::is('events'))
            Events
        @elseif (Request::is('registration/histories'))
            Histories
        @elseif (Request::is('categories'))
            Categories
        @elseif (Request::is('login'))
            User Login
        @elseif (Request::is('register'))
            User Register
        @elseif (Request::is('register/eo'))
            EO Register
        @elseif (Request::is('registered'))
            EO Register
        @else
            {{ $title }}
        @endif
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user') }}/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('user') }}/css/bootstrap.minc.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/elegant-icons.css" type="text/css">
    {{-- Awesome Icon --}}
    <link rel="stylesheet" href="{{ asset('user') }}/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/fontawesome.min.css">
    {{-- -- --}}
    <link rel="stylesheet" href="{{ asset('user') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('user') }}/css/style.css">
</head>
