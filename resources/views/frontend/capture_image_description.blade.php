@extends('frontend.layouts.app')

@section('title', 'CAPTURE THE FUTURE')

<style>
    body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

ul,
li {
    list-style-type: none;
}

a {
    text-decoration: none;
}


.allcomments-wrapper .parent-allcomments {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 20px;
}

.allcomments-wrapper .parent-allcomments .image-box {
    width: 40px;
    height: 40px;
    border-radius: 50px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    -ms-border-radius: 50px;
    -o-border-radius: 50px;
}

.allcomments-wrapper .parent-allcomments .image-box img {
    width: 40px;
    height: 40px;
    border-radius: 50px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    -ms-border-radius: 50px;
    -o-border-radius: 50px;
}

.allcomments-wrapper .parent-allcomments .content-box {
    width: calc(100% - 60px);
}

.allcomments-wrapper .parent-allcomments .content-box .user-name {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 5px;
}

.allcomments-wrapper .parent-allcomments .content-box .allcomments {
    font-size: 16px;
    margin-bottom: 5px;
}

.allcomments-wrapper .parent-allcomments .content-box ul {
    padding-left: 0;
    margin: 0;
    margin-bottom: 20px;
}

.allcomments-wrapper .parent-allcomments .content-box ul li a {
    font-size: 16px;
    text-transform: capitalize;
}

.reply-comment {
    margin-left: 40px;
}

.allcomments-wrapper .parent-allcomments .content-box textarea {
    width: 100%;
    min-height: 60px;
    box-shadow: none;
    outline: none;
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
    margin-bottom: 20px;
}

.allcomments-wrapper .parent-allcomments .content-box .btn {
    background: rgb(0, 81, 255);
    font-size: 15px;
    text-transform: uppercase;
    border: none;
    outline: none;
    padding: 5px 0px;
    width: 96px;
    text-align: center;
    color: white;
}



.allcomments-wrapper .global-comment textarea {
    width: 100%;
    min-height: 60px;
    box-shadow: none;
    outline: none;
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
    margin-bottom: 20px;
}

.allcomments-wrapper .global-comment .btn {
    background: rgb(0, 81, 255);
    font-size: 15px;
    text-transform: uppercase;
    border: none;
    outline: none;
    padding: 5px 0px;
    width: 130px;
    text-align: center;
    color: white;
}
</style>
@section('content')
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/banner-images/Gallery.webp') }}) no-repeat top center; background-size: cover;}">
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

                <section class="section portfolio-single is-clearfix">
                    <div class="container">
                        <div class="columns is-variable is-multiline is-12 ">
                            <div class="column aos-init is-6">
                                <div class="work-item" style="position: relative;">
                                    <div class="photo-like-area" id="photo-like-area-{{ $image_details->id }}">
                                        @if(auth()->user())
                                            <a href="javascript:;" class="{{ $image_details->liked_by_user ? 'liked' : 'unliked' }}"
                                                onclick="likeCapturePhoto({{ $image_details->id }})" id="photo-like-btn-{{ $image_details->id }}">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        @else
                                        <a href="javascript:;" class="likes unliked">
                                            <i class="fa fa-heart"></i>
                                            {{ $image_details->likes_count }}
                                        </a>
                                        @endif
                                    </div>

                                    <figure>
                                        <a href="{{ $image_details->image_path ? Storage::url($image_details->image_path) : '' }}"
                                            class="mfp-lightbox mfp-image" title="{{ $image_details->title }}">
                                            <img alt="{{ $image_details->title }}"
                                                src="{{ $image_details->image_path ? Storage::url($image_details->image_path) : '' }}">
                                            {{-- <figcaption>
                                                <ul class="social">
                                                    <li>
                                                        <span class="icon">
                                                            <i class="icon-magnifier"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </figcaption> --}}
                                        </a>
                                    </figure>

                                </div>
                            </div>

                            <div class="column is-narrow is-6">
                                <div class="work-details sidebar-fixed">
                                    <div class="columns is-variable is-multiline">
                                        <div class="column widget is-12 widget-links ">
                                            <h3 class="widget-title ">Comment</h3>
                                           

                                            <div class="allcomments-wrapper">
                                                <div class="first-allcomments">
                                                    @foreach ($comments as $comment)
                                                    <div class="parent-allcomments">
                                                        <div class="image-box">
                                                            @if ($comment->comment_by)
                                                            <img alt="Author Image" src="{{ $comment->comment_by->img ? Storage::url($comment->comment_by->img) : asset('frontend/assets/images/profile.png') }}">
                                                            @else
                                                            <img alt="Author Image" src="{{ asset('frontend/assets/images/profile.png') }}">
                                                            @endif
                                                        </div>
                                                        <div class="content-box">
                                                            <div class="user-name">{{ $comment->comment_by ? $comment->comment_by->name : $comment->comment_by->name }}</div>
                                                            <div class="allcomments">{{ $comment->comment_body }}</div>
                                                            @foreach ($comment->replies as $reply)
                                                            <div class="parent-allcomments reply-comment">
                                                                <div class="image-box">
                                                                    @if ($reply->comment_by)
                                                                    <img alt="Author Image" src="{{ $reply->comment_by->img ? Storage::url($reply->comment_by->img) : asset('frontend/assets/images/profile.png') }}">
                                                                    @else
                                                                    <img alt="Author Image" src="{{ asset('frontend/assets/images/profile.png') }}">
                                                                    @endif
                                                                </div>
                                                                <div class="content-box">
                                                                    <div class="user-name">{{ $reply->comment_by ? $reply->comment_by->name : $reply->comment_author_name }}</div>
                                                                    <div class="allcomments">{{ $reply->comment_body }}</div>
                                                
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @if(auth()->user())
                                                            <div class="form-group">
                                                                <input type="hidden" value="{{$comment->id}}" name="parrent_comment_id" id="nasted_comment_parrent_comment_id">
                                                                <input type="hidden" value="{{$image_details->id}}" name="capture_future_id" id="nasted_comment_capture_future_id">
                                                                <textarea name="comment_body" id="nasted_comment_comment_body"></textarea>
                                                                <button class="btn" id="nasted_comment_submit" onclick="nastedComment()">Reply</button>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                  

                                                    @endforeach
                                                    <div class="global-comment">
                                                        @if(auth()->user())
                                                        <div class="form-group">
                                                                <input type="hidden" value="{{$image_details->id}}" name="capture_future_id" id="capture_future_id">
                                                                <textarea name="comment_body" id="comment_body"></textarea>
                                                            <button class="btn"  id="nasted_comment_submit" onclick="mainComment()" >Comment</button>
                                                        </div>
                                                        @else 
                                                         Log in to Like or Commnet 
                                                        @endif
                                                    </div>
                                                </div>
                                        
                                            </div>

                                            
                                        </div>
                                        
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

@section('styles')
    <style>
        .icon i {
            color: #4768FF;
        }

        .portfolio-single .widget-links ul li a:hover {
            color: #4768FF;
        }
    </style>
@endsection
