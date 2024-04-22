@extends('layouts.pages')
@section('content')

    <!-- Titlebar Start -->
    @include('pages.partials.title-bar', ['page_title_bar' => 'Team Members', 'page_title' => 'Team Members'])
    <!-- Titlebar End -->


    <!-- Team Start -->
    @include('pages.partials.team')
    <!-- Team End -->

    <!-- Vendor Start -->
    @include('pages.partials.vendor')
    <!-- Vendor End -->

@endsection
