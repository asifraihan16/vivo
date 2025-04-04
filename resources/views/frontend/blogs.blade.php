@extends('frontend.layouts.app')

@section('title', 'Blog')

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/banner-images/Blog.webp') }}) no-repeat top center; background-size: cover;}">
                    <div class="hero-body">
                        <div class="container">
                            {{-- <h1>Blog</h1> --}}
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
        <section class="section content-with-sidebar is-clearfix">
            <div class="container">
                <div class="columns is-variable is-5 is-multiline ">
                    <div class="column is-12-desktop is-12-tablet">
                        <div id="content-area" class="site-content-area">
                            <div id="content-area-inner" class="site-content-area-inner">
                                <div class="blog-list style-list columns is-variable is-4 is-multiline">
                                    @foreach ($blogs as $value)
                                        <div class="column is-12" data-aos="fade-up">
                                            <article class="blog-post">
                                                <div class="columns is-variable is-4 is-multiline">
                                                    <div class="column is-narrow is-4">
                                                        <figure class="post-image">
                                                            <a href="{{ url('blog_details') }}">
                                                                <img alt="Blog Image" src="{{ $value->img ? Storage::url($value->img) : '' }}">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <div class="column">
                                                        <div class="entry-header">
                                                            <h2 class="entry-title">
                                                                <a
                                                                    href="{{ url('/blog_details/' . $value->id) }}">{{ $value->title }}</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <ul>
                                                                    <li>
                                                                        <span class="icon">
                                                                            <i class="icon-clock"></i>
                                                                        </span>
                                                                        <span>{{ date('M-d-Y', strtotime($value->created_at)) }}</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .post-meta -->
                                                        </div>
                                                        <!-- .entry-header -->
                                                        <div class="entry-content">
                                                            {!! Str::limit($value->desc, 150) !!}
                                                        </div>
                                                        <!-- .entry-content -->
                                                        <div class="entry-footer">
                                                            <a href="{{ url('/blog_details/' . $value->id) }}"
                                                                class="button">Read More</a>
                                                        </div>
                                                        <!-- .entry-footer -->
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- .blog-post -->
                                        </div>
                                    @endforeach
                                </div>
                                <!-- .pagination -->
                            </div>
                            <!-- #content-area-inner -->
                        </div>
                        <!-- #content-area -->
                    </div>
                    <!-- .column -->
                    {{-- <div class="column is-narrow is-4-desktop is-12-tablet">
                        <aside id="sidebar" class="sidebar ">
                            <div id="sidebar-inner" class="site-sidebar-inner">
                                <!-- import widgets -->
                                <!-- widgets list -->
                                <!-- .widget -->
                                <div class="widget widget-links">
                                    <h3 class="widget-title ">Mobile Series</h3>
                                    <ul class="mobile-series-in-blogPage">
                                        @foreach ($mobile_series_version as $data)
                                            <li>
                                                <a href="#">{{ $data->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- .widget -->
                            </div>
                            <!-- #sidebar-inner -->
                        </aside>
                        <!-- #sidebar -->
                    </div> --}}
                    <!-- .column -->
                </div>
                <!-- .columns -->
            </div>
        </section>
        <!-- #content-area -->
    </div>
    <!-- #content-main-wrap -->
@endsection

@section('styles')
    <style>
        .icon i {
            color: #4768FF;
        }

        .blog-post .entry-footer .button:after {
            color: #4768FF !important;
        }

    </style>
@endsection
