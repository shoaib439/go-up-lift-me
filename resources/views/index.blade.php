<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{{ asset('public/img/fevicon.png') }}" >
    <title>Go Up Lift Me </title>
    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/vendors/linericon/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/vendors/lightbox/simpleLightbox.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/vendors/nice-select/css/nice-select.css') }}" >

    <!-- main css -->


    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}" >

    {{--<meta name="csrf-token" content="{{ csrf_token() }}" />--}}
</head>
<body>

@include('header')


@yield('main-section')
@yield('signin-section')
@yield('signup-section')
@yield('privacy-section')



@include('Fotter')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="{{ asset('public/js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/stellar.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/jquery.ajaxchimp.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/jquery.ajaxchimp.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/mail-script.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('public/js/countdown.js') }}"></script>--}}

<!--gmaps Js-->
<script type="text/javascript" src="{{ asset('public/js/theme.js') }}"></script>

{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>--}}
{{--<script src="js/gmaps.min.js"></script>--}}

</body>
</html>