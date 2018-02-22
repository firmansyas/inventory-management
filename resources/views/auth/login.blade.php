<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/lib/font-awesome/css/font-awesome.css') }}">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/lib/metismenu/metisMenu.css') }}">

    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/lib/onoffcanvas/onoffcanvas.css') }}">

    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/lib/animate.css/animate.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="{{ asset('assets/css/style-switcher.css') }}">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
</head>
<body class="login">

    <div class="form-signin">
        <div class="text-center">
            <img src="assets/img/logo.png" alt="Metis Logo">
        </div>
        <hr>
        <div class="tab-content">
            <div id="login" class="tab-pane active">
                <form method="POST" action="{{ route('login') }}">
                    <p class="text-muted text-center">
                        Enter your email and password
                    </p>
                    {{ csrf_field() }}
                    <input id="email" type="email" placeholder="Email" class="form-control top" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <input id="password" type="password" placeholder="Password" class="form-control bottom" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>

    <!--jQuery -->
    <script src="{{ asset('assets/lib/jquery/jquery.js') }}"></script>

    <!--Bootstrap -->
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
