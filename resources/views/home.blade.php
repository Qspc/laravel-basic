@extends('layouts.main')
{{-- @dd($posts); --}}


@section('container')

  <h1 class="mt-8 ml-8 text-3xl font-bold">Daftar kosakata SANG</h1>
  
  @foreach ($posts as $post)
      <article class="mt-8 ml-8">
        <h1 > <span class="font-bold">{{ $post->id }}.</span>   
          <a class="text-xl text-blue-700" href="posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
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
