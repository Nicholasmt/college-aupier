@extends('front-layouts.body')
@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/slider.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@livewireStyles
@endsection
@section('content')

<livewire:landing-page/>
 
@livewireScripts


@endsection
 
