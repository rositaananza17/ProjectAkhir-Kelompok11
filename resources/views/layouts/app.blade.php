<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Custom Fonts and Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/template2/assets/images/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/template2/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/template2/assets/css/style.css') }}" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Custom Scripts -->
    <script src="{{ asset('/template2/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/template2/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/template2/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/template2/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('/template2/assets/plugins/testimonial/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/template2/assets/js/script.js') }}"></script>
</body>
</html>
