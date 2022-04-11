<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vivo-User Panel</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ URL::asset('login/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ URL::asset('login/css/style.css') }}">
</head>

<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('frontend/assets/images/logo/vivo_logo.png') }}"
                                alt="sing up image">
                        </figure>
                        {{-- <a href="#" class="signup-image-link">Create an account</a> --}}
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form"
                            action="{{ url('user/post-login') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="your_name"></label>
                                <input type="email" name="email" id="your_name" placeholder="Your Email" />
                                @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="your_pass"></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" />
                                @if ($errors->has('password'))
                                    <span class="error">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="accept_privacy_policy" style="position: relative !important;">
                                    <input type="checkbox" name="accept_privacy_policy" id="accept_privacy_policy"
                                    class="form-control"
                                    style="display: inline;"
                                    required>
                                    Accept <a href="{{ route('frontend.privacy-policy') }}">Privacy Policy</a>
                                </label>
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Don't have an account ? <a href="{{ url('user/register') }}"
                                    class="signup-image-link">Sign up</a></span>
                        </div>
                        {{-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="{{ url('/user/auth/redirect/facebook') }}"><i
                                            class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="{{ url('/user/auth/redirect/google') }}"><i
                                            class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ URL::asset('login/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('login/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
