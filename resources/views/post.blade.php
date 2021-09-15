{{-- @dd($post); --}}

@extends('layouts.main')

@section('container')
    <article class="mt-8 ml-8">

        <div class="mb-6">
            <h1 class="text-3xl font-bold"> {{ $post->title }}</h1>
            <p class="text-sm">category : <a class="text-blue-700" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>          
        </div>
        <h1> {{ $post->author }}</h1>
        <h1> {!! $post->body !!}</h1>

        <a class="text-sm" href="/home">back to <span class="text-blue-700">home</span> </a>
    </article>

    
@endsection