@extends('frontend.layouts.app')

@section('content')


      <!-- #header-wrap -->
      <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
          <div id="header-bottom-inner" class="site-header-bottom-inner ">
            <section class="hero page-title is-medium has-text-centered blog-single">
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

          	<section class="section portfolio-single is-clearfix">
          	  <div class="container">
          	    <div class="columns is-variable is-multiline is-6 ">
          	      <div class="column ">
          	        <div class="work-content">
          	          <div class="image-hover effect-10 mfp-lightbox-gallery">
          	            <ul class="work-images">
          	              <li>
          	                <figure>
          	                  <a href="../../assets/images/slider/carousel/stories/1.png" class="mfp-lightbox mfp-image" title="Creative Design">
          	                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('frontend/assets/images/slider/carousel/stories/1.png') }}">
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
          	              </li>
          	            </ul>
          	          </div>
          	        </div>
          	        <!-- .work-content -->
          	      </div>
          	      <div class="column is-narrow is-3">
          	        <div class="work-details sidebar-fixed">
          	          <div class="columns is-variable is-multiline">
          	            <!-- widgets list -->
          	            <!-- .widget -->
          	            <div class="column widget is-12 widget-links ">
          	              <h3 class="widget-title ">details</h3>
          	              <ul>
          	                <li>
          	                  <span class="icon">
          	                    <i class="icon-folder"></i>
          	                  </span>
          	                  <a href="#">Author Name :</a>
          	                  <a href="#">Ullash</a>
          	                </li>
          	                <li>
          	                  <span class="icon">
          	                    <i class="icon-tag"></i>
          	                  </span>
          	                  <a href="#">Image Title</a>,
          	                  <a href="#">World</a>
          	                </li>
          	                <li>
          	                  <span class="icon">
          	                    <i class="icon-tag"></i>
          	                  </span>
          	                  <a href="#">Phone Model</a>,
          	                  <a href="#">X20</a>
          	                </li>          	                
          	                <li>
          	                  <span class="icon">
          	                    <i class="icon-tag"></i>
          	                  </span>
          	                  <a href="#">Tags</a>,
          	                  <a href="#">Nature</a>
          	                </li>
          	              </ul>
          	            </div>
          	            <!-- .widget -->
          	            <!-- .widget -->
          	            <!-- .widget -->
          	          </div>
          	          <!-- .columns -->
          	        </div>
          	        <!-- .work-details -->
          	      </div>
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