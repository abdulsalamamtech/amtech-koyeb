@extends('layouts.pages')
@section('content')

    <!-- Titlebar Start -->
    @include('pages.partials.title-bar', ['page_title_bar' => 'Contact Us', 'page_title' => 'Contact'])
    <!-- Titlebar End -->


    <!-- Contact Start -->
    @include('pages.partials.contact')
    <!-- Contact End -->


    <!-- Vendor Start -->
    @include('pages.partials.vendor')
    <!-- Vendor End -->

@endsection


