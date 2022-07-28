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
                            {{-- <h1>Campaign</h1> --}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <section class="section is-clearfix {{-- has-background-primary-light --}} hero" style="background-color: #fafafa !important;">
                    <div class="container">
                        <h1 class="heading-title style-1">Campaign List</h1>
                        <br>
                        <br>

                        <div class="blog-list style-3 columns is-variable is-4 is-multiline">
                            @foreach ($campaigns as $data)
                            <div class="column is-4" data-aos="fade">
                                <article class="blog-post" style="padding: 20px 25px;">
                                    <div class="entry-header">
                                        <div class="post-meta">
                                            <ul>
                                                <li>
                                                    <a href="#" >
                                                        @if ($data->campaign_status === 2)
                                                        <span style="color: rgba(65, 95, 255, 1.0)">On Going</span>
                                                        @elseif ($data->campaign_status === 3)
                                                        <span style="color: #999;">Closed</span>
                                                        @endif
                                                    </a>
                                                </li>
                                            </ul>
                                            <img src="{{ $data->img1 ? Storage::url($data->img1) : '' }}" alt="Campaign Cover Photo">
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="{{ route('frontend.campaign_detail', ['id' => $data->id]) }}" style="font-size: 20px;">{{ $data->title }}</a>
                                        </h2>
                                    </div>
                                    <div class="entry-content">
                                        <p style="color: #5c5c5c;">{{ $data->title_detail }}</p>
                                    </div>
                                    {{-- <div class="entry-footer">
                                        <a class="button" href="{{ route('frontend.campaign_detail', ['id' => $data->id]) }}">See More</a>
                                    </div> --}}
                                    <!-- .entry-footer -->
                                </article>
                            </div>
                            @endforeach
                        </div>

                        {{-- <div class="columns is-variable is-multiline is-centered">
                            <div class="column is-9">
                                <table class="table is-fullwidth campaign-list">
                                    <thead>
                                        <tr>
                                            <th>Campaign Title</th>
                                            <th>Photo Theme</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($campaigns as $data)
                                            <tr>
                                                <td><a
                                                        href="{{ route('frontend.campaign_detail', ['id' => $data->id]) }}">{{ $data->title }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('frontend.campaign_detail', ['id' => $data->id]) }}">{{ $data->title_detail }}</a>
                                                </td>
                                                <td><a href="{{ route('frontend.campaign_detail', ['id' => $data->id]) }}">
                                                        <img width="100px"
                                                            src="{{ $data->img1 ? Storage::url($data->img1) : '' }}"></a>
                                                </td>
                                                <td>
                                                    @if ($data->campaign_status === 2)
                                                        <a href="{{ url('user/login') }}"
                                                            style="color: rgba(65, 95, 255, 1.0)">On Going</a>
                                                    @elseif ($data->campaign_status === 3)
                                                        <span style="color: #999;">Closed</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                        <br>
                    </div>
                </section>
            </div>
            <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
    </div>
    <!-- #content-main-wrap -->
@endsection
