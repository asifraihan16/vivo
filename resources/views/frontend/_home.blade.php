@extends('frontend.layouts.app')

@section('content')
  <!-- #header-wrap -->
  <div id="header-bottom-wrap" class="is-clearfix">
    <div id="header-bottom" class="site-header-bottom">
      <div id="header-bottom-inner" class="site-header-bottom-inner ">
        <section class="hero slider is-clearfix ">
          <h2 class="display-none">slider</h2>
          <div class="rev_slider_wrapper fullscreen-container ">
            <div id="rev_slider_1" class="rev_slider tp-overflow-hidden fullscreenbanner" data-version="5.4.7" style="display:none">
              <ul>
                @foreach($home_sliders as $value)
                <li data-transition="crossfade">
                  <img alt="VIVO Bangladesh" class="rev-slidebg" src="{{ asset('/storage/'.$value->img) }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone"
                    data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15">
                  
                  <a class="tp-caption tp-resizeme mfp-lightbox mfp-iframe button is-primary is-rounded" href="#" data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    data-x="center" data-hoffset="['0','0','0','0']" data-y="center" data-voffset="['135','135','0','0']" data-type="button"> Go Down </a>
                  <div class="tp-caption rev-scroll-btn revs-white" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']"
                    data-width="30" data-height="50" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]' data-basealign="slide" data-frames='[{"from":"y:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":2400,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19; min-width: 30px; max-width: 30px; max-width: 50px; max-width: 50px;border-width:1.5px!important;cursor:pointer;">
                    <span></span>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            <!-- .rev_slider -->
          </div>
          <!-- .rev_slider_wrapper -->
        </section>
        <!-- .slider -->
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
          <div>
            <h1 class="heading-title style-1">Moments</h1>
            <div class="works isotope masonry image-hover mfp-lightbox-gallery effect-8">
              <div class="columns is-variable is-1 is-multiline" style="position: relative; height: 1510.47px;">
                <div class="column is-3 branding aos-init" data-aos="fade-up" style="position: absolute; left: 0%; top: 0px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{ asset('/storage/'.$moments[0]->img1) }}" class="mfp-lightbox mfp-image" title="">
                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/storage/'.$moments[0]->img1) }}">
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
                <div class="column is-6 prototype aos-init" data-aos="fade-up" style="position: absolute; left: 25%; top: 0px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{ asset('/storage/'.$moments[0]->img2) }}" class="mfp-lightbox mfp-image" title="">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/storage/'.$moments[0]->img2) }}">
                      <figcaption>
                      </figcaption>
                      </a>
                    </figure>
                  </div>
                  <!-- .work-item -->
                </div>
                <div class="column is-3 branding aos-init" data-aos="fade-up" style="position: absolute; left: 50%; top: 0px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{ asset('/storage/'.$moments[0]->img3) }}" class="mfp-lightbox mfp-image" title="">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/storage/'.$moments[0]->img3) }}">
                      <figcaption>
                      </figcaption>
                      </a>
                    </figure>
                  </div>
                  <!-- .work-item -->
                </div>
                <div class="column is-6 branding aos-init" data-aos="fade-up" style="position: absolute; left: 75%; top: 0px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{ asset('/storage/'.$moments[0]->img4) }}" class="mfp-lightbox mfp-image" title="">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/storage/'.$moments[0]->img4) }}">
                      <figcaption>
                      </figcaption>
                      </a>
                    </figure>
                  </div>
                  <!-- .work-item -->
                </div>
                <div class="column is-6 development aos-init" data-aos="fade-up" style="position: absolute; left: 0%; top: 327.25px;">
                  <div class="columns is-variable is-1 is-multiline">
                    <div class="column is-6 branding aos-init" data-aos="fade-up" style="position: absolute; left: 0%; top: 8px;">
                      <div class="work-item">
                        <figure>
                          <a href="{{ asset('/storage/'.$moments[0]->img5) }}" class="mfp-lightbox mfp-image" title="">
                          <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/storage/'.$moments[0]->img5) }}">
                          <figcaption>
                          </figcaption>
                          </a>
                        </figure>
                      </div>
                      <!-- .work-item -->
                    </div>
                    <div class="column is-6 branding aos-init" data-aos="fade-up" style="position: absolute; left: 0%; top: 8px;">
                      <div class="work-item">
                        <figure>
                          <a href="{{ asset('/storage/'.$moments[0]->img6) }}" class="mfp-lightbox mfp-image" title="">
                          <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/storage/'.$moments[0]->img6) }}">
                          <figcaption>
                          </figcaption>
                          </a>
                        </figure>
                      </div>
                      <!-- .work-item -->
                    </div>
                    <div class="column is-12 branding aos-init" data-aos="fade-up" style="position: absolute; left: 0%; top: 8px;">
                      <div class="work-item">
                        <figure>
                          <a href="{{ asset('/storage/'.$moments[0]->img7) }}" class="mfp-lightbox mfp-image" title="">
                          <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/storage/'.$moments[0]->img7) }}">
                          <figcaption>
                          </figcaption>
                          </a>
                        </figure>
                      </div>
                      <!-- .work-item -->
                    </div>
                  </div>
                  <!-- .work-item -->
                </div>
              </div>
              <!-- .columns -->
            </div>
            <!-- .works -->
          </div>
        </section>

        <!-- Vedio section -->

        <section class="section watch-video is-clearfix">
          <div class="container">
            <div class="columns is-variable is-8 is-multiline">
              <div class="column is-6-desktop is-12-tablet" data-aos="fade">
                <br>
                <br>
                <p class="heading-title-top has-text-left has-text-tertiary">video</p>
                <h1 class="heading-title style-1 has-text-left">watch our video</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravi, nulla nunc varius lectus, nec rutrum justo nibh eu lectus metus ultrices.</p>
                <br>
              </div>
              <div class="column is-6-desktop is-12-tablet has-text-centered" data-aos="fade-up">
                <div class="works-latest">
                  <div class="works-latest-item">

                    <x-embed url="{{$playlist1_main[0]->link}}" />
                    <!-- <img alt="VIVO Bangladesh" src="{{ asset('/public/frontend/assets/images/portfolio/1.png') }}">
                    <div class="works-latest-item-icon style-2">
                      <a href="{{$playlist1_main[0]->link}}" class="mfp-lightbox mfp-iframe">
                        <span class="icon ripple-effect">
                          <i class="ion-ios-play"></i>
                        </span>
                      </a>
                    </div> -->
                    <!-- .works-latest-icon -->
                  </div>
                  <!-- .works-latest-item -->
                </div>
              </div>
            </div>
            <div class="works-latest image-hover effect-1 owl-carousel dots carousel-items-3">
                @foreach($playlist1_other as $value)
                  <x-embed url="{{$value->link}}" />
                @endforeach
              <!-- .work-item -->
            </div>
          </div>
        </section>

        <section class="section watch-video is-clearfix">
          <div class="container">
            <div class="columns is-variable is-8 is-multiline">
              <div class="column is-6-desktop is-12-tablet" data-aos="fade">
                <br>
                <br>
                <p class="heading-title-top has-text-left has-text-tertiary">video</p>
                <h1 class="heading-title style-1 has-text-left">watch our video</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravi, nulla nunc varius lectus, nec rutrum justo nibh eu lectus metus ultrices.</p>
                <br>
              </div>
              <div class="column is-6-desktop is-12-tablet has-text-centered" data-aos="fade-up">
                <div class="works-latest">
                  <div class="works-latest-item">

                    <x-embed url="{{$playlist2_main[0]->link}}" />
                    <!-- .works-latest-icon -->
                  </div>
                  <!-- .works-latest-item -->
                </div>
              </div>
            </div>
            <div class="works-latest image-hover effect-1 owl-carousel dots carousel-items-3">
                @foreach($playlist2_other as $value)
                  <x-embed url="{{$value->link}}" />
                  
                @endforeach
              <!-- .work-item -->
            </div>
          </div>
        </section>


        <!-- phone category section -->
        <section class="section works-list is-clearfix">
          <div class="container">
            
            <div class="works isotope image-hover effect-8">
              <div class="columns is-variable is-4 is-multiline">
                <div class="column is-4 branding " data-aos="fade-up">
                  <div class="work-item">
                    <center><button class="mobile-series-title style-1">X Series</span></button>
                    <figure>
                      <img alt="VIVO Bangladesh" src="{{ asset('/public/frontend/assets/images/portfolio/1.png') }}">
                      <figcaption>
                        <h3>Caminando</h3>
                        <h5>branding </h5>
                        <a href="../../portfolio/single.html">View more</a>
                      </figcaption>
                    </figure>
                  </div>
                  <!-- .work-item -->
                </div>
                <div class="column is-4 prototype " data-aos="fade-up">
                  <div class="work-item">
                    <center><button class="mobile-series-title style-1">Y Series</button></center>
                    <figure>
                      <img alt="VIVO Bangladesh" src="{{ asset('/public/frontend/assets/images/portfolio/2.png') }}">
                      <figcaption>
                        <h3>Calligraphy</h3>
                        <h5>prototype </h5>
                        <a href="../../portfolio/single.html">View more</a>
                      </figcaption>
                    </figure>
                  </div>
                  <!-- .work-item -->
                </div>
                <div class="column is-4 branding " data-aos="fade-up">
                  <div class="work-item">
                    <center><button class="mobile-series-title heading-titletyle-1">Z Series</button></center>
                    <figure>
                      <img alt="VIVO Bangladesh" src="{{ asset('/public/frontend/assets/images/portfolio/3.png') }}">
                      <figcaption>
                        <h3>Abstract</h3>
                        <h5>Branding </h5>
                        <a href="../../portfolio/single.html">View more</a>
                      </figcaption>
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

        <!-- blog category -->
        <section class="section hero has-background-primary-light is-clearfix">
          <h1 class="heading-title style-1">Blogs</h1>
          <div class="container">
            <br>
            <div class="isotope masonry">
              <div class="blog-list style-2 columns is-variable is-4 is-multiline">
                <div class="column is-4" data-aos="fade-up">
                  <article class="blog-post">
                    <figure class="post-image">
                      <a href="{{url('/blog_details')}}">
                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/public/frontend/assets/images/portfolio/1.png') }}"> </a>
                    </figure>
                    <div class="entry-header">
                      <h2 class="entry-title">
                        <a href="{{url('/blog_details')}}">self motivation how to keep</a>
                      </h2>
                      <div class="post-meta">
                        <ul>
                          <li>
                            <a href="#">
                              <span>WEDDING</span>
                            </a>
                          </li>
                          <li>
                            <span>April 5, 2018</span>
                          </li>
                        </ul>
                      </div>
                      <!-- .post-meta -->
                    </div>
                    <!-- .entry-header -->
                    <div class="entry-content">
                      <p>The main component of a healthy for self esteem is that it needs be nurturing. It should provide warmth..</p>
                    </div>
                    <!-- .entry-content -->
                  </article>
                  <!-- .blog-post -->
                </div>
                <div class="column is-4" data-aos="fade-up">
                  <article class="blog-post">
                    <figure class="post-image">
                      <a href="{{url('/blog_details')}}">
                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/public/frontend/assets/images/portfolio/14.png') }}"> </a>
                    </figure>
                    <div class="entry-header">
                      <h2 class="entry-title">
                        <a href="{{url('/blog_details')}}">self motivation how to keep</a>
                      </h2>
                      <div class="post-meta">
                        <ul>
                          <li>
                            <a href="#">
                              <span>Makup</span>
                            </a>
                          </li>
                          <li>
                            <span>April 5, 2018</span>
                          </li>
                        </ul>
                      </div>
                      <!-- .post-meta -->
                    </div>
                    <!-- .entry-header -->
                    <div class="entry-content">
                      <p>The main component of a healthy for self esteem is that it needs be nurturing. It should provide warmth..</p>
                    </div>
                    <!-- .entry-content -->
                  </article>
                  <!-- .blog-post -->
                </div>
                <div class="column is-4" data-aos="fade-up">
                  <article class="blog-post">
                    <figure class="post-image">
                      <a href="{{url('/blog_details')}}">
                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/public/frontend/assets/images/portfolio/5.png') }}"> </a>
                    </figure>
                    <div class="entry-header">
                      <h2 class="entry-title">
                        <a href="{{url('/blog_details')}}">self motivation how to keep</a>
                      </h2>
                      <div class="post-meta">
                        <ul>
                          <li>
                            <a href="#">
                              <span>BEAUTY</span>
                            </a>
                          </li>
                          <li>
                            <span>April 5, 2018</span>
                          </li>
                        </ul>
                      </div>
                      <!-- .post-meta -->
                    </div>
                    <!-- .entry-header -->
                    <div class="entry-content">
                      <p>The main component of a healthy for self esteem is that it needs be nurturing. It should provide warmth..</p>
                    </div>
                    <!-- .entry-content -->
                  </article>
                  <!-- .blog-post -->
                </div>
                <div class="column is-4" data-aos="fade-up">
                  <article class="blog-post">
                    <figure class="post-image">
                      <a href="{{url('/blog_details')}}">
                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/public/frontend/assets/images/portfolio/2.png') }}"> </a>
                    </figure>
                    <div class="entry-header">
                      <h2 class="entry-title">
                        <a href="{{url('/blog_details')}}">self motivation how to keep</a>
                      </h2>
                      <div class="post-meta">
                        <ul>
                          <li>
                            <a href="#">
                              <span>WEDDING</span>
                            </a>
                          </li>
                          <li>
                            <span>April 5, 2018</span>
                          </li>
                        </ul>
                      </div>
                      <!-- .post-meta -->
                    </div>
                    <!-- .entry-header -->
                    <div class="entry-content">
                      <p>The main component of a healthy for self esteem is that it needs be nurturing. It should provide warmth..</p>
                    </div>
                    <!-- .entry-content -->
                  </article>
                  <!-- .blog-post -->
                </div>
                <div class="column is-4" data-aos="fade-up">
                  <article class="blog-post">
                    <figure class="post-image">
                      <a href="{{url('/blog_details')}}">
                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/public/frontend/assets/images/portfolio/3.png') }}"> </a>
                    </figure>
                    <div class="entry-header">
                      <h2 class="entry-title">
                        <a href="{{url('/blog_details')}}">self motivation how to keep</a>
                      </h2>
                      <div class="post-meta">
                        <ul>
                          <li>
                            <a href="#">
                              <span>Makup</span>
                            </a>
                          </li>
                          <li>
                            <span>April 5, 2018</span>
                          </li>
                        </ul>
                      </div>
                      <!-- .post-meta -->
                    </div>
                    <!-- .entry-header -->
                    <div class="entry-content">
                      <p>The main component of a healthy for self esteem is that it needs be nurturing. It should provide warmth..</p>
                    </div>
                    <!-- .entry-content -->
                  </article>
                  <!-- .blog-post -->
                </div>
                <div class="column is-4" data-aos="fade-up">
                  <article class="blog-post">
                    <figure class="post-image">
                      <a href="{{url('/blog_details')}}">
                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('/public/frontend/assets/images/portfolio/4.png') }}"> </a>
                    </figure>
                    <div class="entry-header">
                      <h2 class="entry-title">
                        <a href="{{url('/blog_details')}}">self motivation how to keep</a>
                      </h2>
                      <div class="post-meta">
                        <ul>
                          <li>
                            <a href="#">
                              <span>BEAUTY</span>
                            </a>
                          </li>
                          <li>
                            <span>April 5, 2018</span>
                          </li>
                        </ul>
                      </div>
                      <!-- .post-meta -->
                    </div>
                    <!-- .entry-header -->
                    <div class="entry-content">
                      <p>The main component of a healthy for self esteem is that it needs be nurturing. It should provide warmth..</p>
                    </div>
                    <!-- .entry-content -->
                  </article>
                  <!-- .blog-post -->
                </div>
              </div>
            </div>
            <br> </div>
        </section>
      </div>
      <!-- #content-area-inner -->
    </div>
    <!-- #content-area -->
  </div>
  <!-- #content-main-wrap -->

@endsection