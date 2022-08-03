<!DOCTYPE html>
<html lang="en" class="no-js no-svg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="vivo">
    <meta name="description" content="VIVO Moments">
    <meta name="keywords" content="vivo, vivo bangladesh, vivo moments, photography">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title', 'Home') | vivo Moments</title>

    <meta property="og:title" content="@yield('title', 'Home') | VIVO Moments">
    <meta property="og:description" content="VIVO Moments">
    <meta property="og:site_name" content="VIVO Moments">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">

    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/vendor.min.css?v=1557279752872') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/styles.min.css?v=1557279752872') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/custom.css?v=1557279752872') }}">
    {{-- <link href="https://fonts.googleapis.com/css?family=AvenirNext:300,400,500,600&v=1557279457010" rel="stylesheet"> --}}
    <!-- cdn icon fonts
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css?v=1557279457010" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css?v=1557279457010">
      <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css?v=1557279457010" rel="stylesheet">
    -->
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/images/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/images/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicons/apple-touch-icon-180x180.png"> -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Joo Template">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ URL::asset('frontend/assets/images/favicons/vivo_favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ URL::asset('frontend/assets/images/favicons/vivo_favicon.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('frontend/assets/images/favicons/vivo_favicon.ico') }}">

    @yield('styles')

    <style>@font-face{font-family: 'AvenirNext';src: url('//asia-exstatic.vivo.com/static/font/AvenirNext/AvenirNextRegular_17c1dc8.eot');src: local('AvenirNext'),url('//asia-exstatic.vivo.com/static/font/AvenirNext/AvenirNextRegular_6b6dbe3.woff2') format('woff2'),url('//asia-exstatic.vivo.com/static/font/AvenirNext/AvenirNextRegular_2d26b87.woff') format('woff'),url('//asia-exstatic.vivo.com/static/font/AvenirNext/AvenirNextRegular_c99fe90.ttf') format('truetype'),url('//asia-exstatic.vivo.com/static/font/AvenirNext/AvenirNextRegular_e7a17f8.svg') format('svg');font-weight: normal;font-style: normal;}@font-face{font-family: 'WebRupee';src: url('//asia-exstatic.vivo.com/static/font/currency/WebRupee.V2.0_b9b282e.eot');src: local('WebRupee'),url('//asia-exstatic.vivo.com/static/font/currency/WebRupee.V2.0_5dc4203.woff2') format('woff2'),url('//asia-exstatic.vivo.com/static/font/currency/WebRupee.V2.0_5bb128f.woff') format('woff'),url('//asia-exstatic.vivo.com/static/font/currency/WebRupee.V2.0_388288f.ttf') format('truetype'),url('//asia-exstatic.vivo.com/static/font/currency/WebRupee.V2.0_77414ca.svg') format('svg');font-weight: normal;font-style: normal; }@font-face{font-family: 'languageFont';src: url('https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1609730127906/371caa7c0ca5f3aea9ccffcfb18c8ae5.eot') ,url('https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1609730136468/a0bfdc864e1f8f90a69560f897654c18.woff2') format('woff2'),url('https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1609730142503/61b5bca8a5d6ae79c0b367df348fa0aa.woff') format('woff'),url('https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1609730149777/f34df90ff45067529279457a5496b43f.ttf') format('truetype'),url('https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1609730156554/2d8a1d3c13413c470b1dd8463dc3b79e.svg') format('svg');font-weight: normal;font-style: normal;}.public *,.vep-public *,#onetrust-consent-sdk *,#vcm-v-consent-sdk *{font-family:"languageFont","AvenirNext","Microsoft YaHei",微软雅黑,"MicrosoftJhengHei",华文细黑,STHeiti,MingLiu,sans-serif,"WebRupee";}</style>


</head>

{{-- <body class="active-pageloader header-sticky show-on-scroll header-menu-with-icons header-transparent footer-widgets footer-background dark-color widgets-6 submenu-show-arrow-right menu-is-capitalized submenu-is-capitalized logo-text-is-capitalized page-index"> --}}
<body class="active-pageloader header-sticky show-on-scroll footer-widgets footer-background dark-color
    widgets-8 submenu-show-arrow-right menu-is-capitalized submenu-is-capitalized logo-text-is-capitalized header-menu-with-icons page-index">
    <div class="pageloader is-active"></div>
    <div id="site-wrap" class="site">

        <div id="header-wrap" class="is-clearfix">
            {{-- Fix header nav dissappears on firefox --}}
            {{-- Changed on styles.min.css line no 7551: .site-header-top, header { /* position: relative; */ } --}}
            <header id="header" class="site-header">
                <div id="header-inner" class="site-header-inner container">
                    <div class="level">
                        <div class="level-left">
                            <div id="header-logo" class="site-logo ">
                                <div id="logo-inner" class="site-logo-inner">
                                    <a href="{{ url('/') }}">
                                        <!-- <span class="logo-text" style="text-transform: none;">vivo</span> -->
                                        <img alt="VIVO Logo" src="{{ asset('frontend/assets/images/logo/vivo_logo.png') }}">
                                    </a>
                                </div>
                                <!-- #logo-inner -->
                            </div>
                            <!-- #header-logo -->
                        </div>
                        <!-- .level-left -->
                        <div class="level-right">
                            <div id="nav-wrap">
                                <nav id="site-navigation" class="main-navigation right">
                                    <ul id="main-header-menu" class="menu">
                                        <li class="{{ isset($active_menu) && strtolower($active_menu) == 'home' ? 'active' : '' }}">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>

                                        <li class="{{ strtolower($active_menu) == 'gallery' ? 'active' : '' }}">
                                            <a href="{{ route('frontend.gallery') }}">Gallery</a>
                                        </li>

                                        <li class="{{ strtolower($active_menu) == 'videos' ? 'active' : '' }}">
                                            <a href="{{ route('frontend.videos') }}">Videos</a>
                                        </li>

                                        <li class="{{ strtolower($active_menu) == 'blogs' ? 'active' : '' }}">
                                            <a href="{{ url('/blogs') }}">Blogs</a>
                                        </li>

                                        <li class="{{ strtolower($active_menu) == 'campaign' ? 'active' : '' }}">
                                            <a href="{{ url('/campaign') }}">Campaign</a>
                                        </li>

                                        <li class="{{ strtolower($active_menu) == 'photographer' ? 'active' : '' }}">
                                            <a href="{{ route('frontend.photographer') }}">Photographers</a>
                                        </li>

                                        {{-- <li>
                                            <a href="{{ url('/contact') }}">Image Licensing</a>
                                        </li> --}}
                                    </ul>
                                </nav>
                                <!-- #site-navigation -->
                            </div>

                            @guest
                                <a href="{{ url('user/login') }}" class="button is-white">Upload</a>
                            @else
                                @if (auth()->user()->is_admin === 1 || auth()->user()->user_type === 1)
                                    <a href="{{ url('admin/dashboard') }}"
                                        class="button is-white">{{ auth()->user()->name }}</a>
                                @elseif(auth()->user()->user_type === 2)
                                    {{-- <a href="{{ url('user/dashboard') }}" class="button is-white">{{ auth()->user()->name }}</a> --}}
                                    <a href="{{ url('photographers/dashboard') }}" class="button is-white">{{ auth()->user()->name }}</a>
                                @else
                                    <a href="{{ url('user/dashboard') }}" class="button is-white">{{ auth()->user()->name }}</a>
                                @endif
                            @endguest

                        </div>
                        <!-- .level-right -->
                    </div>
                    <!-- .level -->
                </div>
                <!-- #header-inner -->
            </header>
            <!-- #header -->
        </div>

