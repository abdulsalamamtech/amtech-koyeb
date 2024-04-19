@extends('layouts.pages')
@section('content')

    <!-- Titlebar Start -->
    @include('pages.partials.title-bar', ['page_title_bar' => 'Free Quote', 'page_title' => 'Free Quote'])
    <!-- Titlebar End -->


    <!-- Quote Start -->
    @include('pages.partials.quote')
    <!-- Quote End -->


    <!-- Vendor Start -->
    @include('pages.partials.vendor')
    <!-- Vendor End -->

@endsection
