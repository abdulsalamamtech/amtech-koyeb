@extends('layouts.pages')
@section('content')

    <!-- Titlebar Start -->
    @include('pages.partials.title-bar', ['page_title_bar' => 'Our Price', 'page_title' => 'Price'])
    <!-- Titlebar End -->


    <!-- Pricing Plan Start -->
    @include('pages.partials.pricing')
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    @include('pages.partials.quote')
    <!-- Quote End -->


    <!-- Vendor Start -->
    @include('pages.partials.vendor')
    <!-- Vendor End -->

@endsection


