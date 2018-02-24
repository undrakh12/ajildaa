<!DOCTYPE html>
<html lang="mn">

<head>
    <title>Ажилдаа</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/uikit.min.css" />

    <link rel="manifest" href="/manifest.json">
</head>

<body>
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

    <main class="body apply-body">

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
                        <a href="/" class="uk-button uk-button-primary btn">Хүсэлт илгээх</a>
                    </div>

                </div>


            </div>
        </div>
    </main>
    <!-- JS -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <script src="js/app.js" async></script>
</body>

</html>