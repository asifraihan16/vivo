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

                <section class="section hero works-list padding-bottom-none padding-top-none is-clearfix">
                    <div>
                        <div class="works isotope masonry image-hover effect-10 mfp-lightbox-gallery margin-bottom-none">
                            <div class="columns is-variable is-gapless is-multiline">
                                @for ($i = 1; $i <= 8; $i++)
                                    <div class="column is-3 branding " data-aos="fade">
                                        <div class="work-item">
                                            <figure>
                                                <?php $var = 'img' . $i; ?>
                                                <a href="{{ Storage::url($exhibitions[0]->$var) }}"
                                                    class="mfp-lightbox mfp-image" title="">
                                                    <img alt="Exibition Image" loading="lazy"
                                                        src="{{ Storage::url($exhibitions[0]->$var) }}">
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
                                @endfor
                            </div>
                            <!-- .columns -->
                        </div>
                        <!-- .works -->
                    </div>
                </section>

                <section class="section hero-2 works-list is-clearfix">
                    <div class="container">
                        @foreach ($mobile_series as $key => $series)
                            <h1 class="heading-title style-1">{{ $series->name }}</h1>

                            <div class="works isotope masonry image-hover effect-8 grid-container">
                                <div class="masonry-filters">
                                    <ul>
                                        <li data-filter="*" class="active">show all</li>
                                        @foreach ($series->mobile_series_versions as $key => $version)
                                            <li data-filter="{{ '.version-' . $version->id }}">{{ $version->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="_grid columns is-variable is-3 is-multiline">
                                    @foreach ($series->series_gallery_photos as $key => $photo)
                                        <a href="{{ url('image_description/' . $photo->id) }}"
                                            class="_grid-item column is-4 {{ 'version-' . $photo->mobile_series_versions_id }}">
                                            <div class="work-item">
                                                <figure>
                                                    <img alt="Exibition Image" loading="lazy"
                                                        src="{{ $photo->img_thumbnail ? Storage::url($photo->img_thumbnail) : Storage::url($photo->img) }}">
                                                </figure>
                                            </div>
                                            <!-- .work-item -->
                                        </a>
                                    @endforeach
                                </div>

                                <div style="text-align:center;"><a href="" class="button is-danger is-radiusless">View
                                        All</a></div>
                            </div>
                        @endforeach
                    </div>
                </section>
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
