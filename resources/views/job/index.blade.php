@extends('layouts.app')

@section('content')
    <main id="barba-wrapper">
        <div class="barba-container" data-prev="result" data-next="apply">
            <!-- <header class="header" uk-sticky="top: 0">
                <nav class="main-navbar uk-navbar-container" uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="{{ url()->previous() }}" class="uk-margin-small-left prev arrow-left" uk-icon="arrow-left"></a>

                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a>Ажил хайх</a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-navbar-right uk-margin uk-margin-right">
                        <a href="" class="uk-margin uk-margin-large-right uk-margin-top home share" uk-icon="icon: social"></a>
                        <a href="/" class="prev home" uk-icon="icon: home"></a>
                    </div>
                </nav>
            </header> -->

            <section class="body job-height">
                <div class="uk-container uk-container-center">
                    <div class="uk-grid-small uk-margin-top" uk-grid>
                        <div class="uk-width-1-1">
                            <div class="job-header">
                                <div class="job-description">
                                    <h4 class="uk-text-bold">{{ $job->job_name }}</h4>
                                    <h6>Байрлал: <b>{{ $job->job_location }}</b></h6>
                                    <h6>Цалин/хөлс: <b>{{ $job->job_salary }}</b></h6>
                                </div>

                                <div class="company-description uk-margin uk-margin-top ">
                                    <div class="uk-clearfix">
                                        <div class="uk-float-left job-list">
                                            <a href="">
                                                <h6 class="uk-text-bold">Монгол хуушуур зогийн газар</h6>
                                                <span uk-icon="star"></span>
                                                <span uk-icon="star"></span>
                                                <span uk-icon="star"></span>
                                                <span uk-icon="star"></span>
                                                <span uk-icon="star"></span>
                                                <h6>Компаний талаар сэтгэгдлийг унших.</h6>
                                            </a>
                                        </div>
                                        <div class="uk-float-right">
                                            <a class="uk-margin-top" uk-icon="arrow-right"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="job-body uk-margin uk-margin-top">
                                <h6>Нэмэлт мэдээлэл:<br>
                                    <b>
                                        {{ $job->job_additional }}
                                    </b>
                                </h6>
                            </div>

                        </div>


                    </div>
                </div>
                <form action="/apply" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="job_id" value="{{ $job->id }}">
                    <div class="uk-padding ">
                        <button class="uk-button uk-button-primary btn next">Ажилд орох хүсэлт илгээх</button>
                    </div>
                </form>

            </section>

            <footer class="footer-section">
                <ul class="uk-list uk-list-divider">
                    <li class="uk-padding uk-padding-small">
                        <div class="uk-clearfix">
                            <div class="uk-float-left job-list">
                                <a href="job.html">
                                    <h5>Зөөгчийн ажил</h5>
                                    <h6>Монгол хуушуур
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                    </h6>
                                    <h6>Баянзүрх дүүрэг, Улаанбаатар</h6>
                                    <h6 class="days">30 өдрийн өмнө</h6>
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
                                <a href="job.html">
                                    <h5>Зөөгчийн ажил</h5>
                                    <h6>Монгол хуушуур
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                    </h6>
                                    <h6>Баянзүрх дүүрэг, Улаанбаатар</h6>
                                    <h6 class="days">30 өдрийн өмнө</h6>
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
                                <a href="job.html">
                                    <h5>Зөөгчийн ажил</h5>
                                    <h6>Монгол хуушуур
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                        <span uk-icon="star"></span>
                                    </h6>
                                    <h6>Баянзүрх дүүрэг, Улаанбаатар</h6>
                                    <h6 class="days">30 өдрийн өмнө</h6>
                                </a>
                            </div>
                            <div class="uk-float-right">
                                <a class="uk-margin-small-right" uk-icon="heart"></a>
                            </div>

                        </div>
                    </li>

                </ul>
            </footer>
        </div>
    </main>

    <script>
        document.querySelector('.share').addEventListener('click', function() {
            if(navigator.share) {
                navigator.share({
                    title: 'Ажилдаа!',
                    text: 'Чамд тохирох ажил байна.',
                    url: window.location.href',
                })
                .then(() => console.log("successful"))
                .catch((error) => console.log("error", error));
            }
        });
    </script>
@endsection