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

    <main class="body">
        <div class="uk-container uk-container-center">
            <div class="uk-grid-small uk-margin-top" uk-grid>
                <div class="uk-width-1-1">
                    <div class="job-header">
                        <div class="job-description uk-margin">
                            <h4 class="uk-text-bold">View your job</h4>
                            
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

    </main>
    <!-- JS -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <script src="js/app.js" async></script>
</body>

</html>