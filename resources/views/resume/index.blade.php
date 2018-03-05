@extends('layouts.app')

@section('content')
    <main id="barba-wrapper">
        <div class="barba-container" data-prev="home" data-next="job">
            <header class="header" uk-sticky="top: 0">
                <nav class="main-navbar uk-navbar-container" uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="/home" class="uk-margin-small-left prev arrow-left" uk-icon="arrow-left"></a>
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a>Ажил хайх</a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-navbar-right uk-margin uk-margin-right">
                        <a href="/home" class="prev home" uk-icon="icon: home"></a>
                    </div>
                </nav>
            </header>

            <section class="body">
                <div class="uk-container uk-container-center">
                    <div class="uk-grid-small uk-margin-top" uk-grid>
                        <div class="uk-width-1-1">
                            <div class="job-header">
                                <div class="job-description">
                                    <h4 class="uk-text-bold">Миний анкет</h4>
                                </div>
                            </div>
                            @foreach($resume as $re)
                                <div class="resume uk-margin-top">
                                    <div class="company-input uk-margin-large-top">
                                        <h4 class="uk-text-bold uk-margin-small-bottom">Сургууль</h4>
                                        <h6 class="uk-text-bold uk-margin-small-bottom">{{ $re->education }}</h6>
                                    </div>
                                    <div class="company-input uk-margin-top">
                                        <h4 class="uk-text-bold uk-margin-small-bottom">Ажлын туршлага</h4>
                                        <h6 class="uk-text-bold uk-margin-small-bottom">{{ $re->experience }}</h6>
                                    </div>
                                    <div class="company-input uk-margin-top">
                                        <h4 class="uk-text-bold uk-margin-small-bottom">Чадварууд</h4>
                                        <h6 class="uk-text-bold uk-margin-small-bottom">{{ $re->skill }}</h6>
                                    </div>
                                    <div class="uk-margin-top uk-margin-bottom">
                                        <h4 class="uk-text-bold uk-margin-bottom">Миний тухай дэлгэрэнгүй</h4>
                                        <h6 class="uk-text-bold uk-margin-bottom">{{ $re->additional }}</h6>
                                    </div>
                                    <a href="/resume/{{ $re->id }}/edit" class="uk-button uk-button-primary btn">Засах</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection