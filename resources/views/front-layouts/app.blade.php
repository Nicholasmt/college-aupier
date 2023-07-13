<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="site_url" content="{{url('')}}">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>College Au Pier</title>
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/fonts/icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/fonts/line-icons.css')}}">
<link href=""  rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/slicknav.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/responsive.css')}}">
<link rel="icon" href="{{ asset('front/assets/img/favicon-2.png')}}" type="image/x-icon">
@section('header')
@show
</head>

<body>
@yield('body') 
</body>
</html>