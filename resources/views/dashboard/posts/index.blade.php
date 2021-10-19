@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">My Post</h3>
        </div>
    </div>

    <body class="flex items-center justify-center">
        <div class="container mt-10 mb-2">
            <a href="/dashboard/posts/create" class="py-3 px-8 mx-8 bg-blue-700 text-white font-bold rounded-md"> New Post
            </a>
            @if (session()->has('success'))
              <div class="bg-green-100 border border-green-600 text-green-700 mt-5 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline"> {{ session('success') }} </span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                  <svg class="fill-current h-6 w-6 text-green-600" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
              </div>
            @endif

            <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                <thead class="text-black">
                    <tr class="bg-blue-600 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                        <th class="p-3 text-left">Title</th>
                        <th class="p-3 text-left">Category</th>
                        <th class="p-3 text-left" width="110px">Actions</th>
                    </tr>
                </thead>
                {{-- isi tabel --}}
                <tbody class="flex-1 sm:flex-none">
                    @foreach ($posts as $post)
                    <tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row sm:rounded-none mb-2 sm:mb-0">
                        <th class="p-3 text-left">{{ $post->title }}</th>
                        <th class="p-3 text-left">{{ $post->category }}</th>
                        <th class="p-3 text-left" width="110px">
                          {{-- view data baru --}}
                          <a href="/dashboard/posts/{{ $post->slug }}"><i class="fas fa-folder-open"></i></a>
                          {{-- edit data --}}
                          <a href="/dashboard/posts/{{ $post->slug }}/edit"><i class="far fa-edit"></i></a>
                          {{-- delete data --}}
                          <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="inline-block">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('are you sure?')"><span><i class="fas fa-trash"></i></span></button>
                          </form>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
    
    <style>
      html, body {
        height: 100%;
      }
    
      @media (min-width: 640px) {
        table {
          display: inline-table !important;
        }
    
        thead tr:not(:first-child) {
          display: none;
        }
      }
    
      td:not(:last-child) {
        border-bottom: 0;
      }
    
      th:not(:last-child) {
        border-bottom: 2px solid rgba(0, 0, 0, .1);
      }
    </style>
@endsection
