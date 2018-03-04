@extends('layouts.app')

@section('content')

    <main id="barba-wrapper">
        <div class="barba-container" data-prev="home"  data-next="view-job">
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
                    <div class="uk-margin-medium-top">
                        <ul class="uk-flex-center no-margin" data-uk-tab="{connect:'#all-result'}">
                            <li class="uk-active tab">
                                <a href="#all-result">Бүгд</a>
                            </li>
                            <li class="tab">
                                <a href="#new-result">Шинэ</a>
                            </li>
                        </ul>

                        <ul id="my-id" class="uk-switcher">
                            <li class="all-result">
                                <ul class="uk-list uk-list-divider">
                                    @foreach($jobs as $job)
                                    <li class="uk-padding uk-padding-small">
                                        <div class="uk-clearfix">
                                            <div class="uk-float-left job-list">
                                                <a href="/view-job" class="next">
                                                    <h5>{{ $job->job_name }}</h5>
                                                    <h6>Монгол хуушуур
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                    </h6>
                                                    <h6>{{ $job->job_location }}</h6>
                                                    <h6 class="days">30 өдрийн өмнө</h6>
                                                </a>
                                            </div>
                                            <div class="uk-float-right">
                                                <a class="uk-margin-small-right" uk-icon="heart"></a>
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

                            <!-- new result start -->

                            <li class="all-result new-result">
                                <ul class="uk-list uk-list-divider">
                                    <li class="uk-padding uk-padding-small">
                                        <div class="uk-clearfix">
                                            <div class="uk-float-left job-list">
                                                <a href="">
                                                    <h5>Админ, Номын санч </h5>
                                                    <h6>Монгол бууз
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                    </h6>
                                                    <h6>Хан уул дүүрэг, Улаанбаатар</h6>
                                                    <h6 class="days">2 цагийн өмнө</h6>
                                                </a>
                                            </div>
                                            <div class="uk-float-right">
                                                <a class="uk-margin-small-right" uk-icon="heart"></a>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="uk-padding uk-padding-small">
                                        <div class="uk-clearfix">
                                            <div class="uk-float-left job-list">
                                                <a href="">
                                                    <h5>Админ, Номын санч </h5>
                                                    <h6>Монгол бууз
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                    </h6>
                                                    <h6>Хан уул дүүрэг, Улаанбаатар</h6>
                                                    <h6 class="days">2 цагийн өмнө</h6>
                                                </a>
                                            </div>
                                            <div class="uk-float-right">
                                                <a class="uk-margin-small-right" uk-icon="heart"></a>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="uk-padding uk-padding-small">
                                        <div class="uk-clearfix">
                                            <div class="uk-float-left job-list">
                                                <a href="">
                                                    <h5>Админ, Номын санч </h5>
                                                    <h6>Монгол бууз
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                        <span uk-icon="star"></span>
                                                    </h6>
                                                    <h6>Хан уул дүүрэг, Улаанбаатар</h6>
                                                    <h6 class="days">2 цагийн өмнө</h6>
                                                </a>
                                            </div>
                                            <div class="uk-float-right">
                                                <a class="uk-margin-small-right" uk-icon="heart"></a>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="uk-padding uk-padding-large uk-text-center">
                                        <button class="uk-button uk-button-primary push-but">Ажлын мэдээллээ цаг алдалгүй ав</button>
                                    </li>
                                    <div class="new-footer"></div>
                                </ul>
                            </li>
                            <!-- new start end -->
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection