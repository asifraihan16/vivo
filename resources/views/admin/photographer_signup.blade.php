<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vivo | Photographer Signup</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ URL::asset('login/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('login/css/style.css') }}">
</head>

<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <p style="margin: 0; padding: 0">Photographer</p>
                        <h2 class="form-title mt-0">Sign up</h2>

                        <form method="POST" class="register-form" id="register-form" action="{{ route('photographer.signup') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"
                                    value="{{ old('name') }}" />
                                @if ($errors->has('name'))
                                    <span class="error">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" />
                                @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" />
                                @if ($errors->has('password'))
                                    <span class="error">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit"
                                    value="Register" />
                            </div>
                        </form>

                        <br>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-2">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif (session()->has('error'))
                            <div class="alert alert-danger mt-2">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ URL::asset('admin/assets/images/vivo_logo.png') }}" alt="sing up image">
                        </figure>
                        <a href="{{ route('photographer.login') }}" class="signup-image-link">Already have an account</a>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ URL::asset('login/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('login/js/main.js') }}"></script>

</html>
