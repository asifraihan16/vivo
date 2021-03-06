<!DOCTYPE html>
<html lang="en" class="no-js no-svg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jozoor">
    <meta name="description" content="VIVO Bangladesh">
    <meta name="keywords" content="creative, niche, responsive, html5, css3, multipurpose, all in one, html, template">
    <title>Homepage | VIVO Bangladesh</title>
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/vendor.min.css?v=1557279752872') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/styles.min.css?v=1557279752872') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/custom.css?v=1557279752872') }}">

    <link href="https://fonts.googleapis.com/css?family=AvenirNext:300,400,500,600&v=1557279457010" rel="stylesheet">
    <x-embed-styles />
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
        href="{{ URL::asset('public/frontend/assets/images/favicons/vivo_favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ URL::asset('public/frontend/assets/images/favicons/vivo_favicon.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('public/frontend/assets/images/favicons/favicon.ico') }}">
</head>

<body
    class="active-pageloader corporate header-sticky hide-on-scroll header-menu-with-icons header-transparent footer-widgets footer-background dark-color widgets-6 submenu-show-arrow-right menu-is-capitalized submenu-is-capitalized logo-text-is-capitalized page-index">
    <div class="pageloader is-active"></div>
    <div id="site-wrap" class="site">
        <div id="header-wrap" class="is-clearfix">
            <header id="header" class="site-header">
                <div id="header-inner" class="site-header-inner container">
                    <div class="level">
                        <div class="level-left">
                            <div id="header-logo" class="site-logo ">
                                <div id="logo-inner" class="site-logo-inner">
                                    <a href="{{ url('/') }}">
                                        <span class="logo-text">VIVO</span>
                                        <!-- <img alt="VIVO Logo" src="{{ URL::asset('public/admin/assets/images/vivo_logo.png') }}"> -->
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
                                        <li class="mega-menu niche-templates active">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('frontend.photographer') }}">Photographer</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/exibition') }}">Exhibition</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/blogs') }}">Blogs</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/campaign') }}">Campaign</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- #site-navigation -->
                            </div>

                            <a href="{{ url('user/login') }}" class="button is-white">Signin/Register</a>
                            <!-- .header-menu-icons -->
                            <div class="modal search-form-overlay">
                                <div class="modal-background"></div>
                                <div class="modal-content">
                                    <form class="widget-form">
                                        <div class="field">
                                            <div class="control is-expanded">
                                                <input class="input" type="text" placeholder="Search...">
                                                <button type="submit" class="button">
                                                    <span class="icon">
                                                        <i class="icon-magnifier"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <button class="modal-close is-large" aria-label="close"></button>
                            </div>
                            <!-- .modal.search-form-overlay -->
                            <div id="quickviewInfo" class="quickview">
                                <div class="quickview-header">
                                    <p class="title"></p>
                                    <span class="delete" data-dismiss="quickview"></span>
                                </div>
                                <div class="quickview-body">
                                    <div class="quickview-block">
                                        <div class="footer">
                                            <div class="columns is-variable is-multiline">
                                                <div class="column is-12">
                                                    <div class="widget widget-html">
                                                        <div class="textwidget">
                                                            <div id="footer-logo-menu" class="site-logo ">
                                                                <a href="./index.html">
                                                                    <span class="logo-text">Company</span>
                                                                </a>
                                                            </div>
                                                            <!-- #footer-logo -->
                                                            <br>
                                                            <p>The main component of a healthy environment for self
                                                                esteem is that it needs be nurturing. It should provide
                                                                unconditional warmth.</p>
                                                            <div class="footer-social-links ">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" target="_blank">
                                                                            <span class="icon">
                                                                                <i class="fab fa-facebook-f"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank">
                                                                            <span class="icon">
                                                                                <i class="fab fa-twitter"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank">
                                                                            <span class="icon">
                                                                                <i class="fab fa-instagram"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" target="_blank">
                                                                            <span class="icon">
                                                                                <i class="fab fa-pinterest-p"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- .textwidget -->
                                                    </div>
                                                </div>
                                                <!-- .column -->
                                                <div class="column is-12">
                                                    <div class="widget widget-list">
                                                        <h3 class="widget-title ">recent news</h3>
                                                        <div class="box">
                                                            <article class="media">
                                                                <h2 class="display-none">article</h2>
                                                                <div class="media-left">
                                                                    <figure class="image">
                                                                        <a href="./blog/single.html">
                                                                            <img alt="VIVO Bangladesh"
                                                                                src="assets/images/blog/1-1.png"> </a>
                                                                    </figure>
                                                                </div>
                                                                <div class="media-content">
                                                                    <div class="content">
                                                                        <a href="./blog/single.html">Control Your Own
                                                                            Level of Motivation</a>
                                                                        <p>April 10, 2018</p>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="box">
                                                            <article class="media">
                                                                <h2 class="display-none">article</h2>
                                                                <div class="media-left">
                                                                    <figure class="image">
                                                                        <a href="./blog/single.html">
                                                                            <img alt="VIVO Bangladesh"
                                                                                src="assets/images/blog/1-2.png"> </a>
                                                                    </figure>
                                                                </div>
                                                                <div class="media-content">
                                                                    <div class="content">
                                                                        <a href="./blog/single.html">Control Your Own
                                                                            Level of Motivation</a>
                                                                        <p>April 14, 2018</p>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .column -->
                                                <div class="column is-12">
                                                    <div class="widget widget-form">
                                                        <h3 class="widget-title ">subscribe</h3>
                                                        <p>The main component of a healthy environment for self esteem
                                                            is that.</p>
                                                        <br>
                                                        <form>
                                                            <div class="field">
                                                                <div class="control is-expanded">
                                                                    <input class="input" type="text"
                                                                        placeholder="your@email.com">
                                                                    <button type="submit" class="button is-radiusless">
                                                                        <span class="icon">
                                                                            <i class="icon-envelope"></i>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- .column -->
                                            </div>
                                            <!-- .columns -->
                                        </div>
                                        <!-- footer -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .level-right -->
                    </div>
                    <!-- .level -->
                </div>
                <!-- #header-inner -->
            </header>
            <!-- #header -->
        </div>
