<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="promiseezema11@gmail.com">
	<meta name="theme-color" content="#00B276">
	<!-- preload assets -->
	<link rel="preload" href="{{URL::asset('fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{URL::asset('fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{URL::asset('fonts/mulish-v3-latin-300.woff2')}}" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{URL::asset('fonts/mulish-v3-latin-800.woff2')}}" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{URL::asset('fonts/roboto-v20-latin-300.woff2')}}" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{URL::asset('css/style.css')}}" as="style">
	<link rel="preload" href="{{URL::asset('js/vendors/uikit.min.js')}}" as="script">
	<link rel="preload" href="{{URL::asset('js/utilities.min.js')}}" as="script">
	<link rel="preload" href="{{URL::asset('js/config-theme.js')}}" as="script">
	<!-- stylesheet -->
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
	<!-- uikit -->
	<script src="{{URL::asset('js/vendors/uikit.min.js')}}"></script>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{URL::asset('img/favicon.ico')}}" type="image/x-icon">
	<!-- touch icon -->
	<link rel="apple-touch-icon-precomposed" href="{{URL::asset('img/apple-touch-icon.png')}}">
    <title>{{config('app.name')}} - {{$title}}</title>
    {!! SEO::generate() !!}

    <style>
        .hide {
            display: none !important;
        }
        #valid-msg,  #confirmvalid-msg{
            color: green !important;
            font-size: 12px !important;
        }
        #error-msg, #confirmerror-msg, #emailError, #confirmEmailError{
            color: red !important;
            font-size: 12px !important;
        }
    </style>
</head>

<body>
    <!-- page loader begin -->
	<div class="page-loader">
		<div></div>
		<div></div>
		<div></div>
	</div>
	<!-- page loader end -->

    <!-- Header -->
    @includeIf('layouts.header')
    <!-- Header Ends -->

    <!-- Banner -->
    @yield('banner')
    <!-- Banner Ends -->

    <!-- Breadcrumb -->
    @yield('breadcrumb')
    <!-- Breadcrumb Ends -->

    <!-- Page-Content -->
    @yield('page-content')
    <!-- Page-Content Ends -->

    <!-- Footer -->
    @includeIf('layouts.footer')
    <!-- Footer Ends -->

    <!-- to top begin -->
	<a href="#" class="to-top uk-visible@m" data-uk-scroll>
		Top<i class="fas fa-chevron-up" ></i>
	</a>
	<!-- to top end -->
	<!-- javascript -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="{{URL::asset('js/utilities.min.js')}}"></script>
	<script src="{{URL::asset('js/config-theme.js')}}"></script>
</body>
</html>
