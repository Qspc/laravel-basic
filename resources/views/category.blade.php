@extends('layouts.main')
{{-- @dd($posts); --}}


@section('container')
    <h1>Post category : {{ $category }}</h1>
  
  @foreach ($posts as $post)
      <article class="mb-4 mx-4">
        <h1>
          <a href="posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
        <h1>{{ $post->author }}</h1>
        <h1>{{ $post->script }}</h1>
      </article>
  @endforeach
@endsection

{{-- Post::create([
  'title' => "sang kar",
  'slug' => "sang-kar",
  'script' => "lorem ipsum",
  'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam!
  "
]) --}}