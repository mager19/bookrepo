@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())

<!-- Hero Home -->
@include('partials.content-heroHome')
<!-- /Hero Home -->

<!-- Featured Buttons -->
@include('partials.featuredBooks')
<!-- / Featured Buttons -->

@endwhile
@endsection