@extends('frontend.layouts.app')

@section('title', 'Privacy Policy')

@section('styles')
    <style>
        .beefup__head {
            white-space: normal !important;
        }

    </style>
@endsection

@section('content')
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/page-header/3.jpg') }}) no-repeat top center; background-size: cover;}">
                    <div class="hero-body">
                        <div class="container">
                            <h1>Privacy Policy</h1>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <section class="section  is-clearfix" style="background-color: #f6f6f6;">
                    <div class="container" style="background-color: #fff;">
                        <div class="m-4" style="padding: 50px 40px;">
                            <h1 class="heading-title style-1">Privacy Policy</h1>
                            {{-- <p>Welcome! vivo Mobile Communication Co., Ltd. ("vivo," "we" or "us") respects your personal
                                data and fulfills all mandatory requirements. This vivo Privacy Policy (hereinafter referred
                                as "Privacy Policy") describes how we process your personal data when you interact with
                                vivo.com, vivoglobal.com or other websites of vivo, or when you use or visit products,
                                services, applications, functions, or other digital properties of vivo (e.g., vivoCloud,
                                vivo’s User Experience Improvement Plan) and any other locations where this Privacy Policy
                                may be posted (collectively, the "Services"), for the purposes of applicable data protection
                                legislation. Please read our privacy practices carefully and Contact Us if you have any
                                questions.</p> --}}
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
