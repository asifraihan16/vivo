@extends('frontend.layouts.app')

@section('title', 'Blog')

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/page-header/1.jpg') }}) no-repeat top center; background-size: cover;}">
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
                                    <img alt="Joo - Niche Multi-Purpose HTML Template"
                                        src="{{ $blog_details->img ? Storage::url($blog_details->img) : '' }}">
                                </figure>
                                <div class="entry-header">
                                    <div class="post-meta">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="icon-clock"> </i>
                                                </span>
                                                <span> {{ date('M-d-Y', strtotime($blog_details->created_at)) }} </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .post-meta -->
                                    <h2 class="entry-title"> {{ $blog_details->title }} </h2>
                                </div>
                                <!-- .entry-header -->
                                <div class="entry-content content">
                                    {!! $blog_details->desc !!}
                                </div>
                                <!-- .entry-content -->

                                <!-- .entry-footer -->
                            </article>
                            <!-- .comments-box -->
                            <br>

                            <h1 class="heading-title style-2">comments</h1>
                            <ul class="comment-list comments comments-box ">
                                @foreach ($comments as $comment)
                                <!-- .comment-box -->
                                <li class="media comment comment-box">
                                    <figure class="media-left avatar">
                                        <p class="image">
                                            @if ($comment->user_id)
                                            <img alt="Author Image" src="{{ $comment->img ? Storage::url($comment->img) : asset('frontend/assets/images/comments/1.png') }}">
                                            @else
                                            <img alt="Author Image" src="{{ asset('frontend/assets/images/comments/1.png') }}">
                                            @endif
                                        </p>
                                    </figure>
                                    <!-- .avatar -->
                                    <div class="media-content comment-body">
                                        <div class="level">
                                            <div class="level-left">
                                                <span class="comment-author">
                                                    <a href="#">{{ $comment->user_id ? $comment->name : $comment->comment_author_name }}</a>
                                                </span>
                                                <span class="comment-date">
                                                    {{-- <a href="#">{{ date_format(date_create($comment->created_at), 'd M, Y') }}</a> --}}
                                                    <a href="#">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</a>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="content">
                                            <p>{{ $comment->comment_body }}</p>
                                        </div>
                                    </div>
                                    <!-- .comment-body -->
                                </li>
                                <!-- .comment-box -->
                                @endforeach

                            </ul>
                            <!-- .comments-box -->
                            <h1 class="heading-title style-2">Leave a Reply</h1>
                            <p class="comment-notes">
                                <span id="email-notes">Your email address will not be published.</span> Required fields are
                                marked
                                <span class="required">*</span>
                            </p>
                            <form action="{{ route('blog-comments.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="blog_id" id="blog_id" value="{{ $blog_details->id }}">
                                <div class="field ">
                                    <div class="control is-expanded">
                                        <textarea class="textarea" name="comment_body" placeholder="Your Comment" required></textarea>
                                    </div>
                                </div>

                                @guest
                                <!-- .field -->
                                <div class="field is-horizontal">
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control is-expanded">
                                                <input class="input" type="text" name="comment_author_name" placeholder="Your Name *" required>
                                            </div>
                                        </div>
                                        <!-- .field -->
                                        <div class="field">
                                            <div class="control is-expanded">
                                                <input class="input" type="email" name="comment_author_email" placeholder="Your Email *" required>
                                            </div>
                                        </div>
                                        <!-- .field -->
                                    </div>
                                    <!-- .field-body -->
                                </div>
                                @endguest
                                <!-- .field -->
                                <div class="field ">
                                    <div class="control ">
                                        <button class="button is-danger" type="submit">post comment</button>
                                    </div>
                                </div>
                                <!-- .field -->
                            </form>

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


@section('styles')
    <style>
        .icon i {
            color: #4768FF;
        }

    </style>
@endsection
