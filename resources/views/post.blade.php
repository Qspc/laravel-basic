{{-- @dd($post); --}}

@extends('layouts.main')

@section('container')
    <article>


        <h1> {{ $post->title }}</h1>
        <p>category : <a href="/categories/{{ $post->slug }}">{{ $post->category->name }}</a> </p>
        <h1> {{ $post->author }}</h1>
        <h1> {!! $post->body !!}</h1>


    </article>

    <a href="/home">back to home</a>
    
@endsection