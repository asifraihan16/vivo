@extends('frontend.layouts.app')

@section('title', 'Privacy Policy')

@section('styles')
    <style>
        .beefup__head {
            white-space: normal !important;
        }

    </style>
@endsection

@section('content')
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered blog-single"
                    style="background: #812323 url({{ asset('/frontend/assets/images/page-header/3.jpg') }}) no-repeat top center; background-size: cover;}">
                    <div class="hero-body">
                        <div class="container">
                            <h1>Vivo Moments Image Licensing</h1>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <section class="section  is-clearfix" style="background-color: #f6f6f6;">
                    <div class="container" style="background-color: #fff;">
                        <div class="m-4" style="padding: 50px 40px;">
                            
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;'><span style="font-size:16px;line-height:107%;font-family:vivo;">When any participants share pictures in vivo moments, vivo moments keep all the rights to use participant&rsquo;s photos and data (if required).</span></p>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:normal;font-size:15px;'><span style="font-size:16px;font-family:vivo;">Vivo moments will process your personal data and photos you share only where there are legal grounds to do so. Those grounds include the following:</span></p>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:normal;font-size:15px;'><strong><span style="font-size:16px;font-family:vivo;">(a)Consent</span></strong><span style="font-size:16px;font-family:vivo;">: You have provided your consent to the processing of your personal data and use your photos.</span></p>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:normal;font-size:15px;'><strong><span style="font-size:16px;font-family:vivo;">(b)Legal obligations</span></strong><span style="font-size:16px;font-family:vivo;">: The processing of your personal data and photos you shared is required or authorized by applicable laws, or relates to suspected unlawful activity, serious misconduct, legal proceedings or law enforcement.</span></p>
                            <p><br></p>

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
