
@extends('frontend.layouts.app')

@section('title', 'CAPTURE THE FUTURE')
<style>
    .pagination {
    margin-top: 20px;
    text-align: center;
}

.pagination .pagination-list {
    display: inline-block;
    list-style: none;
    padding: 0;
    margin: 0;
}

.pagination .pagination-list li {
    display: inline;
    margin-right: 5px;
}

.pagination .pagination-list li a,
.pagination .pagination-list .active span {
    padding: 5px 10px;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    color: #333;
    text-decoration: none;
}

.pagination .pagination-list li a:hover {
    background-color: #e0e0e0;
}

.pagination .pagination-list .active span {
    background-color: #007bff;
    color: #fff;
    border: 1px solid #007bff;
}
</style>

@section('content')
    @php

        // $cover_pic = $running_campaing ? Storage::url($running_campaing->img1) : asset('/frontend/assets/images/banner-images/Gallery.webp');
        $cover_pic = asset('/frontend/assets/images/banner-images/Gallery.webp');
    @endphp

    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ $cover_pic }}) no-repeat top center; background-size: cover;">
                    <div class="hero-body">
                        <div class="container">
                            {{-- <h1>Gallery</h1> --}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">

                <section class="section works-list is-clearfix padding-3rem">
                   
                    <div class="container width-80-percent">
                        <h1 style="text-align: center">CAPTURE THE FUTURE</h1>
                      
                            
                        <h2 style="text-align: center">{{$year}}</h2>
                        <div class="works isotope image-hover effect-8">
                         
                            <div class="columns is-variable is-1 is-multiline" style="">
                                @php
                                    $user_liked_photos = $user_liked_photos ? $user_liked_photos->toArray() : [];
                                @endphp

                                @foreach ($capture_the_futures as $moment)
                                <div class="column is-{{ $moment->image_span_col }} branding aos-init" style="">
                                    <div class="work-item">
                                        <div class="photo-like-area" id="photo-like-area-{{ $moment->id }}">
                                            
                                                <a href="javascript:;" class="{{ in_array($moment->id, $user_liked_photos) ? 'liked' : 'unliked' }}" onclick="likeCapturePhoto({{ $moment->id }})">
                                                    <i class="fa fa-heart"></i>
                                                    {{ $moment->likes_count }}
                                                </a>
                                            
                                        </div>
                                        <figure>
                                            <a href="{{ url('capture_the_future_deatils/' . $moment->id) }}" title="{{ $moment->title }}">
                                                <img alt="{{ $moment->title }}"
                                                    src="{{ $moment->image_path ? Storage::url($moment->image_path) : Storage::url($moment->image_path) }}"
                                                    style="" />
                                    
                                              
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            
                            @endforeach

                                {{-- @foreach ($capture_the_futures as $moment)
                                    <div class="column is-{{ $moment->image_span_col }} branding aos-init" style="">
                                        <div class="work-item">
                                            <figure>
                                                <a href="{{ $moment->image_path ? Storage::url($moment->image_path) : '' }}"
                                                    class="mfp-lightbox mfp-image" title="{{ $moment->title }} ">
                                                    <img alt="{{ $moment->title }}"
                                                        src="{{ $moment->image_path ? Storage::url($moment->image_path) : '' }}"
                                                        style="width: {{ $moment->image_span_col == 6 ? '900px' : '450px' }};" />
                                                    <figcaption>
                                                        <ul class="social">
                                                            <li>
                                                                <span class="icon">
                                                                    <i class="icon-magnifier"></i>
                                                                </span>
                                                            </li>
                                                        </ul>

                                                        <h3 class="photo-bottom-caption">{{ $moment->title }} </>
                                                            
                                                            
                                                    </figcaption>
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                @endforeach --}}

                            </div>
                            {{ $capture_the_futures->withQueryString()->appends(['year' => $year])->links('vendor.pagination.default') }}
                            {{-- {{ $capture_the_futures->appends(['year' => $year])->links() }} --}}
                            <!-- .columns -->
                        </div>
                      
                        <!-- .works -->
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
                        // itemSelector: '._grid-item',
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
