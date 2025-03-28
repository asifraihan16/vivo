    <!-- #content-main-wrap -->
    <div id="footer-wrap" class="is-clearfix">
        <footer id="footer" class="site-footer">
            <div id="footer-inner" class="site-footer-inner container">
                <div class="columns is-variable is-12 is-multiline">
                    {{-- <div class="column is-2">
                        <div class="widget widget-links">
                            <h3 class="widget-title ">Popular Links</h3>
                            <ul>
                                <li>
                                    <a href="#">X70 Pro</a>
                                </li>
                                <li>
                                    <a href="#">V23e</a>
                                </li>
                                <li>
                                    <a href="#">V23 5G</a>
                                </li>
                                <li>
                                    <a href="#">V21</a>
                                </li>
                                <li>
                                    <a href="#">Y21T</a>
                                </li>
                                <li>
                                    <a href="#">Y21</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .widget -->
                    </div> --}}

                    <!-- .column -->
                    <div class="column is-3">
                        <div class="widget widget-links">
                            <h3 class="widget-title ">Support</h3>
                            <ul>
                                <li>
                                    <a href="{{ route('frontend.faqs') }}">FAQs</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .widget -->
                    </div>

                    <div class="column is-3">
                        <div class="widget widget-links">
                            <h3 class="widget-title ">Terms and Conditions</h3>
                            <ul>
                                <li>
                                    <a href="{{ route('frontend.image-licensing') }}">Image Licensing</a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.privacy-policy') }}">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .widget -->
                    </div>
                    <!-- .column -->
                    <div class="column is-3">
                        <div class="widget widget-links">
                            <h3 class="widget-title ">Explore vivo</h3>
                            <ul>
                                {{-- <li>
                                    <a href="#">Info</a>
                                </li>
                                <li>
                                    <a href="#">Press</a>
                                </li> --}}
                                <li>
                                    <a href="https://www.vivo.com/bd" style="text-transform: none;">vivo BD</a>
                                </li>
                                <li>
                                    <a href="#">Sitemap</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .widget -->
                    </div>
                    <!-- .column -->
                    <div class="column is-3">
                        <div class="widget widget-links">
                            <h3 class="widget-title ">Chat Support (Sat-Thu 9:00-18:00 excluding public holidays)</h3>
                            <h3 class="widget-title ">Email Us(Reply in 24h)</h3>
                            <h3 class="widget-title">
                                (Sat-Thu 9:00 - 18:00 excluding public holidays)
                                <br />
                                <span style="font-size: 2rem !important;color: #415fff;"">+8809610991079</span>
                            </h3>

                        </div>
                        <!-- .widget -->
                    </div>
                </div>
                <!-- .columns -->
            </div>
            <!-- #footer-inner -->
        </footer>
        <!-- #footer -->
    </div>
    <!-- #footer-wrap -->

    <!-- #footer-bottom-wrap -->
    <div id="footer-bottom-wrap" class="is-clearfix" style="">
        <div id="footer-bottom" class="site-footer-bottom">
            <div id="footer-bottom-inner" class="site-footer-bottom-inner ">
                <section class="section footer-bottom-content"
                    style="text-align: left;background-color: #fff;padding : 30px">
                    <div class="global-social-links style-1">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/vivoBangladesh">
                                    <span class="icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/BangladeshVivo">
                                    <span class="icon">
                                        <i class="fab fa-twitter"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/vivo_bangladesh/">
                                    <span class="icon">
                                        <i class="fab fa-instagram"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/c/vivoBangladesh">
                                    <span class="icon">
                                        <i class="fab fa-youtube"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/vivo-bangladesh/">
                                    <span class="icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
                <!-- .footer-bottom-content -->
            </div>
            <!-- #footer-bottom-inner -->
        </div>
        <!-- #footer-bottom -->
    </div>

    <div id="footer-bottom-wrap" class="is-clearfix" style="">
        <div id="footer-bottom" class="site-footer-bottom">
            <div id="footer-bottom-inner" class="site-footer-bottom-inner ">
                <section class="section footer-bottom-content"
                    style="text-align: left;background-color: #415FFF;padding : 30px">
                    <div class="container">
                        {{-- <h2 class="display-none">footer</h2> --}}
                        <span class="footer-copyright">
                            © {{date('Y')}} Haicheng Mobile Company (BD) Ltd. All rights reserved.
                            <a href="{{ route('frontend.privacy-policy') }}" style="color: #fff;">|
                                Privacy Policy</a>
                            <a href="{{ route('frontend.warranty-terms') }}" style="color: #fff;"> |
                                Warranty Terms</a>
                            <a href="#" style="color: #fff;"> | Privacy Support</a>
                        </span>
                    </div>
                </section>
                <!-- .footer-bottom-content -->
            </div>
            <!-- #footer-bottom-inner -->
        </div>
        <!-- #footer-bottom -->
    </div>
    <!-- show floating buttons -->

    </div>
    <!-- #site-wrap -->
    <script src="{{ URL::asset('frontend/assets/js/vendor.min.js?v=1557279752872') }}"></script>
    <script src="{{ URL::asset('frontend/assets/js/scripts.min.js?v=1557279752872') }}"></script>
    <script src="{{ URL::asset('frontend/assets/js/custom.js?v=1557279752872') }}"></script>
   
    

    </script>

    {{-- <script defer src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

    {{-- @if (Route::currentRouteName() == 'frontend.chronicle_magazine_deatils')
            <script
            src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
            crossorigin="anonymous"
        ></script>

        <script src="{{ URL::asset('build/js/flipbook.min.js') }}"></script>
      
    @else
   
        <script src="{{ URL::asset('frontend/assets/js/scripts.min.js?v=1557279752872') }}"></script>
    @endif --}}
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.lazy').Lazy();
        });

        function likeGalleryPhoto(photo_id) 
        {
            var actionUrl = '{{ route("user.like-gallery-photo", ["photo_gallery"=> ":photo_id"]) }}'
            actionUrl = actionUrl.replace(':photo_id', photo_id);
            $.ajax({
                url: actionUrl,
                method: 'POST',
                success: function(res) {
                    // $('#photo-like-btn-' + photo_id).css('color', '#4768FF')
                    if (res.status == 'success' && res.type == 'like') {
                        $('#photo-like-btn-' + photo_id).removeClass('unliked')
                        $('#photo-like-btn-' + photo_id).addClass('liked')
                        $('#liked-bubble-' + photo_id).addClass('bubble-motion')
                        
                        setTimeout(() => {
                            $('#liked-bubble-' + photo_id).removeClass('bubble-motion')
                        }, 600);

                    } else {
                        // $('#photo-like-btn-' + photo_id).removeClass('liked')
                        // $('#photo-like-btn-' + photo_id).addClass('unliked')
                        // alert(res.message)
                        // new swal(res.message);

                        if (res.code == 508) {
                            new swal({
                                // position: 'top-end',
                                icon: 'warning',
                                // title: 'Oops...',
                                text: res.message,
                                showConfirmButton: false,
                                timer: 1500,
                                // toast: true
                            })
                        }
                    }
                },
                error: function(err) {
                    if (err.status == 401) {
                        // alert('Please login to like photo')
                        new swal({
                            // position: 'top-end',
                            icon: 'warning',
                            // title: 'Oops...',
                            text: "You have to login to like photo",
                            showConfirmButton: false,
                            timer: 1500,
                            // toast: true
                        })
                    }
                }
            })
        }

        function likeCapturePhoto(photo_id) 
        {
            var actionUrl = '{{ route("user.like-capture-photo", ["capture_future_id"=> ":capture_future_id"]) }}'
            actionUrl = actionUrl.replace(':capture_future_id', photo_id);
            $.ajax({
                url: actionUrl,
                method: 'POST',
                success: function(res) {
                    // $('#photo-like-btn-' + photo_id).css('color', '#4768FF')
                    if (res.status == 'success' && res.type == 'like') {
                        $('#photo-like-btn-' + photo_id).removeClass('unliked')
                        $('#photo-like-btn-' + photo_id).addClass('liked')
                        $('#liked-bubble-' + photo_id).addClass('bubble-motion')
                        
                        setTimeout(() => {
                            $('#liked-bubble-' + photo_id).removeClass('bubble-motion')
                        }, 600);

                        $('#photo-like-btn-' + photo_id).html(`<i class="fa fa-heart"></i> ${res.count_total}`);
                    

                    } else {
                        // $('#photo-like-btn-' + photo_id).removeClass('liked')
                        // $('#photo-like-btn-' + photo_id).addClass('unliked')
                        // alert(res.message)
                        // new swal(res.message);

                        if (res.code == 508) {
                            new swal({
                                // position: 'top-end',
                                icon: 'warning',
                                // title: 'Oops...',
                                text: res.message,
                                showConfirmButton: false,
                                timer: 1500,
                                // toast: true
                            })
                        }
                    }
                },
                error: function(err) {
                    if (err.status == 401) {
                        // alert('Please login to like photo')
                        new swal({
                            // position: 'top-end',
                            icon: 'warning',
                            // title: 'Oops...',
                            text: "You have to login to like photo",
                            showConfirmButton: false,
                            timer: 1500,
                            // toast: true
                        })
                    }
                }
            })
        }

        function nastedComment() 
        {
            

            var parrent_comment_id = $('#nasted_comment_parrent_comment_id').val();
            var capture_future_id = $('#nasted_comment_capture_future_id').val();
            var comment_body = $('#nasted_comment_body' + parrent_comment_id).val();
        

            var actionUrl = '{{ route("user.comment-capturephoto", ["capture_future_id"=> ":capture_future_id","parent_comment_id"=> ":parent_comment_id","comment_body"=> ":comment_body"]) }}'
            actionUrl = actionUrl.replace(':capture_future_id', capture_future_id);
            actionUrl = actionUrl.replace(':parent_comment_id', parrent_comment_id);
            actionUrl = actionUrl.replace(':comment_body', comment_body);
            $.ajax({
                url: actionUrl,
                method: 'POST',
                success: function(res) {
                    // $('#photo-like-btn-' + photo_id).css('color', '#4768FF')
                        setTimeout(() => {
                            location.reload();
                        }, 10);

                },
                error: function(err) {
                    if (err.status == 401) {
                        // alert('Please login to like photo')
                        new swal({
                            // position: 'top-end',
                            icon: 'warning',
                            // title: 'Oops...',
                            text: "You have to login to like photo",
                            showConfirmButton: false,
                            timer: 1500,
                            // toast: true
                        })
                    }
                }
            })
        }

        function mainComment() 
        {
            

            var capture_future_id = $('#capture_future_id').val();
            var comment_body = $('#comment_body').val();
            
            var actionUrl = '{{ route("user.main_comment-capturephoto", ["capture_future_id"=> ":capture_future_id","comment_body"=> ":comment_body"]) }}'
            actionUrl = actionUrl.replace(':capture_future_id', capture_future_id);
            actionUrl = actionUrl.replace(':comment_body', comment_body);
            $.ajax({
                url: actionUrl,
                method: 'POST',
                success: function(res) {
                    // $('#photo-like-btn-' + photo_id).css('color', '#4768FF')
                        setTimeout(() => {
                            location.reload();
                        }, 10);

                },
                error: function(err) {
                    if (err.status == 401) {
                        // alert('Please login to like photo')
                        new swal({
                            // position: 'top-end',
                            icon: 'warning',
                            // title: 'Oops...',
                            text: "You have to login to like photo",
                            showConfirmButton: false,
                            timer: 1500,
                            // toast: true
                        })
                    }
                }
            })
        }

    </script>

    @yield('scripts')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2369R89R46"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2369R89R46');
    </script>
    </body>

    </html>
