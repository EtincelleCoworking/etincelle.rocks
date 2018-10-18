<!DOCTYPE html>
<html dir="ltr" lang="fr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="author">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon/favicon.ico')}}">
{{--
    <link rel="apple-touch-icon" sizes="60x60" src="{{asset('images/favicon/apple-icon-60x60.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" src="{{asset('images/favicon/apple-icon-76x76.png')}}" />
    <link rel="apple-touch-icon" sizes="120x120" src="{{asset('images/favicon/apple-icon-120x120.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152" src="{{asset('images/favicon/apple-icon-152x152.png')}}" />
    <link rel="apple-touch-icon" sizes="180x180" src="{{asset('images/favicon/apple-icon-180x180.png')}}" />
--}}

    <link rel="apple-touch-icon" sizes="57x57" src="{{asset('images/favicon/apple-icon-114x114.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" src="{{asset('images/favicon/apple-icon-144x144.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" src="{{asset('images/favicon/apple-icon-114x114.png')}}" />
    <link rel="apple-touch-icon" sizes="144x144" src="{{asset('images/favicon/apple-icon-144x144.png')}}" />

    <link rel="icon" type="image/png" sizes="192x192"  src="{{asset('images/favicon/android-icon-192x192.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" src="{{asset('images/favicon/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="96x96" src="{{asset('images/favicon/favicon-96x96.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" src="{{asset('images/favicon/favicon-16x16.png')}}" />

    <link rel="manifest" href="{{asset('manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('images/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- Web Fonts -->
    {{--
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    --}}
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

    <link href="{{asset('css/etincelle.css')}}" rel="stylesheet">
</head>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class=" ">

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">
@include('components.header')

    @yield('content')

    @include('components.footer-top')
    @include('components.footer')


</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->

@include('components.google-analytics')
<script src="{{asset('js/app.js')}}"></script>
{{--
<script src="{{asset('plugins/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Magnific Popup javascript -->
<script src="{{asset('plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<!-- Appear javascript -->
<script src="{{asset('plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('plugins/waypoints/sticky.min.js')}}"></script>
<!-- Count To javascript -->
<script src="{{asset('plugins/countTo/jquery.countTo.js')}}"></script>
<!-- Slick carousel javascript -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<!-- Initialization of Plugins -->
<script src="{{asset('js/template.js')}}"></script>
<!-- Custom Scripts -->
<script src="{{asset('js/custom.js')}}"></script>
--}}

</body>
</html>
