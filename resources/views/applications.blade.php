@extends('layouts.app')

@section('content')

    <main id="barba-wrapper">
        <div class="barba-container" data-prev="home"  data-next="view-job">
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
                        <h3>Ирсэн хүсэлтүүд</h3>
                    </div>
                </div>
                <div class="search-result" style="margin-left: 5vw;">
                    <div class="uk-margin-medium-top">
                        <ul class="uk-list uk-list-divider">
                            @foreach($receivedApplications as $application)
                            <li class="all-result">
                                <div class="uk-card uk-card-small uk-card-default">
                                    <div class="uk-float-left job-list">
                                        <a href="/job/{{ $application->job->id }}" class="next">
                                                <h5>{{ $application->job->job_name }}</h5>
                                                <h6 class="days"></h6>
                                                <a href="/resume/{{ $resumeId }}">Хүсэлт илгээгчийн анкет харах</a>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection