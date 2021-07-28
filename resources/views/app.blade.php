<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css')}}">
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
        <link rel="preload" as="style" href="{{ asset('assets/mobirise/css/mbr-additional.css')}}"><link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">




    </head>

    <!-- Scripts -->

<body class="font-sans antialiased">
<section class="menu menu1 cid-sBFRh50pCl" once="menu" id="menu1-0">
    @include('pre-elements.nav')
</section>
<section class="header5 cid-sBFRkW1FlF mbr-fullscreen" id="header5-1">
    @yield('header')
</section>
<section class="gallery3 cid-sBFRuLV4zk" id="gallery3-3">
    @yield('content')
</section>
<section class="footer1 cid-sBFRzYFk5C" once="footers" id="footer1-4">
    @yield('footer')
</section>
</body>
</html>
