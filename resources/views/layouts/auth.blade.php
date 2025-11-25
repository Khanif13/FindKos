<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Auth')</title>

    <!-- Vendor CSS Files -->
    <link href="{{ 'Tour' }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ 'Tour' }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ 'Tour' }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ 'Tour' }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ 'Tour' }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ 'Tour' }}/assets/css/main.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">

    <div class="w-100">
        @yield('container')
    </div>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ 'Tour' }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ 'Tour' }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ 'Tour' }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ 'Tour' }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ 'Tour' }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ 'Tour' }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ 'Tour' }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ 'Tour' }}/assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ 'Tour' }}/assets/js/main.js"></script>
</body>

</html>
