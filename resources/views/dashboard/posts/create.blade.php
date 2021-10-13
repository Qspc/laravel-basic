@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Create New Post</h3>
        </div>
    </div>

    <form action="/dashboard/posts" method="POST">
      @csrf
        <div class="md:grid md:grid-cols-2 overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 sm:p-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" autocomplete="given-name" class="mt-1 focus:ring-black-500 focus:border-black-500 block w-full shadow-sm lg:text-sm border-black-700 rounded-sm" autofocus value="{{ old('slug') }}">
              </div>
              @error('title')
              <div class="text-sm text-red-700">
                {{ $message }}   
              </div>
              @enderror

              <div class="col-span-6 sm:col-span-3 mt-4">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" autocomplete="family-name" class="mt-1 focus:ring-black-500 focus:border-black-500 block w-full shadow-sm sm:text-sm border-black-700 rounded-sm" value="{{ old('slug') }}">
              </div>
              @error('slug')
              <div class="text-sm text-red-700">
                {{ $message }}   
              </div>
              @enderror

              <div class="col-span-6 sm:col-span-3 mt-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <select id="category" name="category_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-span-6 sm:col-span-3 mt-4">
                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
              </div>
              @error('body')
              <div class="text-sm text-red-700">
                {{ $message }}   
              </div>
              @enderror

            <div class="px-4 py-3 text-right sm:px-6 mt-4">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Save
                </button>
            </div>
        </div> 
      </form>

      <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
          fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });


        document.addEventListener('trix-file-accept', function(e){
          e.preventDefault();
        })
      </script>
@endsection
