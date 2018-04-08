@extends('layouts.app')

@section('content')
    <main id="barba-wrapper">
        <div class="barba-container" data-prev="home" data-next="home">
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
                                <div class="job-description uk-margin">
                                    <h4 class="uk-text-bold">Ажлаа харах</h4>
                                    
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <hr>
                <div class="resume">
                    <ul class="uk-list uk-list-divider">
                        <li class="uk-padding uk-padding-small">
                            <div class="uk-clearfix">
                                <div class="uk-float-left job-list">
                                    <a href="/job">
                                        <h5>Nasanjargal</h5>
                                        
                                        <h6>Bayanzurkh duureg, Ulaanbaatar</h6>
                                        <h6 class="days">1 days ago</h6>
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
                                        <h5>HR Assistant</h5>
                                        <h6>Bayanzurkh duureg, Ulaanbaatar</h6>
                                        <h6 class="days">2 days ago</h6>
                                    </a>
                                </div>
                                <div class="uk-float-right">
                                    <a class="uk-margin-small-right" uk-icon="heart"></a>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>

            </section>
        </div>
    </main>
@endsection