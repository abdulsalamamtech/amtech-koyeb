@extends('layouts.pages')
@section('content')

    <!-- Titlebar Start -->
    @include('pages.partials.title-bar', ['page_title_bar' => 'Testimonial', 'page_title' => 'Testimonial'])
    <!-- Titlebar End -->


    <!-- Testimonial Start -->
    @include('pages.partials.testimonial')
    <!-- Testimonial End -->

    <!-- Vendor Start -->
    @include('pages.partials.vendor')
    <!-- Vendor End -->

@endsection
