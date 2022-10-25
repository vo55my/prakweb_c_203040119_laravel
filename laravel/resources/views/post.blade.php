@extends('layouts.main')

@section('container')
    <article>
      <h2>{{ $post->title }}</h2>
      <h5>By. Dhaifullah Hilmy <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></h5>
      {!! $post->body !!}
    </article>

    <a href="/blog">Back To Posts</a>
@endsection