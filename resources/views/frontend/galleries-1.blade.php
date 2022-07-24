@extends('frontend.layouts.app')

@section('title', 'Photographer')

@section('content')
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('frontend/assets/images/page-header/1.jpg') }}) no-repeat top center; background-size: cover;}">
                    <div class="hero-body">
                        <div class="container">
                            {{-- <h1>Photographer</h1> --}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">

                <!-- Vivographer section Start -->
                <section class="section {{-- counters --}} works-list is-clearfix {{-- has-background-primary-light --}}">
                    <div class="container">
                        <h1 class="heading-title style-1" style="margin-bottom: 55px !important;">Photographer</h1>
                        <br>
                        <div class="team style-2">
                            <div class="columns is-variable is-4 is-multiline">
                                @foreach ($photographers as $photographer)
                                    <div class="column is-4">
                                        <div class="team-member">
                                            <figure class="team-member-img">
                                                <a href="../pages/team.html">
                                                    <img alt="Photographer Image"
                                                        src="{{ $photographer->img ? Storage::url($photographer->img) : asset('frontend/assets/images/no-image-profile.jpg') }}" />
                                                </a>
                                            </figure>
                                            <div class="team-member-meta">
                                                <h3>
                                                    <a href="#">{{ $photographer->name }}</a>
                                                </h3>
                                                <h5>
                                                    <a href="#">Photographer</a>
                                                </h5>
                                                {{-- <ul class="team-social-links">
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
                                                </ul> --}}
                                            </div>
                                        </div>
                                        <!-- .team-member -->
                                    </div>
                                @endforeach
                            </div>
                            {{ $photographers->withQueryString()->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </section> <!-- Photographer section End -->


                <!-- Vivographer section Start -->
                <section class="section {{-- counters --}} works-list is-clearfix has-background-primary-light">
                    <div class="container">
                        <h1 class="heading-title style-1" style="margin-bottom: 55px !important; text-transform: lowercase !important;">vivographer</h1>
                        <br>
                        <div class="team style-2">
                            <div class="columns is-variable is-4 is-multiline">
                                @foreach ($vivographers as $vivographer)
                                    <div class="column is-4">
                                        <div class="team-member">
                                            <figure class="team-member-img">
                                                <a href="../pages/team.html">
                                                    <img alt="vivographer image"
                                                        src="{{ $photographer->img ? Storage::url($photographer->img) : asset('frontend/assets/images/no-image-profile.jpg') }}">
                                                </a>
                                            </figure>
                                            <div class="team-member-meta">
                                                <h3>
                                                    <a href="#">{{ $vivographer->name }}</a>
                                                </h3>
                                                <h5>
                                                    <a href="#">vivographer</a>
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- .team-member -->
                                    </div>
                                @endforeach
                            </div>
                            {{ $vivographers->withQueryString()->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </section> <!-- Vivographer section End -->

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
                        // layoutMode: 'fitRows',
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
        /* .section {
                                padding: 1rem 1.5rem;
                            } */
        .iso-img-cls {
            /* width: 600px; */
            /* height: 400px; */
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

        ._grid-item {}

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
            color: #4768FF;
        }
    </style>
@endsection
