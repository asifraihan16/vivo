@extends('frontend.layouts.app')

@section('title', 'Exibition')

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/page-header/6.jpg') }}) no-repeat top center; background-size: cover;}">
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

                <section class="section works-list is-clearfix padding-3rem">
                    <div class="container width-80-percent">
                        <div class="works isotope image-hover effect-8">
                            <div class="columns is-variable is-1 is-multiline" style="">
                                <div class="column is-3 branding aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img1) }}" class="mfp-lightbox mfp-image"
                                                title="">
                                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                    src="{{ Storage::url($moments[0]->img1) }}">
                                                <figcaption>
                                                    <ul class="social">
                                                        <li>
                                                            <span class="icon">
                                                                <i class="icon-magnifier"></i>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>
                                <div class="column is-6 prototype aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img2) }}" class="mfp-lightbox mfp-image"
                                                title="">
                                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                    src="{{ Storage::url($moments[0]->img2) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>
                                <div class="column is-3 branding aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img3) }}" class="mfp-lightbox mfp-image"
                                                title="">
                                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                    src="{{ Storage::url($moments[0]->img3) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>
                                <div class="column is-6 branding aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img4) }}" class="mfp-lightbox mfp-image"
                                                title="">
                                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                    src="{{ Storage::url($moments[0]->img4) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>
                                <div class="column is-3 branding aos-init" data-aos="fade-up" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img5) }}" class="mfp-lightbox mfp-image"
                                                title="">
                                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                    src="{{ Storage::url($moments[0]->img5) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>
                                <div class="column is-3 branding aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img6) }}"
                                                class="mfp-lightbox mfp-image" title="">
                                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                    src="{{ Storage::url($moments[0]->img6) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>
                                <div class="column is-6 branding aos-init" style="">
                                    <div class="work-item">
                                        <figure>
                                            <a href="{{ Storage::url($moments[0]->img7) }}"
                                                class="mfp-lightbox mfp-image" title="">
                                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                    src="{{ Storage::url($moments[0]->img7) }}">
                                                <figcaption>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- .work-item -->
                                </div>

                            </div>
                            <!-- .columns -->
                        </div>
                        <!-- .works -->
                    </div>
                </section>

                @foreach ($mobile_series as $series)
                    <section
                        class="section works-list {{ $loop->even ? 'has-background-primary-light' : '' }} is-clearfix">
                        <div class="container">
                            <h1 class="heading-title style-1">{{ $series->name }}</h1>

                            <div class="works isotope masonry image-hover effect-8 grid-container mfp-lightbox-gallery">
                                <div class="masonry-filters">
                                    <ul>
                                        <li data-filter="*" class="active">show all</li>
                                        @foreach ($series->mobile_series_versions as $version)
                                            <li data-filter="{{ '.version-' . $version->id }}">{{ $version->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="_grid columns is-variable is-1 is-multiline">
                                    @foreach ($series->series_gallery_photos as $photo)
                                        <div
                                            class="_grid-item aos-init column is-4 {{ 'version-' . $photo->mobile_series_versions_id }}">
                                            <div class="work-item">
                                                <figure>
                                                    <a href="{{ url('image_description/' . $photo->id) }}" class="mfp-lightbox mfp-image">
                                                        <img alt="Exibition Image" style="min-width: 375px;"
                                                            src="{{ $photo->img_thumbnail ? Storage::url($photo->img_thumbnail) : Storage::url($photo->img) }}">
                                                        {{-- <img alt="Exibition Image" class="lazy iso-img-cls"
                                                            data-src="{{ $photo->img_thumbnail ? Storage::url($photo->img_thumbnail) : Storage::url($photo->img) }}"> --}}
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div style="text-align:center;">
                                    <a href="{{ route('frontend.photos-by-series', ['series_id' => $series->id, 'series' => Str::slug($series->name)]) }}"
                                        class="button is-danger is-radiusless">View All</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @endforeach
            </div>
        </div>
    </div>
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
