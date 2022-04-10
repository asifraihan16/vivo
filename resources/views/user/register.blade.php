<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vivo-Admin Panel</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ URL::asset('login/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ URL::asset('login/css/style.css') }}">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="{{url('user/post-register')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}"/>
                                @if ($errors->has('name'))
                                   <span class="error">{{ $errors->first('name') }}</span>
                                 @endif
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"/>
                                @if ($errors->has('email'))
                                   <span class="error">{{ $errors->first('email') }}</span>
                                 @endif
                            </div>
                            <div class="form-group">
                                <label for="contact_no"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="contact" id="contact" placeholder="Your Contact No" value="{{ old('contact') }}"/>
                                @if ($errors->has('contact_no'))
                                   <span class="error">{{ $errors->first('contact') }}</span>
                                 @endif
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                                @if ($errors->has('password'))
                                   <span class="error">{{ $errors->first('password') }}</span>
                                 @endif
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>

                        {{-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="{{ url('/user/auth/redirect/facebook') }}"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="{{ url('/user/auth/redirect/google') }}"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{URL::asset('admin/assets/images/vivo_logo.png')}}" alt="sing up image"></figure>
                        <a href="{{url('user/login')}}" class="signup-image-link">Already have an account</a>
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
