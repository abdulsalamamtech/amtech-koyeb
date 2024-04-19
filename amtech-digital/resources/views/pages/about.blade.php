@extends('layouts.pages')
@section('content')

    <!-- Titlebar Start -->
    @include('pages.partials.title-bar', ['page_title_bar' => 'About Us', 'page_title' => 'About'])
    <!-- Titlebar End -->


    <!-- About Start -->
    @include('pages.partials.about')
    <!-- About End -->


    <!-- Team Start -->
    @include('pages.partials.team')
    <!-- Team End -->


    <!-- Vendor Start -->
    @include('pages.partials.vendor')
    <!-- Vendor End -->

@endsection
