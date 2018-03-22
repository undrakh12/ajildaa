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
                        <div class="uk-width-3-4">
                            <div class="uk-inline search-inline">
                                <input class="search-input uk-input" type="text">
                                <a class="uk-form-icon" href="#" uk-icon="icon: search"></a>
                            </div>
                        </div>
                        <div class="uk-width-1-4 padding-0">
                            <button class="uk-button uk-button-default btn-filter">Шүүлтүүр</button>
                        </div>


                    </div>
                </div>

                <div class="search-result">
                    <div class="uk-margin-small-top">

                        <ul id="my-id" class="uk-list search-result">
                            <li class="all-result">
                                <ul class="uk-list uk-list-divider">
                                    @foreach($jobs as $job)
                                    <li onclick='window.location.href="/job/{{ $job->id }}"' class="uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-padding-remove-left uk-padding-remove-right nav-list">
                                        <div class="uk-clearfix">
                                            <div class="uk-float-left job-list uk-padding-small">
                                                
                                                <div class="content">
                                                    <h5>{{ $job->job_name }}</h5>
                                                    <h6>And Global Systems LLC     
                                                    <div>   
                                                        <span class="star-icon" uk-icon="icon: star; ratio:0.7;" style="margin: -2px !important;"></span>
                                                        <span class="star-icon" uk-icon="icon: star; ratio:0.7;" style="margin: -2px !important;"></span>
                                                        <span class="star-icon" uk-icon="icon: star; ratio:0.7;" style="margin: -2px !important;"></span>
                                                        <span class="star-icon" uk-icon="icon: star; ratio:0.7;" style="margin: -2px !important;"></span>
                                                        <span class="star-icon" uk-icon="icon: star; ratio:0.7;" style="margin: -2px !important;"></span>
                                                    </div>
                                                    </h6>
                                                    <h6>{{ $job->job_location }}</h6>
                                                    <h6 class="days">{{ $job->created_at }}</h6>
                                                </div>     
                                            </div>
                                            <div class="uk-float-right">
                                                <a class="uk-margin-small-right uk-margin-top" uk-icon="heart"></a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    <li class="uk-padding uk-padding-large uk-text-center">
                                        <button class="uk-button uk-button-primary">Дэлгэрэнгүй...</button>
                                    </li>

                                    <li class="uk-padding uk-padding-large uk-text-center">
                                        <button class="uk-button uk-button-default">Ажлын мэдээллээ цаг алдалгүй ав</button>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection