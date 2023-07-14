@extends('front-layouts.app')
@section('body')
<header id="header-wrap" style="margin-top:%">
@include('front-layouts.top-nav')
</header>

@include('front-layouts.slider2')

@include('front-layouts.sections')
 
@yield('content')

@include('front-layouts.footer')

<a href="#" class="back-to-top">
<i class="lni-chevron-up"> </i>
</a>
<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>
 
<script src="{{ asset('front/assets/js/jquery-min.js')}}"></script>
<script src="{{ asset('front/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('front/assets/js/waypoints.min.js')}}"></script>
<script src="{{ asset('front/assets/js/wow.js')}}"></script>
<script src="{{ asset('front/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('front/assets/js/jquery.slicknav.js')}}"></script>
<script src="{{ asset('front/assets/js/main.js')}}"></script>
<script src="{{ asset('front/assets/js/form-validator.min.js')}}"></script>
<script src="{{ asset('front/assets/js/contact-form-script.min.js')}}"></script>
 
@section('scripts')

@show
<!-- scripts ends here -->
@endsection