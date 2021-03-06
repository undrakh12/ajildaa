@extends('layouts.app')

@section('content')
<header class="header" uk-sticky="top: 0">
    <nav class="main-navbar uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
            <a href="{{ url()->previous() }}" class="uk-margin-small-left prev arrow-left" uk-icon="chevron-left"></a>
            <ul class="uk-navbar-nav">
                <li class="uk-active">
                    <a>Ажил хайх</a>
                </li>
            </ul>
        </div>

        <!-- <div class="uk-navbar-right uk-margin uk-margin-right">
            <a href="/" class="prev home" uk-icon="icon: home"></a>
        </div> -->
    </nav>
</header>
<div class="uk-container uk-container-center">
    <div class="uk-grid-small uk-grid-match uk-text-center uk-margin-top" uk-grid>
        <div class="uk-width-1-1">
            <div class="head-section ">
                <img src="images/logo.png" class="uk-responsive-width logo" alt="" uk-responsive>
            </div>

            <div class="search-section uk-margin-top">
                <h4 class="uk-text-bold uk-margin-medium-bottom">Нэвтрэх</h4>
                <form action="{{ route('login') }}" id="form" method="POST">
                    {{ csrf_field() }}
                    <div class="first-search-section">
                        <h6 class="uk-margin-small-bottom h6-title uk-margin-left uk-text-left">
                            <strong>И-мэйл</strong></h6>
                        <div class="uk-margin uk-margin-remove-top">
                            <div class="uk-inline search-inline">
                                <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: user"></a>
                                <input name="email" class="search-input uk-input" type="text" id="first">
                            </div>
                        </div>
                    </div>

                    <div class="second-search-section">
                        <h6 class="uk-margin-small-bottom uk-margin-left uk-text-left">
                            <strong>Нууц үг</strong></h6>
                        <div class="uk-margin uk-margin-remove-top">
                            <div class="uk-inline search-inline">
                                <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: lock"></a>
                                <input name="password" class="search-input uk-input" type="password" id="second">
                            </div>
                        </div>
                    </div>

                    <div class="third-section uk-margin-medium-top">

                        <button class="uk-button uk-button-primary btn login-btn" id="third">Нэвтрэх</button>
                        <a href="/register" class="uk-button uk-button-primary uk-margin-small-left btn register-btn" id="third">Бүртгүүлэх</a>
                    </div>
                </form>
                <p class="uk-margin-medium-top"><a class="uk-text" href="/register" style="color:#72d58e;">Нууц үгээ сэргээх</a></p>
            </div>

        </div>
    </div>
</div>
@endsection