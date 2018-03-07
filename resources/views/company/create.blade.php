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
                                    <h4 class="uk-text-bold">Компаний мэдээлэл</h4>
                                </div>
                            </div>
                            <form method="post" action="/resume">
                                {{ csrf_field() }}
                                <div class="resume uk-margin-top">
                                    <div class="company-input uk-margin-large-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Компаний нэр</h6>
                                        <input class="uk-input" type="text" name="company_name" value="" placeholder="MCS, ITzone г.м">
                                    </div>
                                    <div class="company-input uk-margin-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Ажилчдын тоо</h6>
                                        <input class="uk-input" type="text" name="company_size" placeholder="1,2,3,4 г.м">
                                    </div>
                                    <div class="company-input uk-margin-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Утасны дугаар</h6>
                                        <input class="uk-input" type="text" name="company_phone" placeholder="99824718 г.м">
                                    </div>
                                    <div class="uk-margin-top uk-margin-bottom">
                                        <h6 class="uk-text-bold uk-margin-bottom">Компаний байрлал</h6>
                                        <input class="uk-input" type="text" name="company_location" placeholder="Баянзүрх дүүрэг, УБ г.м">
                                    </div>
                                    <button type="submit" class="uk-button uk-button-primary btn">Хадгалах</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection