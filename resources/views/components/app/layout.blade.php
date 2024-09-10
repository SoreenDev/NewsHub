<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>NewsHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Pichforest" name="author" />
    <!-- favicon -->
{{--    <link rel="shortcut icon" href="images/favicon.ico"css/swiper.min.css>--}}

    <!-- css -->
    <link href="{{ asset('app/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('app/css/swiper.min.css') }}" />

    <link href="{{ asset('app/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- colors -->
    <link href="{{ asset('app/css/colors/blue.css') }}" rel="stylesheet" type="text/css" id="color-opt" />

</head>

<body>

    <!-- NAVBAR START -->
    <x-app.navbar/>
    <!-- NAVBAR END -->



    <!-- BANNER START -->
    <x-app.banner/>
    <!-- BANNER END -->

    <!-- CONTENT START -->
    @yield('content')
    <!-- CONTENT END -->

    <!-- SUGGESTION START -->
    <x-app.suggestion-box />
    <!-- SUGGESTION END -->

    <!-- START FOOTER -->
    <x-app.footer/>
    <!-- END FOOTER -->

    <!-- Style switcher -->

    <!-- end switcher-->


    <!-- javascript -->
    <script src="{{ asset('app/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('app/js/swiper.min.js') }}"></script>
    <script src="{{ asset('app/js/app.js') }}}"></script>

</body>

</html>
