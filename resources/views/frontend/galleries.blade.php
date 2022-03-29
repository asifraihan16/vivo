@extends('frontend.layouts.app')

@section('content')
      <!-- #header-wrap -->
      <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
          <div id="header-bottom-inner" class="site-header-bottom-inner ">
            <section class="hero page-title is-medium has-text-centered blog-single" style="background: #812323 url({{ asset('frontend/assets/images/page-header/1.jpg') }}) no-repeat top center; background-size: cover;}">
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
              <section class="section works-list is-clearfix">
                <div class="container">
                  <h1 class="heading-title style-1">X Series</h1>
                  <div class="works isotope masonry image-hover effect-8">
                    <ul class="isotope-filter">
                      <li data-filter="*" class="active">show all</li>
                      <li data-filter=".branding">X70 Pro 5G</li>
                      <li data-filter=".prototype">X60 Pro</li>
                    </ul>
                    <div class="columns is-variable is-3 is-multiline">
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/1.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 prototype " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/14.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/5.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/2.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/11.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/3.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/12.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 prototype " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/4.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 prototype " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/10.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                    </div>
                    <!-- .columns -->
                  </div>
                  <!-- .works -->
                </div>
              </section>

              <section class="section has-background-primary-light works-list is-clearfix">
                <div class="container">
                  <h1 class="heading-title style-1">Y Series</h1>
                  <div class="works isotope masonry image-hover effect-8">
                    <ul class="isotope-filter">
                      <li data-filter="*" class="active">show all</li>
                      <li data-filter=".branding">Y21 T</li>
                      <li data-filter=".prototype">Y15s</li>
                      <li data-filter=".prototype">Y53s</li>
                    </ul>
                    <div class="columns is-variable is-3 is-multiline">
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/1.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 prototype " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/14.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/5.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/2.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/11.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/3.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/12.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 prototype " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/4.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 prototype " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/10.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                    </div>
                    <!-- .columns -->
                  </div>
                  <!-- .works -->
                </div>
              </section>

              <section class="section works-list is-clearfix">
                <div class="container">
                  <h1 class="heading-title style-1">V Series</h1>
                  <div class="works isotope masonry image-hover effect-8">
                    <ul class="isotope-filter">
                      <li data-filter="*" class="active">show all</li>
                      <li data-filter=".branding">V23 e</li>
                      <li data-filter=".prototype">V20 SE</li>
                      <li data-filter=".prototype">V 23 5G</li>
                    </ul>
                    <div class="columns is-variable is-3 is-multiline">
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/1.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 prototype " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/14.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/5.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/2.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/11.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/3.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 branding " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/12.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 prototype " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/4.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                      <div class="column is-4 prototype " data-aos="fade-up">
                        <div class="work-item">
                          <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/portfolio/10.png') }}">
                          </figure>
                        </div>
                        <!-- .work-item -->
                      </div>
                    </div>
                    <!-- .columns -->
                  </div>
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