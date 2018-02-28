@extends('layouts.app')

@section('content')
    <header class="header" uk-sticky="top: 0">
        <nav class="main-navbar uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <a href="{{ URL::previous() }}" class="uk-margin-small-left" uk-icon="arrow-left"></a>
                <ul class="uk-navbar-nav">
                    <li class="uk-active">
                        <a>Ажил хайх</a>
                    </li>
                </ul>
            </div>

            <div class="uk-navbar-right uk-margin uk-margin-right">
                <a href="/" uk-icon="icon: home"></a>
            </div>
        </nav>
    </header>

    <main class="body">
        <div class="uk-container uk-container-center">
            <div class="uk-grid-small uk-margin-top" uk-grid>
                <div class="uk-width-1-1">
                    <div class="job-header">
                        <div class="job-description">
                            <h4 class="uk-text-bold">Компаний мэдээлэл</h4>
                            <h6>Компанийхаа талаар бидэнд хэлнэ үү</h6>
                            <hr>
                        </div>
                    </div>

                    <div class="resume uk-margin-top">

                        <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                            <div class="company-input">
                                <h6 class="uk-card-title uk-text-bold uk-margin-small-bottom">Компаний нэр</h6>
                                <input class="uk-input" type="text" value="{{ Auth::user()->company }}">
                            </div>
                            <div class="company-input uk-margin-top">
                                <h6 class="uk-card-title uk-text-bold uk-margin-small-bottom">Компаний хэмжээ</h6>
                                <select class="uk-select">
                                    <option>Хэдэн ажилчинтай вэ?</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="company-input uk-margin-top">
                                <h6 class="uk-card-title uk-text-bold uk-margin-small-bottom">Таны нэр</h6>
                                <input class="uk-input" type="text" value="{{ Auth::user()->name }}">
                                <h4>{{ Auth::user()->type }}</h4>
                            </div>
                            <div class="company-input uk-margin-top">
                                <h6 class="uk-card-title uk-text-bold uk-margin-small-bottom">Утасны дугаар</h6>
                                <input class="uk-input" type="number" name="phonenumber">
                            </div>
                            <div class="company-input uk-margin-top">
                                <h6 class="uk-card-title uk-text-bold uk-margin-small-bottom">Манай апп-н талаар хаанаас сонссон бэ?</h6>
                                <select class="uk-select">
                                    <option>Social media</option>
                                    <option>Newspaper</option>
                                    <option>TV</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="uk-text-center uk-padding">
                        <a class="uk-button uk-button-primary btn" href="#modal-full" uk-toggle>Үргэлжлүүлэх</a>
                    </div>

                    <!-- Modal1 -->

                    <div id="modal-full" class="uk-modal-full" uk-modal>
                        <div class="uk-modal-dialog full-modal">
                            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                <div class="uk-padding-large">
                                    <h4>Эхний алхам</h4>
                                    <div class="company-input uk-margin-large-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Ажлын нэр</h6>
                                        <input class="uk-input" type="text">
                                    </div>
                                    <div class="company-input uk-margin-large-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Компаний нэр</h6>
                                        <input class="uk-input" type="text">
                                    </div>
                                    <div class="company-input uk-margin-large-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Хаяг</h6>
                                        <input class="uk-input" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-text-center uk-padding">
                                <a class="uk-button uk-button-primary btn" href="#modal-full2" uk-toggle>Үргэлжлүүлэх</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal2 -->
                    <div id="modal-full2" class="uk-modal-full" uk-modal>
                        <div class="uk-modal-dialog full-modal">
                            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                <div class="uk-padding-large">
                                    <h4>Ажлын талаар дэлгэрэнгүй</h4>
                                    <div class="company-input uk-margin-large-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Хэр хэмжээний хөлс өгөх вэ?</h6>
                                        <input class="uk-input" type="text" placeholder="Жишээ нь: 10,000₮">
                                        <h6 class="uk-text-bold uk-margin-small uk-margin-small-bottom uk-text-center">ААС</h6>
                                        <input class="uk-input" type="text" placeholder="Жишээ нь: 20,000₮">
                                        <select class="uk-select">
                                            <option>1 цагт</option>
                                            <option>1 хоногт</option>
                                        </select>
                                    </div>
                                    <div class="company-input uk-margin-large-top">
                                        <h6 class="uk-text-bold uk-margin-small-bottom">Хэдэн ажилчин хайж байгаа вэ?</h6>
                                        <select class="uk-select">
                                            <option></option>
                                            <option>1 ажилчин</option>
                                            <option>2-3 ажилчин</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="uk-text-center uk-padding">
                                <a class="uk-button uk-button-primary btn" href="#modal-full3" uk-toggle>Үргэлжлүүлэх</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal 3 -->

                    <div id="modal-full3" class="uk-modal-full" uk-modal>
                        <div class="uk-modal-dialog full-modal">
                            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                <div class="uk-padding-large">
                                    <h4>Ажлын дэлгэрэнгүй</h4>
                                    <div class="job-header uk-margin-large-top">
                                        <div class="job-description">
                                            <h4 class="uk-text-bold">Зөөгч</h4>
                                            <h6>Монгол хуушуур - Баянзүрх дүүрэг, Улаанбаатар</h6>
                                            <span>₮10,000 – ₮20,000 цагт</span>
                                        </div>
                                        <div class="uk-margin-top uk-margin-bottom">
                                            <h6 class="uk-text-bold uk-margin-bottom">Ажилд ороход юу, юу хэрэгтэй талаар мэдээлэл өгнө үү?</h6>
                                            <textarea class="uk-textarea" rows="5"></textarea>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="uk-text-center uk-padding">
                                <a class="uk-button uk-button-primary btn uk-modal-close" href="/job" onclick="UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Амжилттай...', status: 'success'})">Success</a>
                                <!-- <a class="uk-button uk-button-primary btn" href="#modal-full2" uk-toggle>Continue</a> -->
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </main>
@endsection