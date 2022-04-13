@extends('frontend.layouts.app')

@section('title', 'Exibition')

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('frontend/assets/images/page-header/6.jpg') }}) no-repeat top center; background-size: cover;}">
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

                <section class="section portfolio-single is-clearfix">
                    <div class="container">
                        <div class="columns is-variable is-multiline is-6 ">
                            <div class="column ">
                                <div class="work-content">
                                    <div class="image-hover effect-10 mfp-lightbox-gallery">
                                        <ul class="work-images">
                                            <li>
                                                <figure>
                                                    <img alt="Exibition Image" class="mfp-lightbox mfp-image"
                                                        src="{{ Storage::url($image_details->img) }}">
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- .work-content -->
                            </div>

                            <div class="column is-narrow is-3">
                                <div class="work-details sidebar-fixed">
                                    <div class="columns is-variable is-multiline">
                                        <!-- widgets list -->
                                        <!-- .widget -->
                                        <div class="column widget is-12 widget-links ">
                                            <h3 class="widget-title ">Details</h3>
                                            <ul>
                                                <li>
                                                    <span class="icon">
                                                        <i class="icon-tag"></i>
                                                    </span>
                                                    <a href="#">Author Name :</a>
                                                    <a
                                                        href="{{ route('exibition-photos-by-author', ['author_id' => $image_details->users_id]) }}">{{ $image_details->username }}</a>
                                                </li>
                                                <li>
                                                    <span class="icon">
                                                        <i class="icon-tag"></i>
                                                    </span>
                                                    <a href="#">Image Title :</a>
                                                    <a href="#">{{ $image_details->title }}</a>
                                                </li>
                                                <li>
                                                    <span class="icon">
                                                        <i class="icon-tag"></i>
                                                    </span>
                                                    <a href="#">Phone Model :</a>
                                                    <a href="#">{{ $image_details->mobile_series_versions_name }}</a>
                                                </li>
                                                <li>
                                                    <span class="icon">
                                                        <i class="icon-tag"></i>
                                                    </span>
                                                    <a href="#">Tags:</a>
                                                    <a href="#"> {{ $image_tags->join(', ') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- .columns -->
                                </div>
                                <!-- .work-details -->
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


@section('styles')
    <style>
        .icon i {
            color: #4768FF;
        }

        .portfolio-single .widget-links ul li a:hover {
            color: #4768FF;
        }
    </style>
@endsection
