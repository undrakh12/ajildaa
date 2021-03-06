<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ажилдаа!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#4051b5" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">

    <!-- manifest -->
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>
<body>

    @yield('content')

    <!-- main JS -->
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" async></script> 
    <script src="{{ asset('js/offline.js') }}"></script> 
    <script src="http://localhost/ajildaa/node_modules/sw-toolbox/companion.js" data-service-worker="service-worker.js"></script>
</body>
</html>
