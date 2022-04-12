@extends('frontend.layouts.app')

@section('title', 'Campaign')

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/page-header/3.jpg') }}) no-repeat top center; background-size: cover;}">
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
                        <h1 class="heading-title style-1">Campaign List</h1>
                        <br>
                        <br>
                        <div class="columns is-variable is-multiline is-centered">
                            <div class="column is-9">
                                <table class="table is-fullwidth campaign-list">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Title Details</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($campaigns as $data)
                                            <tr>
                                                <td><a
                                                        href="{{ url('/campaign_detail/' . $data->id) }}">{{ $data->title }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ url('/campaign_detail/' . $data->id) }}">{{ $data->title_detail }}</a>
                                                </td>
                                                <td><a href="{{ url('/campaign_detail/' . $data->id) }}">
                                                        <img width="100px"
                                                            src="{{ $data->img1 ? Storage::url($data->img1) : '' }}"></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
