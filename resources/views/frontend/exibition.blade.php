@extends('frontend.layouts.app')

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/page-header/6.jpg') }}) no-repeat top center; background-size: cover;}">
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
                <!-- import content layouts and modules -->
                <!-- start adding page content -->
                <!-- works section -->
                <section class="section hero works-list padding-bottom-none padding-top-none is-clearfix">
                    <div>
                        <div class="works isotope masonry image-hover effect-10 mfp-lightbox-gallery margin-bottom-none">
                            <div class="columns is-variable is-gapless is-multiline">
                                @for ($i = 1; $i <= 8; $i++)
                                    <div class="column is-3 branding " data-aos="fade">
                                        <div class="work-item">
                                            <figure>
                                                <?php $var = 'img' . $i; ?>
                                                <a href="{{ $exhibitions[0]->$var ? Storage::url($exhibitions[0]->$var) : '' }}"
                                                    class="mfp-lightbox mfp-image" title="">
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                        src="{{ $exhibitions[0]->$var ? Storage::url($exhibitions[0]->$var) : '' }}">
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
                                        <!-- .work-item -->
                                    </div>
                                @endfor
                            </div>
                            <!-- .columns -->
                        </div>
                        <!-- .works -->
                    </div>
                </section>

                <section class="section hero-2 works-list is-clearfix">
                    <div class="container">
                        @foreach ($final_data as $key => $series)
                            <h1 class="heading-title style-1">{{ $key }}</h1>

                            <div class="works isotope masonry image-hover effect-8">
                                <ul class="isotope-filter">
                                    <li data-filter="*" class="active">show all</li>
                                    @foreach ($series as $key => $versions)
                                        <li data-filter=".branding1">{{ $key }}</li>
                                    @endforeach
                                </ul>
                                <div class="columns is-variable is-3 is-multiline">
                                    @foreach ($series as $versions)
                                        @foreach ($versions as $exhibitions)
                                            <div class="column is-4 branding " data-aos="fade-up">
                                                <div class="work-item">
                                                    <figure>
                                                        <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                            src="{{ $exhibitions->img ? Storage::url($exhibitions->img) : '' }}">
                                                    </figure>
                                                </div>
                                                <!-- .work-item -->
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                                <!-- .columns -->
                            </div>
                        @endforeach
                        <!-- .works -->
                    </div>
                </section>

            </div>
            <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
    </div>
    <!-- #content-main-wrap -->
@endsection


