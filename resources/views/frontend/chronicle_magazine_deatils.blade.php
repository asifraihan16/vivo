@extends('frontend.layouts.app')

@section('title', 'Chronicle Magazine Deatils')

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/banner-images/Photography_Chronicle.jpg') }}) no-repeat top center; background-size: cover;}">
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
                <section class="section  is-clearfix">
                    <div class="container">
                        <div class="blog-single">
                            <br>
                            <article class="blog-post ">
                              
                                <div class="entry-header">
                                    <div class="post-meta">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="icon-clock"> </i>
                                                </span>
                                                <span> {{ date('M-d-Y', strtotime($chronicle_magazines->created_at)) }} </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .post-meta -->
                                    <h2 class="entry-title"> {{ $chronicle_magazines->title }} </h2>
                                </div>
                                <!-- .entry-header -->
                                <div class="entry-content content">
                                    <iframe src="{{$chronicle_magazines->link}}" title="description" style="width: 100%; height:900px"></iframe>
                                </div>
                                {{-- <div id="container"> </div> --}}

                               
                                <!-- .entry-content -->

                                <!-- .entry-footer -->
                            </article>
                            <!-- .comments-box -->
                        

                        </div>
                        <!-- .blog-single -->
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

    </style>
@endsection
@section('scripts')

@endsection
