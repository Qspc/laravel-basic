@extends('layouts.main')
{{-- @dd($posts); --}}


@section('container')
  
  @foreach ($posts as $post)
      <article class="mb-4 mx-4">
        <h1>
          <a href="posts/{{ $post["slug"] }}">{{ $post["title"] }}</a></h1>
        <h1>{{ $post["author"] }}</h1>
        <h1>{{ $post["body"] }}</h1>

      </article>
  @endforeach
@endsection
