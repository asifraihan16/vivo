@extends('frontend.layouts.app')

@section('content')


      <!-- #header-wrap -->
      <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
          <div id="header-bottom-inner" class="site-header-bottom-inner ">
            <section class="hero page-title is-medium has-text-centered blog-single" style="background: #812323 url({{ asset('/public/frontend/assets/images/page-header/4.jpg') }}) no-repeat top center; background-size: cover;}">
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
                    <figure class="post-image">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ $value->img ? Storage::url($value->img) : '' }}"> 
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
                      <!-- .post-meta -->
                      <h2 class="entry-title"> {{ $data->title_detail }} </h2>
                    </div>
                    <!-- .entry-header -->
                    <div class="entry-content content">
                      {!! $data->desc !!}
                    </div>
                    <!-- .entry-content -->
                    
                    <!-- .entry-footer -->
                  </article>
                  
                  <!-- .blog-author -->
                  <!-- .pagination -->
                  <!-- .columns -->
                  
                  <!-- .comments-box -->
                  <br> 
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