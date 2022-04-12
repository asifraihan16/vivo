@extends('frontend.layouts.app')

@section('title', "{$series->name} Photos")

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

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">

                <section class="section works-list is-clearfix">
                    <div class="container">
                        <h3 class="heading-title style-1">{{ $series->name }}</h3>
                        <div class="works isotope masonry image-hover effect-8 grid-container">
                            <div class="masonry-filters">
                                <ul>
                                    <li>
                                        <a href="{{ route('frontend.photos-by-series', [
                                        'series_id'=> $series->id,
                                        'series'=> Str::slug($series->name),
                                        'page'=> request()->page
                                        ]) }}"
                                        class="{{ !request()->series_version ? 'active' : '' }}">show all</a>
                                    </li>
                                    @foreach ($versions as $version)
                                    <li>
                                        <a href="{{ route('frontend.photos-by-series', [
                                            'series_id'=> $series->id,
                                            'series'=> Str::slug($series->name),
                                            'series_version'=> $version->id,
                                            'page'=> request()->page
                                            ]) }}" class="{{ request()->series_version && request()->series_version == $version->id ? 'active' : '' }}">{{  $version->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="_grid columns is-variable is-1 is-multiline">
                                @foreach ($photos as $photo)
                                    <a href="{{ url('image_description/' . $photo->id) }}"
                                        class="_grid-item column is-4 branding">
                                        <div class="work-item">
                                            <figure>
                                                <img alt="Exibition Image" class="lazy"
                                                    src="{{ $photo->img_thumbnail ? Storage::url($photo->img_thumbnail) : Storage::url($photo->img) }}">
                                            </figure>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        {{ $photos->withQueryString()->links('vendor.pagination.default') }}
                    </div>
                </section>


            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            /* $('.grid-container').each(function(i, gridContainer) {
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
            }); */

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
            color: #4768FF !important;
        }

        .masonry-filters ul li a {
            color: #232323;
        }

        .masonry-filters ul li a:hover,
        .masonry-filters ul li a.active {
            color: #4768FF !important;
        }

    </style>
@endsection
