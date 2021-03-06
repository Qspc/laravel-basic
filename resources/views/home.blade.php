@extends('layouts.main')
{{-- @dd($posts); --}}


@section('container')

<div class="ml-8">

  <h1 class="mt-8 text-3xl font-bold text-center">Daftar kosakata SANG</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="home"  class="text-center mt-4 ">
            <input type="text" class="form-control border-black my-4 p-2  border-2" placeholder="search" name="search">
            <button type="submit" class=" border-2 border-black p-2 rounded-sm">Cari</button>
      </form>
    </div>
  </div>
  
  @foreach ($posts as $post)
      <article class="mt-8">
        <h1 > <span class="font-bold">{{ $post->id }}.</span>   
          <a class="text-xl text-blue-700" href="posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
        <h1>{{ $post->author }}</h1>
        <h1>{{ $post->script }}</h1>
      </article>
  @endforeach

  <div class="mt-8 ml-4"><a class="text-1xl p-2 rounded-sm bg-blue-600 text-wh font-bold" 
    href="/posts/create">Buat Form baru</a>
  </div>

</div>
@endsection

{{-- Post::create([
  'title' => "sang kar",
  'slug' => "sang-kar",
  'script' => "lorem ipsum",
  'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam!
  "
]) --}}
