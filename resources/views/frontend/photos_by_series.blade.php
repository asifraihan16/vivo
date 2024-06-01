@extends('frontend.layouts.app')

@section('title', 'Campaign')

@section('content')
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/banner-images/Gallery.webp') }}) no-repeat top center; background-size: cover;}">
                    <div class="hero-body">
                        <div class="container">
                            {{-- <h1>{{ $series->name }}</h1> --}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">

                <section class="section works-list is-clearfix">
                    <div class="container">
                        {{-- <h3 class="heading-title style-1">{{ $series->name }}</h3> --}}
                        <div class="works isotope masonry image-hover effect-8 grid-container">
                            {{-- <div class="masonry-filters">
                                <ul>
                                    <li data-filter="*" class="active">show all</li>
                                    @foreach ($versions as $version)
                                    <li data-filter="{{ '.version-' . $version->id }}">{{ $version->name }}</li>
                                    @endforeach
                                </ul>
                            </div> --}}
                            <div class="_grid columns is-variable is-1 is-multiline">
                                @foreach ($photos as $photo)
                                    <div
                                        class="_grid-item aos-init column is-4">
                                        <x-image-tile :photo="$photo" />
                                        
                                        {{-- <div class="work-item">
                                            <div class="photo-like-area" id="photo-like-area-{{ $photo->id }}">
                                                @php
                                                    $campaign_of_photo = $ongoing_campaigns->firstWhere('id', $photo->campaign_id)
                                                @endphp
                                                @if($campaign_of_photo && $campaign_of_photo->campaign_status == 2 && auth()->user())
                                                    <a href="javascript:;" class="{{ in_array($photo->id, $liked_photos_id) ? 'liked' : 'unliked' }}"
                                                        onclick="likeGalleryPhoto({{ $photo->id }})" id="photo-like-btn-{{ $photo->id }}">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                @else
                                                    {{ $photo->likes_count }}
                                                @endif
                                            </div>
                                            <figure>
                                                <a href="{{ url('image_description/' . $photo->id) }}" class="">
                                                    <img alt="Exibition Image"
                                                        src="{{ $photo->img_thumbnail ? Storage::url($photo->img_thumbnail) : Storage::url($photo->img) }}">
                                                </a>
                                            </figure>
                                        </div> --}}

                                    </div>
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
