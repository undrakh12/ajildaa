<!DOCTYPE html>
<html lang="mn">

<head>
    <title>Ажилдаа</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/uikit.min.css" />

    <link rel="manifest" href="/manifest.json">
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <main id="barba-wrapper">
        <div class="barba-container" data-prev="/"  data-next="/job">
            <header class="header" uk-sticky="top: 0">
                <nav class="main-navbar uk-navbar-container" uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="/" class="uk-margin-small-left prev" uk-icon="arrow-left"></a>
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a>Ажил хайх</a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-navbar-right uk-margin uk-margin-right">
                        <a href="/" class="prev" uk-icon="icon: home"></a>
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
                                    <li class="uk-padding uk-padding-small">
                                        <div class="uk-clearfix">
                                            <div class="uk-float-left job-list">
                                                <a href="/job" class="next">
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
    <!-- JS -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <script src="js/app.js" async></script>

    <!-- barba.js -->
	<script src="js/barba.js"></script>
    <script src="js/nextprev.js"></script>
	<script src="js/TweenMax.min.js"></script>
</body>

</html>