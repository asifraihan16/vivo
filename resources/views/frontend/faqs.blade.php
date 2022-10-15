@extends('frontend.layouts.app')

@section('title', 'FAQs')

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
                            <h1>FAQS</h1>
                            <h3>Frequently Asked Questions</h3>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <section class="section  is-clearfix">
                    <div class="container">
                        {{-- <h1 class="heading-title style-1">Frequently Asked Questions</h1> --}}

                        <div class="accordions ">
                            @foreach ($faqs as $index=>$faq)
                                <div class="beefup {{ $index == 0 ? 'is-open' : '' }}">
                                    <h3 class="beefup__head">{{ $faq->question }}</h3>
                                    <div class="beefup__body content">
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            @endforeach

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
