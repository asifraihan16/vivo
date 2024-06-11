@extends('frontend.layouts.app')

@section('title', 'Profile')

@section('content')
    @php
    // $running_campaing = $ongoing_campaigns->firstWhere('campaign_status', 2);
    // $cover_pic = $running_campaing ? Storage::url($running_campaing->img1) : asset('/frontend/assets/images/banner-images/Hor-1920x450px-Gallery-Header.webp');
    $cover_pic = asset('/frontend/assets/images/banner-images/Photographer.webp');
    @endphp

    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ $cover_pic }}) no-repeat top center; background-size: cover;}">
                    <div class="hero-body">
                        <div class="container">
                            {{-- <h1>Gallery</h1> --}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title has-text-centered">
                    <div class="hero-body">
                        <div class="container">
                            <p class="image">
                                <img alt="Profile Image"
                                    src="{{ $user->img ? Storage::url($user->img) : asset('frontend/assets/images/no-image-profile.jpg') }}"
                                    style="border-radius: 50%;padding: 5px;background: white;display: inline-block;margin-bottom: 12px;width:180px; height:180px;">
                            </p>
                            <h3 class="subtitle" style="font-size: 24px;">{{ $user->name }}</h3>
                            <h3 class="subtitle" style="text-transform: lowercase;">
                                {{ request()->has('photographer') ? 'Photographer' : 'vivographer' }}</h3>
                            <ul class="header-menu-icons social">
                                <li>Share on: </li>
                                <li>
                                    <a href="#" target="_blank" class="sharer" data-sharer="facebook"
                                        data-url="{{ url()->full() }}">
                                        <span class="icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" class="sharer" data-sharer="twitter"
                                        data-title="{{ 'vivo Moments profile of ' . $user->name }}"
                                        data-url="{{ url()->full() }}">
                                        <span class="icon">
                                            <i class="fab fa-twitter"></i>
                                        </span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="#" target="_blank">
                                        <span class="icon">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="#" target="_blank" class="sharer" data-sharer="pinterest"
                                        data-url="{{ url()->full() }}">
                                        <span class="icon">
                                            <i class="fab fa-pinterest-p"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    {{-- <input type="text" name="profile_url_inp" id="profile_url_inp" value="{{ url()->full() }}"> --}}
                                    <a href="#" onclick="copyToClipboard()">
                                        <span class="icon">
                                            <i class="fa fa-link"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <!-- .header-menu-icons -->
                        </div>
                    </div>
                </section>
            </div>
            <!-- #header-bottom-inner -->
        </div>
        <!-- #header-bottom -->
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <section class="section works-list has-background-primary-light is-clearfix">
                    <div class="container">
                        {{-- <h1 class="heading-title style-1" style="margin-bottom: 55px !important;">
                            {{ $series->name }}</h1> --}}

                        <div class="works isotope masonry image-hover effect-8 grid-container mfp-lightbox-gallery">
                            <div class="masonry-filters">
                                {{-- <ul>
                                        <li data-filter="*" class="active">show all</li>
                                        @foreach ($series->mobile_series_versions as $version)
                                            <li data-filter="{{ '.version-' . $version->id }}">{{ $version->name }}
                                            </li>
                                        @endforeach
                                    </ul> --}}
                            </div>

                            <div class="_grid columns is-variable is-1 is-multiline">
                                @foreach ($photos as $photo)
                                    <div
                                        class="_grid-item aos-init column is-4">
                                        <div class="work-item">
                                            {{-- <div class="photo-like-area" id="photo-like-area-{{ $photo->id }}">
                                                    @php
                                                        $campaign_of_photo = $ongoing_campaigns->firstWhere('id', $photo->campaign_id)
                                                    @endphp
                                                    @if ($campaign_of_photo && $campaign_of_photo->campaign_status == 2 && auth()->user())
                                                        <a href="javascript:;" class="{{ in_array($photo->id, $liked_photos_id) ? 'liked' : 'unliked' }}"
                                                            onclick="likeGalleryPhoto({{ $photo->id }})" id="photo-like-btn-{{ $photo->id }}">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    @else
                                                        {{ $photo->likes_count }}
                                                    @endif
                                                </div> --}}
                                            <figure>
                                                <a href="{{ url('image_description/' . $photo->id) }}" class="">
                                                    <img alt="Exibition Image"
                                                        src="{{ $photo->img_thumbnail ? Storage::url($photo->img_thumbnail) : Storage::url($photo->img) }}">
                                                    {{-- <img alt="Exibition Image" class="lazy iso-img-cls"
                                                            data-src="{{ $photo->img_thumbnail ? Storage::url($photo->img_thumbnail) : Storage::url($photo->img) }}"> --}}
                                                </a>
                                            </figure>

                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- <div style="text-align:center;">
                                <a href="{{ route('exibition-photos-by-author', ['author_id' => $user->id]) }}"
                                    class="button is-danger is-radiusless">View All</a>
                            </div> --}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection



@section('scripts')
    <script src="{{ URL::asset('frontend/assets/social-sharer-js/sharer.min.js') }}"></script>
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

        function copyToClipboard() {
            /* Get the text field */
            // var copyText = document.getElementById("profile_url_inp");

            /* Select the text field */
            // copyText.select();
            // copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText('{{ url()->full() }}');

            /* Alert the copied text */
            alert("Profile shareable link copied.");
        }
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

        .photo-bottom-caption {
            bottom: 0 !important;
            left: 0;
            width: auto !important;
            color: #fff;
            padding-bottom: 1.5rem !important;
            font-size: 24px;
            font-weight: 500;
            text-align: left;
        }
    </style>
@endsection
