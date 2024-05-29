@extends('layouts.common')

@section('content')

    <!-- header section strats -->
    @include('includes.headerIndex')
    <!-- end header section -->

    <!-- slider section -->
    @include('includes.slider')
    <!-- end slider section -->

    <!-- shop section -->
    @include('includes.shop')
    <!-- end shop section -->

    <!-- about section -->
    @include('includes.aboutIndex')
    <!-- end about section -->

    <!-- offer section -->
    @include('includes.offer')
    <!-- end offer section -->

    <!-- blog section -->
    @include('includes.blogIndex')
    <!-- end blog section -->

    <!-- client section -->
    @include('includes.client')
    <!-- end client section -->

    <!-- info section -->
    @include('includes.info')
    <!-- end info_section -->

@endsection
