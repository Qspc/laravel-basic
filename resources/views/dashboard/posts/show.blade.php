@extends('dashboard.layouts.main')

@section('container')
    <article class="mt-8 ml-8">


        <div class="mb-6">
            <h1 class="text-3xl font-bold"> {{ $post->title }}</h1>
            <p class="text-sm"> Created by : 
                <a class="text-blue-700" href="/author/{{ $post->user->id }}">{{ $post->user->name }}</a> 
            category : 
                <a class="text-blue-700" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> 
            </p>          
        </div>
        <div class="w-96 object-center	">
            <img src="{{ asset('/storage/' . $post->image) }}" alt="{{ $post->category->image }}">
        </div>
        <h1> {{ $post->author }}</h1>
        <h1> {!! $post->body !!}</h1>

        <a class="text-sm" href="/dashboard/posts">back to <span class="text-blue-700">My post</span> </a>
    </article>
@endsection
