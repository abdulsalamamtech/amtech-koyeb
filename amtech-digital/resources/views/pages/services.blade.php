@extends('layouts.pages')
@section('content')

    <!-- Titlebar Start -->
    @include('pages.partials.title-bar', ['page_title_bar' => 'Services', 'page_title' => 'Services'])
    <!-- Titlebar End -->


    <!-- Services Start -->
    @include('pages.partials.services')
    <!-- Services End -->


    <!-- Testimonial Start -->
    @include('pages.partials.testimonial')
    <!-- Testimonial End -->


    <!-- Vendor Start -->
    @include('pages.partials.vendor')
    <!-- Vendor End -->

@endsection
