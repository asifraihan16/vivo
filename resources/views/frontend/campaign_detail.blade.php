@extends('frontend.layouts.app')

@section('title', 'Campaign')

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/banner-images/Hor-1920x450px-Campaign-Header.webp') }}) no-repeat top center; background-size: cover;}">
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
                <section class="section  is-clearfix">
                    <div class="container">
                        <div class="blog-single">
                            <br>
                            <article class="blog-post ">
                                <figure class="post-image">
                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ $data->img1 ? Storage::url($data->img1) : '' }}">
                                </figure>
                                <div class="entry-header">
                                    <div class="post-meta">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="icon-clock"> </i>
                                                </span>
                                                <span> {{ date('M-d-Y', strtotime($data->created_at)) }} </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title"> {{ $data->title_detail }} </h2>
                                </div>
                                <!-- .entry-header -->
                                <div class="entry-content content">
                                    {!! $data->desc !!}
                                </div>

                                @guest
                                <a href="{{ route('user.login') }}" class="button is-danger is-rounded ">Join Now</a>
                                @else
                                <a href="{{ route('user.photo-upload') }}" class="button is-danger is-rounded ">Join Now</a>
                                @endguest
                            </article>

                            <br>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
