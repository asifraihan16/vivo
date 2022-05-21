<!DOCTYPE html>
<html lang="en" class="no-js no-svg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="vivo">
    <meta name="description" content="VIVO Moments">
    <meta name="keywords" content="vivo, vivo bangladesh, vivo moments, photography">
    <title>@yield('title', __('Service Unavailable')) | vivo Moments</title>

    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/vendor.min.css?v=1557279752872') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/styles.min.css?v=1557279752872') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/custom.css?v=1557279752872') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&v=1557279457010" rel="stylesheet">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Joo Template">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ URL::asset('frontend/assets/images/favicons/vivo_favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ URL::asset('frontend/assets/images/favicons/vivo_favicon.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('frontend/assets/images/favicons/vivo_favicon.ico') }}">
</head>

<body
    class="active-pageloader corporate header-sticky hide-on-scroll footer-widgets header-menu-with-icons header-background dark-color footer-widgets footer-background dark-color widgets-6 submenu-show-arrow-right menu-is-capitalized submenu-is-capitalized logo-text-is-capitalized page-header-menu-with-icons page-footer-default">
    <div class="pageloader is-active"></div>
    <div id="site-wrap" class="site">

        <!-- #header-wrap -->
        <div id="header-bottom-wrap" class="is-clearfix">
            <div id="header-bottom" class="site-header-bottom">
                <div id="header-bottom-inner" class="site-header-bottom-inner "> </div>
                <!-- #header-bottom-inner -->
            </div>
            <!-- #header-bottom -->
        </div>
        <!-- #header-bottom-wrap -->
        <!-- import content layouts and modules -->
        <div id="content-main-wrap" class="is-clearfix">
            <div id="content-area" class="site-content-area">
                <div id="content-area-inner" class="site-content-area-inner">
                    <section class="section works-list is-clearfix">
                        <div class="container">
                            <br>
                            <br>
                            <div class="columns is-variable is-multiline">
                                <div class="column is-half is-offset-one-quarter has-text-centered">
                                    <div class="content-404 content">
                                        <h1>503!</h1>
                                        <h2>{{ __('Service Unavailable') }}</h2>
                                        <p>{{ __($exception->getMessage() ?: 'Service Unavailable') }} </p>
                                        {{-- <p>
                                            <span class="icon">
                                                <i class="icon-cup"></i>
                                            </span>
                                        </p>
                                        <a class="button" href="../index.html">
                                            <span class="icon">
                                                <i class="icon-home"></i>
                                            </span>
                                            <span>Homepage</span>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>
                    </section>
                </div>
                <!-- #content-area-inner -->
            </div>
            <!-- #content-area -->
        </div>
        <!-- #content-main-wrap -->
        <div id="footer-top-wrap" class="is-clearfix">
            <div id="footer-top" class="site-footer-top">
                <div id="footer-top-inner" class="site-footer-top-inner "> </div>
                <!-- #footer-top-inner -->
            </div>
            <!-- #footer-top -->
        </div>
        <!-- #footer-top-wrap -->

        <!-- #footer-wrap -->
        {{-- <div id="footer-bottom-wrap" class="is-clearfix" style="">
            <div id="footer-bottom" class="site-footer-bottom">
                <div id="footer-bottom-inner" class="site-footer-bottom-inner ">
                    <section class="section footer-bottom-content"
                        style="text-align: center;background-color: #415FFF;padding : 30px">
                        <div class="container">
                            <span class="footer-copyright">
                                © 2022 Haicheng Mobile Company (BD) Ltd. All rights reserved.
                            </span>
                        </div>
                    </section>
                    <!-- .footer-bottom-content -->
                </div>
                <!-- #footer-bottom-inner -->
            </div>
            <!-- #footer-bottom -->
        </div> --}}
        <!-- #footer-bottom-wrap -->

    </div>
    <!-- #site-wrap -->
    <script src="{{ URL::asset('frontend/assets/js/vendor.min.js?v=1557279752872') }}"></script>
    <script src="{{ URL::asset('frontend/assets/js/scripts.min.js?v=1557279752872') }}"></script>
    <script src="{{ URL::asset('frontend/assets/js/custom.js?v=1557279752872') }}"></script>
</body>

</html>
