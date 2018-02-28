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
                            <div class="uk-text-center uk-padding">
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="uk-button uk-button-primary btn">Гарах</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>

                        </div>


                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection