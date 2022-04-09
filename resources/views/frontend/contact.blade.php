@extends('frontend.layouts.app')

@section('title', 'Contact')

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/page-header/5.jpg') }}) no-repeat top center; background-size: cover;}">
                    <div class="hero-body">
                        <div class="container">
                        </div>
                        <!-- .hero-body -->
                    </div>
                    <!-- .container -->
                </section>
                <!-- .page-title -->
            </div>
            <!-- #header-bottom-inner -->
        </div>
        <!-- #header-bottom -->
    </div>
    <!-- #header-bottom-wrap -->
    <!-- import content layouts and modules -->
    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <!-- import content layouts and modules -->
                <!-- start adding page content -->
                <!-- works section -->
                <section class="section  is-clearfix">
                    <div class="container">
                        <div class="columns is-centered">
                            <div class="column is-two-thirds has-text-centered">
                                <p class="heading-title-top has-text-centered">contact us</p>
                                <h1 class="heading-title style-3">How we can help</h1>
                                <p> The main component of a healthy environment for self esteem is that it needs be
                                    nurturing, main component of a healthy env for self esteem. The main component of a
                                    healthy environment for self esteem is that it needs be nurturing,
                                    main component of a healthy env for self esteem. </p>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="columns is-centered">
                            <div class="column is-three-quarters has-text-centered">
                                <div class="columns is-variable is-multiline is-4">
                                    <div class="column widget is-4 widget-links">
                                        <h3 class="widget-title has-text-primary margin-top-none">Chat Support</h3>
                                        <ul>
                                            <li>(Sat-Thu 9:00-18:00 excluding public holidays)</li>
                                        </ul>
                                    </div>
                                    <div class="column widget is-4 widget-links">
                                        <h3 class="widget-title has-text-primary">Phone</h3>
                                        <ul>
                                            <li>+8809610991079</li>
                                        </ul>
                                    </div>
                                    <div class="column widget is-4 widget-links">
                                        <h3 class="widget-title has-text-primary">Address</h3>
                                        <ul>
                                            <li>9th & 10th Floor, Tower-A, 144 - Police Plaza Concord,
                                                </br>Gulshan 1, Dhaka-1212</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                </section>
                <!-- .get-in-touch contact-page -->
                <!-- contact-form section -->
            </div>
            <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
    </div>
    <!-- #content-main-wrap -->
@endsection
