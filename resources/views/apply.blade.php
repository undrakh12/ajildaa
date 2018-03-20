@extends('layouts.app')

@section('content')
    <main id="barba-wrapper">
        <div class="barba-container" data-prev="view-job" data-next="home">
            <!-- <header class="header" uk-sticky="bottom: 0">
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
                        <a href="/" class="prev home" uk-icon="icon: home"></a>
                    </div>
                </nav>
            </header> -->

            <section class="body apply-body">

                <div class="uk-container uk-container-center">
                    <div class="uk-grid-small uk-margin-top" uk-grid>
                        <div class="uk-width-1-1">
                            <div class="job-header">
                                <div class="job-description">
                                    <h4 class="uk-text-bold">Зөөгчийн ажил</h4>
                                    <h6>Монгол хуушуур - Баянзүрх, Улаанбаатар</h6>
                                </div>
                            </div>

                            <div class="resume uk-margin-top">
                                <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                                    <h6 class="uk-card-title uk-text-bold">Биндэрьяа Насанжаргал</h6>
                                    <span>nasaa1997@gmail.com</span>
                                    <br>
                                    <span>99824718</span>
                                    <br>
                                    <span>Баянзүрх дүүрэг</span>
                                </div>
                            </div>
                            <div class="phone-number uk-margin-top uk-margin-bottom">
                                <h6 class="uk-text-bold uk-margin-bottom">Утасны дугаар</h6>
                                <input class="uk-input" type="number">
                            </div>

                            <div class="phone-number uk-margin-top uk-margin-bottom">
                                <h6 class="uk-text-bold uk-margin-bottom">Захидал бичих</h6>
                                <textarea class="uk-textarea" rows="5"></textarea>
                            </div>
                            <div class="uk-text-center uk-padding">
                                <a href="/" class="uk-button uk-button-primary btn next">Хүсэлт илгээх</a>
                            </div>

                        </div>


                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection