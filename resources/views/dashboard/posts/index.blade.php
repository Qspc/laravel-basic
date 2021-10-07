@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">My Post</h3>
        </div>
    </div>

    <body class="flex items-center justify-center">
        <div class="container">
            <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                <thead class="text-black">
                    <tr class="bg-blue-600 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                        <th class="p-3 text-left">Title</th>
                        <th class="p-3 text-left">Category</th>
                        <th class="p-3 text-left" width="110px">Actions</th>
                    </tr>
                </thead>
                <tbody class="flex-1 sm:flex-none">
                    @foreach ($posts as $post)
                    <tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row sm:rounded-none mb-2 sm:mb-0">
                        <th class="p-3 text-left">{{ $post->title }}</th>
                        <th class="p-3 text-left">{{ $post->category->name }}</th>
                        <th class="p-3 text-left" width="110px">Actions</th>
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
