<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="msapplication-TileColor" content="#0E0E0E">
<meta name="template-color" content="#0E0E0E">
<link rel="manifest" href="manifest.json" crossorigin>
<meta name="msapplication-config" content="browserconfig.xml">
<meta name="description" content="Index page">
<meta name="keywords" content="index, page">
<meta name="author" content="">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard/imgs/template/favicon.svg') }}">
<link href="{{ asset('css/style.css?version=4.1') }}" rel="stylesheet">
   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
  
</head>
<body>
    @include('layouts.header')
    <main class="main">
        @include('layouts.sidebar')

        <div class="box-content">
            @yield('content')
        </div>
    </main>
</body>
<script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{asset('js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/plugins/waypoints.js')}}"></script>
<script src="{{asset('js/plugins/magnific-popup.js')}}"></script>
<script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/plugins/select2.min.js')}}"></script>
<script src="{{asset('js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.circliful.js')}}"></script>
<script src="{{asset('js/plugins/charts/index.js')}}"></script>
<script src="{{asset('js/plugins/charts/xy.js')}}"></script>
<script src="{{asset('js/plugins/charts/Animated.js')}}"></script>
<script src="{{asset('js/plugins/armcharts5-script.js')}}"></script>
<script src="{{asset('js/main.js?v=4.1')}}"></script>
</html>
