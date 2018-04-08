@extends('layouts.app')

@section('content')
    <main id="barba-wrapper">
        <div class="barba-container" data-prev="home" data-next="home">
            <header class="header" uk-sticky="top: 0">
                <nav class="main-navbar uk-navbar-container" uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="/" class="uk-margin-small-left arrow-left" uk-icon="chevron-left"></a>
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a>Ажил хайх</a>
                            </li>
                        </ul>
                    </div>

                    <form action="{{ route('logout') }}" method="POST" class="uk-navbar-right uk-margin uk-margin-right">
                        {{ csrf_field() }}
                        <button type="submit" class="home" uk-icon="icon: sign-out"></a>
                    </form>
                </nav>
            </header>

            <section class="body apply-body" uk-height-viewport="expand: true">

                <div class="uk-container uk-container-center">
                    <div class="uk-grid-small uk-margin-top" uk-grid>
                        <div class="uk-width-1-1">
                            <div class="job-header uk-text-center">
                                <div class="job-description">
                                    <h4 class="uk-text">Миний профайл</h4>
                                </div>
                            </div>

                            <div class="uk-card uk-card-default uk-margin-large-top uk-width-1-2@m">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom">{{ Auth::user()->name }}</h3>
                                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">{{ Auth::user()->created_at }}</time></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <h5 class="uk-margin-small-bottom"><strong>И-мэйл: </strong>{{ Auth::user()->email }}</h5>
                                    <h5 class="uk-margin-small-bottom"><strong>Tөрөл: </strong>{{ Auth::user()->type }}</h5>
                                </div>
                                <div class="uk-card-footer uk-text-center">
                                @if(Auth::user()->type == 'student')
                                                                <a href="/resume" class="uk-button uk-button-primary btn2">Анкет харах</a>
                                                                @endif
                                                                @if(Auth::user()->type == 'employer')
                                                                <a href="/applications" class="uk-button uk-button-primary btn2">Хүсэлтүүд</a>
                                                                @endif    
                                </div>
                            </div>
                                                        
                        
                        </div>
                    </div>
                    <!-- <h4 class="uk-text-bold">Хадгалсан зарууд</h4>
                    <ul class="uk-list uk-list-divider" style="background-color: #fff">
                        <li class="uk-padding uk-padding-small">
                            <div class="uk-clearfix">
                                <div class="uk-float-left job-list">
                                    <a href="/job/3" class="next">
                                        <h5>VueJS developer </h5>
                                        <h6>Woovoo ххк
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                        </h6>
                                        <h6>Баянгол дүүрэг</h6>
                                        <h6 class="days"> 2018-03-07 05:49 </h6>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="uk-padding uk-padding-small">
                            <div class="uk-clearfix">
                                <div class="uk-float-left job-list">
                                    <a href="/job/2" class="next">
                                        <h5>Зөөгч </h5>
                                        <h6>Modern nomads
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                        </h6>
                                        <h6>Xан-уул дүүрэг</h6>
                                        <h6 class="days"> 2018-03-07 06:49 </h6>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="uk-padding uk-padding-small">
                            <div class="uk-clearfix">
                                <div class="uk-float-left job-list">
                                    <a href="/job/1" class="next">
                                        <h5>Бариста </h5>
                                        <h6>Modern nomads
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                        </h6>
                                        <h6>Xан-уул дүүрэг</h6>
                                        <h6 class="days"> 2018-03-08 06:49 </h6>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </section>
        </div>
    </main>
@endsection