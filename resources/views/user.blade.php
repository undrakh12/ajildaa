@extends('layouts.app')

@section('content')
    <main id="barba-wrapper">
        <div class="barba-container" data-prev="home" data-next="home">
            <header class="header" uk-sticky="top: 0">
                <nav class="main-navbar uk-navbar-container" uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="/home" class="uk-margin-small-left arrow-left" uk-icon="arrow-left"></a>
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="/home">Ажил хайх</a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-navbar-right uk-margin uk-margin-right">
                        <a href="/home" class="home" uk-icon="icon: home"></a>
                    </div>
                </nav>
            </header>

            <section class="body apply-body">

                <div class="uk-container uk-container-center">
                    <div class="uk-grid-small uk-margin-top" uk-grid>
                        <div class="uk-width-1-1">
                            <div class="job-header">
                                <div class="job-description">
                                    <h4 class="uk-text-bold">Миний профайл</h4>
                                </div>
                            </div>

                            <div class="resume uk-margin-top">
                                <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                                    <h6 class="uk-card-title uk-text-bold">{{ Auth::user()->name }}</h6>
                                    <span>И-мэйл : {{ Auth::user()->email }}</span>
                                    <span>Хэрэглэгчийн төрөл : {{ Auth::user()->type }}</span>
                                </div>
                            </div>
                            @if(Auth::user()->type == 'student')
                            <a href="/resume">Миний анкет</a>
                            @endif
                            @if(Auth::user()->type == 'employer')
                            <a href="/applications">Ирсэн хүсэлтүүдийг харах</a>
                            @endif
                            <div class="uk-text-center uk-padding">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="uk-button uk-button-primary btn">Гарах</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <h4>Хадгалсан зарууд</h4>
                    <ul class="uk-list uk-list-divider" style="background-color: #fff">
                        <li class="uk-padding uk-padding-small">
                            <div class="uk-clearfix">
                                <div class="uk-float-left job-list">
                                    <a href="/view-job" class="next">
                                        <h5>job->job_name </h5>
                                        <h6>Монгол хуушуур
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                        </h6>
                                        <h6>job->job_location</h6>
                                        <h6 class="days"> $job->created_at </h6>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="uk-padding uk-padding-small">
                            <div class="uk-clearfix">
                                <div class="uk-float-left job-list">
                                    <a href="/view-job" class="next">
                                        <h5>job->job_name </h5>
                                        <h6>Монгол хуушуур
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                            <span uk-icon="star"></span>
                                        </h6>
                                        <h6>job->job_location</h6>
                                        <h6 class="days"> $job->created_at </h6>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
@endsection