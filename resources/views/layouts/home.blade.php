<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css-import')
    <link rel="shortcut icon" href="../lg.ico" type="image/x-icon">

    <title>SkyLine RP</title>
    <link rel="stylesheet" href="js/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="js/OwlCarousel/owl.theme.default.css">


    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=NTR&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>

        @if (!Auth::guard('web')->check())
            @include('layouts.nav-bar.g')
        @else
            @include('layouts.nav-bar.u')
        @endif
    <div class="content">
        @yield('content')
    </div>
    @yield('js-import')
    <script src="js/OwlCarousel/owl.carousel.min.js"></script>
    <script>
         $(document).ready(function () {
            $(".owl-carousel").owlCarousel();
        });
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>
</html>
