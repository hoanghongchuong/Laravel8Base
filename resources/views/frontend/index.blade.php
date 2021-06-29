<html>

<head>
    <?php

    $setting = App\Models\Setting::first();
//    $lang = Cache::get('lang');
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{isset($title) ? $title : 'title'}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name='revisit-after' content='1 days' />

    <link rel="shortcut icon" href="{!! asset($setting->favicon) !!}" type="image/png" />


    <link rel="shortcut icon" href="" type="image" />
    <meta property="og:title" content="" />
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery.fancybox.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}" />
    <!--    <link rel="stylesheet" type="text/css" href="css/cus.css" />-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}" />
    <script src="{{asset('frontend/js/jquery-2.1.4.min.js')}}"></script>

</head>

<body>
@include('frontend.layout.header')
<div id="be-content">
    @yield('content')
    @include('frontend.layout.footer')

</div>

<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>
</body>
</html>
