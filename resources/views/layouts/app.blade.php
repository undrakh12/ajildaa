<!DOCTYPE html>
<html lang="mn">
<head>
    <title>Ажилдаа!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#000" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/uikit.min.css" />

    <link rel="manifest" href="/manifest.json"/>

    <script src="js/jquery.min.js"></script>
</head>
<body>

    @yield('content')
    
    <!-- JS -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script type="js/app.js" async></script>
    <script>
        (function ($) {
            $.fn.enterAsTab = function (options) {
                var settings = $.extend({
                    'allowSubmit': false
                }, options);
                $(this).find('input, button').live("keydown", { localSettings: settings }, function (event) {
                    if (settings.allowSubmit) {
                        var type = $(this).attr("type");
                        if (type == "submit") {
                            return true;
                        }
                    }
                    if (event.keyCode == 13) {
                        var inputs = $(this).parents("form").eq(0).find(":input:visible:not(:disabled):not([readonly])");
                        var idx = inputs.index(this);
                        if (idx == inputs.length - 1) {
                            idx = -1;
                        } else {
                            inputs[idx + 1].focus(); // handles submit buttons
                        }
                        try {
                            inputs[idx + 1].select();
                        }
                        catch (err) {

                        }
                        return false;
                    }
                });
                return this;
            };
        })(jQuery);

        $("#form").enterAsTab({ 'allowSubmit': true });
    </script>

    <!-- barba.js -->
    <script src="js/barba.js"></script>
    <script src="js/nextprev.js"></script>
    <script src="js/TweenMax.min.js"></script>
</body>
</html>
