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
                <a href="" class="uk-margin uk-margin-large-right uk-margin-top" uk-icon="icon: social"></a>
                <a href="/" uk-icon="icon: home"></a>
            </div>
        </nav>
    </header>

    <main class="body job-height">
        <div class="uk-container uk-container-center">
            <div class="uk-grid-small uk-margin-top" uk-grid>
                <div class="uk-width-1-1">
                    <div class="job-header">
                        <div class="job-description">
                            <h4 class="uk-text-bold">Зөөгчийн ажил</h4>
                            <h6>Монгол хуушуур - Баянзүрх дүүрэг, Улаанбаатар</h6>
                            <span>₮10,000 – ₮20,000 цагт</span>
                        </div>

                        <div class="company-description uk-margin uk-margin-top ">
                            <div class="uk-clearfix">
                                <div class="uk-float-left job-list">
                                    <a href="job.html">
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
                        <p>
                            Монголчууд дэлхийн ноолуурын зах зээл дээр зүй ёсны байр сууриа эзлэхээр чармайж байна. 2014 оноос уналттай байсан уг зах
                            зээл энэ оноос сэргэж эхлээд буйг салбарын шинжээч The Schneider групп онцолжээ. Тиймээс дэлхийн
                            ноолуурын зах зээлийн гол тоглогчийн хувьд Монгол Улс энэ таатай үеийг ашиглан ноолуураа экспортолж,
                            валютын орлогоо зузаатгах цаг үе ирээд байна. 2000- 2004 онд хэрэгжүүлсэн “Ноолуур” хөтөлбөрийн
                            үргэлжлэл болох “Ноолуур-2” хөтөлбөрийг Засгийн газар 2018-2022 онд хэрэгжүүлэхээр төлөвлөв.
                            Дэлхийн ноолуурын зах зээлд Хятад, Монгол, Иран гэсэн гурван гол тоглогч бий. Өмнөд хөрш нийт
                            зах зээлийн 48 хувийг бүрдүүлдэг. Хэдийгээр манай улсад Хятадын дайтай түүхий эдийн нөөц бий
                            ч үүнийхээ 70 орчим хувийг өмнөд хөршид түүхийгээр нь гаргадаг. “Харин 15-18 хувийг гүн боловсруулж,
                            үлдсэн багахан хэсэг нь л эцсийн бүтээгдэхүүн болж байна” хэмээн Монголын ноос, ноолуурын холбооны
                            гүйцэтгэх захирал Д.Алтанцэцэг учирласан. Тиймээс “Ноолуур-2” хөтөлбөрийн үр дүнд түүхий эдийнхээ
                            60-70 хувийг эцсийн бүтээгдэхүүн болговол ноолуурын салбарт том дэвшил авчирна гэдгийг тэрбээр
                            үргэлжлүүлэн тайлбарлалаа. Жилд авч буй есөн мянган тонн ноолуурын багахан хэсгийг л эцсийн бүтээгдэхүүн
                            болгож байгаа нь санхүүжилт дутмаг, суурилагдсан хүчин чадлаа гүйцэд ашиглаж чадахгүй байгаатай
                            холбоотойг салбарынхан хэлж байна. Одоогийн байдлаар Монгол Улсад ноолуурын иж бүрэн цогцолбор
                            үйлдвэр 15, анхан шатны боловсруулах үйлдвэр 23, сүлжмэлийн жижиг үйлдвэр 51, өрхийн 1500 гаруй
                            үйлдвэр үйл ажиллагаа явуулж байна. 2017 онд эцсийн бүтээгдэхүүнээс 133.9 мянган ам.доллар олсон
                            Гэвч энэхүү хүчин чадлын тал орчим хувийг л ашиглаж байгаа нь үйлдвэрүүдэд эргэлтийн хөрөнгө
                            дутмаг байгаатай холбоотой хэмээн Монголын ноос, ноолуурын холбооны дэд тэргүүн Г.Ёндонсамбуу
                            ярилаа. “Үйлдвэрүүдэд эргэлтийн хөрөнгө дутмаг байдгаас зээл авах шаардлагатай болдог. Гэвч зээл
                            хавар ноолуур самнахаас өмнө амжиж гарах боломжгүй тул сайн чанарын ноолуураа хэрэгцээтэй хэмжээгээр
                            авч чаддаггүй. Түүхий эдийнхээ ихэнхийг ченжүүд, өмнөд хөршийн наймаачдад алддаг” хэмээн “Эвсэг”
                            брэндийн үйлдвэрлэгч хэлсэн. Манай улсад хөдөө аж ахуйн түүхий эдийн бэлтгэн нийлүүлэлтийн тогтолцoo
                        </p>
                    </div>

                </div>


            </div>
        </div>

        <div class="uk-padding ">
            <a href="/apply" class="uk-button uk-button-primary btn">Ажилд орох</a>
        </div>

    </main>

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
    
@endsection