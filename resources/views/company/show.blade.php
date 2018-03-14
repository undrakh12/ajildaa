@extends('layouts.app')

@section('content')
    <main id="barba-wrapper">
        <div class="barba-container" data-prev="home" data-next="job">
            <header class="header" uk-sticky="top: 0">
                <nav class="main-navbar uk-navbar-container" uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="/{{ url()->previous() }}" class="uk-margin-small-left prev arrow-left" uk-icon="arrow-left"></a>
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
                                    <h4 class="uk-text-bold">Компаний мэдээлэл</h4>
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="resume uk-margin-top">
                                <div class="company-input uk-margin-large-top">
                                    <h6 class="uk-text-bold uk-margin-small-bottom">Компаний нэр</h6>
                                    <h4>{{ $company->company_name }}</h4>
                                </div>
                                <div class="company-input uk-margin-top">
                                    <h6 class="uk-text-bold uk-margin-small-bottom">Ажилчдын тоо</h6>
                                    <h4>{{ $company->company_size }}</h4>
                                </div>
                                <div class="company-input uk-margin-top">
                                    <h6 class="uk-text-bold uk-margin-small-bottom">Утасны дугаар</h6>
                                    <h4>{{ $company->company_phone }}</h4>
                                </div>
                                <div class="uk-margin-top uk-margin-bottom">
                                    <h6 class="uk-text-bold uk-margin-bottom">Компаний байрлал</h6>
                                    <h4>{{ $company->company_location }}</h4>
                                </div>
                                <a href="/company/{{ $company->id }}/edit" class="uk-button uk-button-primary btn">Засах</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection