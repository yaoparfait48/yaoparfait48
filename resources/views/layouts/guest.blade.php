<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
        <link rel="stylesheet" href="css/animations.css" type="text/css">
        <link rel="stylesheet" href="css/perfect-scrollbar.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css">

        <script src="https://kit.fontawesome.com/9ca3b27b3d.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <!-- Animated Background -->
        <div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
        <!-- /Animated Background -->
    
        <!-- Loading animation -->
        <div class="preloader">
            <div class="preloader-animation">
                <div class="preloader-spinner">
                </div>
            </div>
        </div>
        <!-- /Loading animation -->
        
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/animating.js"></script>
    
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src='../../../../../www.google.com/recaptcha/api.js'></script>
    
        <script src='js/perfect-scrollbar.min.js'></script>
        <script src='js/jquery.shuffle.min.js'></script>
        <script src='js/masonry.pkgd.min.js'></script>
        <script src='js/owl.carousel.min.js'></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
    
        <script src="js/validator.js"></script>
        <script src="js/main.js"></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
            integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
            data-cf-beacon='{"rayId":"70ab60fff8b43a69","version":"2021.12.0","r":1,"token":"94b99c0576dc45bf9d669fb5e9256829","si":100}'
            crossorigin="anonymous"></script>
    </body>
</html>
