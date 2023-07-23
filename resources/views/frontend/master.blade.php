<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riad</title>
    <meta name="description" content="Premium Responsive Bootstrap 5 Personal Template" />
    <meta name="keywords" content="bootstrap 5, premium, cv, personal, Portfolio, multipurpose" />

    <link rel="shortcut icon" href="{{asset('frontend/images/RR (20).png')}}">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <!-- Materialdesign icons Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/materialdesignicons.min.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.min.css')}}">

    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.min.css')}}">

    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/magnific-popup.css')}}">

    <!-- Mobirise icons Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/mobiriseicons.css')}}">

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/color/default.css')}}" id="option-color">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">Loading...</div>
    </div>
</div>

<!-- Start Navbar -->
@include('frontend.include.header')
<!-- End Navbar -->


@yield('content')

<!--START FOOTER-->
@include('frontend.include.footer')
<!--END FOOTER-->


<!-- Back To Top -->
<a href="#" class="back_top"> <i class="mdi mdi-chevron-up"> </i> </a>



<!--All Javascript -->
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>

<!-- Text Type -->
<script src="{{asset('frontend/js/typed.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<!-- Switcher Js -->
<script src="{{asset('frontend/js/switcher.js')}}"></script>

<!-- Work Filter -->
<script src="{{asset('frontend/js/isotope.js')}}"></script>

<!-- Magnific Popup Js -->
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('frontend/js/custom.js')}}"></script>
@php
    $banner = \App\Models\Banner::where('status',1)->get();
@endphp
<script>
    var typed = new Typed('.element', {
        strings: ["{{$banner->first()->header_name}}", "{{$banner->first()->title}}."],
        typeSpeed: 120,
        backSpeed: 60,
        backDelay: 3000,
        loop: true
    });
</script>
</body>
</html>
