<!DOCTYPE html>
<html>

<head>
    <title>Нэвтрэх</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#000" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/uikit.min.css" />

    <link rel="manifest" href="/manifest.json"/>

    <script src="js/jquery.min.js"></script>
</head>

<body>
    <header class="header" uk-sticky="top: 0">
        <nav class="main-navbar uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <a href="/home" class="uk-margin-small-left login" uk-icon="arrow-left"></a>
                <ul class="uk-navbar-nav">
                    <li class="uk-active">
                        <a>Ажил хайх</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <main class="body">
        <div class="uk-container uk-container-center">
            <div class="uk-grid-small uk-grid-match uk-text-center uk-margin-top" uk-grid>
                <div class="uk-width-1-1">
                    <div class="head-section ">
                        <img src="images/logo.png" class="uk-responsive-width logo" alt="" uk-responsive>
                    </div>

                    <div class="search-section uk-margin-top">
                        <h4 class="uk-text-bold uk-margin-medium-bottom">Нэвтрэх хэсэг</h4>
                        <form action="{{ route('login') }}" id="form" method="POST">
                            {{ csrf_field() }}
                            <div class="first-search-section">
                                <h6 class="uk-margin-small-bottom h6-title uk-margin-left uk-text-left">
                                    <strong>И-мэйл</strong></h6>
                                <div class="uk-margin uk-margin-remove-top">
                                    <div class="uk-inline search-inline">
                                        <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: user"></a>
                                        <input name="email" class="search-input uk-input" type="text" id="first" data-dependency="second">
                                    </div>
                                </div>
                            </div>

                            <div class="second-search-section">
                                <h6 class="uk-margin-small-bottom uk-margin-left uk-text-left">
                                    <strong>Нууц үг</strong></h6>
                                <div class="uk-margin uk-margin-remove-top">
                                    <div class="uk-inline search-inline">
                                        <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: lock"></a>
                                        <input name="password" class="search-input uk-input" type="password" id="second" data-dependency="third">
                                    </div>
                                </div>
                            </div>

                            <div class="third-section uk-margin-medium-top">

                                <button class="uk-button uk-button-primary btn" id="third">Нэвтрэх</button>
                            </div>
                        </form>
                        <p>Хэрвээ та бүртгэлгүй бол <a href="/register">энд</a> дарж бүртгүүлнэ үү.</p>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- JS -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <script src="js/app.js" async></script>

    <!-- <script>
        document.getElementsByClassName('post-link')[0]
            .addEventListener('click', function (event) {
                window.location.href = "post-job.html";
            });
    </script> -->
    <script>
        (function ($) {
            $.fn.enterAsTab = function (options) {
                var settings = $.extend({
                    'allowSubmit': false
                }, options);
                $(this).find('input, button').live("keydown", { localSettings: settings }, function (event) {
                    if (settings.allowSubmit) {
                        var type = $(this).attr("type");
                        if (type == "submit") {
                            return true;
                        }
                    }
                    if (event.keyCode == 13) {
                        var inputs = $(this).parents("form").eq(0).find(":input:visible:not(:disabled):not([readonly])");
                        var idx = inputs.index(this);
                        if (idx == inputs.length - 1) {
                            idx = -1;
                        } else {
                            inputs[idx + 1].focus(); // handles submit buttons
                        }
                        try {
                            inputs[idx + 1].select();
                        }
                        catch (err) {

                        }
                        return false;
                    }
                });
                return this;
            };
        })(jQuery);

        $("#form").enterAsTab({ 'allowSubmit': true });
    </script>
</body>

</html>

{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>buruu email</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>buruu password</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}