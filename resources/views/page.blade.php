@extends('layouts.app')

@section('title')
  @include('partials.page-header')
@endsection

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
  @endwhile
@endsection
