@extends('frontend.layouts.app')

@section('title', 'Photographer')

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('frontend/assets/images/page-header/1.jpg') }}) no-repeat top center; background-size: cover;}">
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

                <section class="section works-list is-clearfix">
                    <div class="container">
                        <h1 class="heading-title style-1">X Series</h1>
                        <div class="works isotope masonry image-hover effect-8 grid-container">
                            <div class="masonry-filters">
                                <ul>
                                    <li data-filter=".branding, .prototype" class="active">show all</li>
                                    <li data-filter=".branding">X70 Pro 5G</li>
                                    <li data-filter=".prototype">X60 Pro</li>
                                </ul>
                            </div>
                            <div class="_grid columns is-variable is-3 is-multiline">
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/1.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 prototype">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/14.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/5.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/2.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/11.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/3.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/12.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 prototype">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/4.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 prototype">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/10.png') }}">
                                        </figure>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </section>

                <section class="section has-background-primary-light works-list is-clearfix">
                    <div class="container">
                        <h1 class="heading-title style-1">Y Series</h1>
                        <div class="works isotope masonry image-hover effect-8 grid-container">
                            <div class="masonry-filters">
                                <ul>
                                    <li data-filter=".branding-y, .prototype-y" class="active">show all</li>
                                    <li data-filter=".branding-y">Y21 T</li>
                                    <li data-filter=".prototype-y">Y15s</li>
                                    <li data-filter=".prototype-y">Y53s</li>
                                </ul>
                            </div>
                            <div class="_grid columns is-variable is-3 is-multiline">
                                <div class="_grid-item column is-4 branding-y">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/1.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 prototype-y">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/14.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding-y">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/5.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding-y">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/2.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding-y">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/11.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding-y">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/3.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding-y">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/12.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 prototype-y">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/4.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 prototype-y">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/10.png') }}">
                                        </figure>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </section>

                <section class="section works-list is-clearfix">
                    <div class="container">
                        <h1 class="heading-title style-1">V Series</h1>
                        <div class="works isotope masonry image-hover effect-8 grid-container">
                            <div class="masonry-filters">
                                <ul>
                                    <li data-filter="*" class="active">show all</li>
                                    <li data-filter=".branding">V23 e</li>
                                    <li data-filter=".prototype">V20 SE</li>
                                    <li data-filter=".prototype">V 23 5G</li>
                                </ul>
                            </div>
                            <div class="_grid columns is-variable is-3 is-multiline">
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/1.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 prototype">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/14.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/5.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/5.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/2.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/11.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/3.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 branding">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/12.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 prototype">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/4.png') }}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="_grid-item column is-4 prototype">
                                    <div class="work-item">
                                        <figure>
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('frontend/assets/images/portfolio/10.png') }}">
                                        </figure>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
    </div>
    <!-- #content-main-wrap -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            $('.grid-container').each(function(i, gridContainer) {
                var $gridContainer = $(gridContainer);
                // init isotope for container
                var $grid = $gridContainer.find('._grid').imagesLoaded(function() {
                    $grid.isotope({
                        itemSelector: '._grid-item',
                        layoutMode: 'fitRows'
                    })
                });
                // initi filters for container
                $gridContainer.find('.masonry-filters').on('click', 'li', function() {
                    var filterValue = $(this).attr('data-filter');
                    $grid.isotope({
                        filter: filterValue
                    });
                });
            });

            $('.masonry-filters').each(function(i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', 'li', function() {
                    $buttonGroup.find('.active').removeClass('active');
                    $(this).addClass('active');
                });
            });

        });
    </script>
@endsection


@section('styles')
    <style>
        .work-item figure img {
            width: 600px;
            height: 400px;
        }

        /* ---- grid ---- */
        .grid {
            /* background: #ddd; */
            /* max-width: 1200px; */
        }

        /* clear fix */
        .grid:after {
            /* content: '';
                display: block;
                clear: both; */
        }

        /* ---- .grid-item ---- */
        .grid-item {
            /* float: left; */
            /* width: 100px; */
            /* height: 100px; */
            /* background: #0d8; */
            /* border: 2px solid #333; */
            /* border-color: rgba(0, 0, 0, 0.7); */
        }


        .masonry-filters ul {
            text-align: center;
            font-family: Poppins, sans-serif;
            text-transform: capitalize;
            margin-bottom: 3.5rem;
            list-style: none;
        }

        .masonry-filters ul li {
            display: inline-block;
            letter-spacing: .5px;
            cursor: pointer;
            color: #232323;
            font-size: 15px;
            font-size: .9375rem;
            padding: 0 18px;
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
            font-weight: 500;
        }

        .masonry-filters ul li:hover,
        .masonry-filters ul li.active {
            color: #f30337;
        }

    </style>
@endsection
