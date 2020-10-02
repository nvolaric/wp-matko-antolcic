@extends('layouts.app')

@section('title')
    @include('partials.single-header')
@endsection

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
