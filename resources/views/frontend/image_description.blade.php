@extends('frontend.layouts.app')

@section('title', 'Exibition')

@section('content')
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('frontend/assets/images/page-header/6.jpg') }}) no-repeat top center; background-size: cover;}">
                    <div class="hero-body">
                        <div class="container">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">

                <section class="section portfolio-single is-clearfix">
                    <div class="container">
                        <div class="columns is-variable is-multiline is-6 ">
                            <div class="column aos-init">


                                <div class="work-item">
                                    <figure>
                                        <a href="{{ $image_details->img ? Storage::url($image_details->img) : '' }}"
                                            class="mfp-lightbox mfp-image" title="{{ $image_details->title }}">
                                            <img alt="{{ $image_details->title }}"
                                                src="{{ $image_details->img ? Storage::url($image_details->img) : '' }}">
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
                            </div>

                            <div class="column is-narrow is-3">
                                <div class="work-details sidebar-fixed">
                                    <div class="columns is-variable is-multiline">
                                        <div class="column widget is-12 widget-links ">
                                            <h3 class="widget-title ">Details</h3>
                                            <ul>
                                                <li>
                                                    <p>
                                                        <span class="icon"><i class="icon-tag"></i></span>
                                                        Author Name : <a href="{{ route('exibition-photos-by-author', ['author_id' => $image_details->users_id]) }}">{{ $image_details->username }}</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span class="icon">
                                                            <i class="icon-tag"></i>
                                                        </span>
                                                        Image Title : {{ $image_details->title }}
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span class="icon">
                                                            <i class="icon-tag"></i>
                                                        </span>
                                                        Phone Model : {{ $image_details->mobile_series_versions_name }}
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span class="icon">
                                                            <i class="icon-tag"></i>
                                                        </span>
                                                        Tags : {{ $image_tags->join(', ') }}
                                                    </p>
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
