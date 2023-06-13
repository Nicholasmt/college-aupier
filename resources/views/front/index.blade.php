@extends('front-layouts.body')
@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/custom.css')}}">
@endsection
@section('content')

{{-- Testimonial Starts--}}
<section class="testimonial section-padding">
<h3 class="section-title">Testimonials</h3>
 
<div id="main-slide" class="carousel slide bg-auto" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<div class="text-center">
<h1 class="animated wow fadeInDown hero-heading" data-wow-delay=".4s">Welcome to The Largest Marketplace</h1>
<p class="animated fadeInUp wow hero-sub-heading" data-wow-delay=".6s">Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more</p>
<h4 class="text-white"> Josh Rossi </h4>
 
</div>
</div>
 
</div>
<a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
<span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left" data-ripple-color="#F0F0F0"></i></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
<span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right" data-ripple-color="#F0F0F0"></i></span>
<span class="sr-only">Next</span>
</a>
</div>
    
</section>



{{-- Testimonial Ends--}}

{{-- Why us Start--}}
<section class="section-padding">
<div class="containe">
<div class="row">
<div class="col-lg-5 col-md-5 col-xs-12 consult-bg card-body">
<h3 class="text-center text-white">Why US</h3>
<p class="text-center mt-4">
The road to college begins way before senior year. Students who have a dream school in mind need to carefully plan their extracurriculars, classes, and leadership opportunities as early as middle school to make sure they are poised for their desired outcome. Choosing the right college consultant is every family’s most important decision.
As an independent college consultant firm, Command Education offers the guidance students need and the peace of mind that parents seek. <br>
✓ For Middle School <br>
✓ For Freshmen <br>
✓ For Sophomores <br>
✓ For Juniors <br>
✓ For Seniors <br>
</p>
</div>  
<div class="col-lg-7 col-md-7 col-xs-12">
<div class="bg-light">
<h3 class="section-title">BOOK A CONSULTATION</h3>
<div class="col-lg-12 col-md-6 col-xs-12">
<div class="form-group has-error">
<input type="text" class="form-control" id="name" name="name" placeholder="Name">
</div>
<div class="form-group has-error">
<input type="email" class="form-control" placeholder="catagory">
</div>
    
<div class="form-group has-error">
<input type="text" class="form-control" id="phone" name="name" placeholder="Phone">
</div>

<div class="form-group has-error">
<input type="email" class="form-control" id="email" placeholder="Email">
</div>
<a href="#" class="btn btn-common">Send</a>
</div>
</div>
</div>  
</div>
</div>
</section>
{{-- Why us Ends--}}
 
@endsection