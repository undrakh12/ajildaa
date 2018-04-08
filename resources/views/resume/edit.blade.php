@extends('layouts.app')

@section('content')
    <main id="barba-wrapper">
        <div class="barba-container" data-prev="home" data-next="job">
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

                    <div class="uk-navbar-right uk-margin uk-margin-right">
                        <a href="/" class="prev home" uk-icon="icon: home"></a>
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
                            <form method="post" action="/resume/{{ $resume->id }}">
                                {{ csrf_field() }}
                                <div class="resume uk-margin-top">
                                    <div class="company-input uk-margin-large-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Сургууль</h6>
                                        <input class="uk-input" type="text" name="education" placeholder="ШУТИС, МУИС г.м" value="{{ $resume->education }}">
                                    </div>
                                    <div class="company-input uk-margin-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Ажлын туршлага</h6>
                                        <input class="uk-input" type="text" name="experience" placeholder="1 жил Вүүвүүд г.м" value="{{ $resume->experience }}">
                                    </div>
                                    <div class="company-input uk-margin-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Чадварууд</h6>
                                        <input class="uk-input" type="text" name="skill" placeholder="PHP, Java г.м" value="{{ $resume->skill }}">
                                    </div>
                                    <div class="uk-margin-top uk-margin-bottom">
                                        <h6 class="uk-text-bold uk-margin-bottom">Миний тухай дэлгэрэнгүй</h6>
                                        <textarea class="uk-textarea" rows="5" name="additional">{{ $resume->additional }}</textarea>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input name="_method" type="hidden" value="patch">
                                    <button type="submit" class="uk-button uk-button-primary btn">Засах</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection