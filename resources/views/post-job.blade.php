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
                                    <h4 class="uk-text-bold">Ажил нийтлэх</h4>
                                    <h6>Шинээр оруулах гэж буй ажлынхаа дэлгэрэнгүй мэдээллийг оруулна уу.</h6>
                                    <hr>
                                </div>
                            </div>
                            <form method="post" action="/job">
                                {{ csrf_field() }}
                                @foreach($companies as $company)
                                    <input type="hidden" name="company_id" value="{{ $company->id }}">
                                @endforeach
                                <div class="resume uk-margin-top">
                                    <div class="company-input uk-margin-large-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Ажлын нэр</h6>
                                        <input class="uk-input" type="text" name="job_name">
                                    </div>
                                    <div class="company-input uk-margin-large-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Хаяг</h6>
                                        <input class="uk-input" type="text" name="job_location">
                                    </div>
                                    <div class="company-input uk-margin-large-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Хэр хэмжээний хөлс өгөх вэ?</h6>
                                        <input class="uk-input" type="text" placeholder="Жишээ нь: 10,000₮" name="job_salary">
                                        <select class="uk-select">
                                            <option>1 цагт</option>
                                            <option>1 хоногт</option>
                                        </select>
                                    </div>
                                    <div class="company-input uk-margin-large-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Хэдэн ажилчин хайж байгаа вэ?</h6>
                                        <select class="uk-select" name="job_slot">
                                            <option value="1">1 ажилчин</option>
                                            <option value="2-3">2-3 ажилчин</option>
                                        </select>
                                    </div>
                                    <div class="uk-margin-top uk-margin-bottom">
                                        <h6 class="uk-text-bold uk-margin-bottom">Ажилд ороход юу, юу хэрэгтэй талаар мэдээлэл өгнө үү?</h6>
                                        <textarea class="uk-textarea" rows="5" name="job_additional"></textarea>
                                    </div>
                                    <div class="uk-margin-left uk-margin-top uk-margin-bottom">
                                        <button type="submit" class="uk-button uk-button-primary btn">Нийтлэх</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection