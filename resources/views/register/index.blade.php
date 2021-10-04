@extends('layouts.main')

@section('container')

<div class=" flex items-center justify-center bg-gray-50 py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Registration Form
        </h2>
      </div>

      <form class="mt-8 space-y-6" action="/register" method="POST">
        @csrf
        <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label for="name" class="sr-only">Name</label>
                <input id="name" name="name" type="text" autocomplete="name" required value="{{ old('name') }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
            </div>
            @error('name')
            <div class="text-sm text-red-700">
              {{ $message }}   
            </div>
            @enderror
            <div>
                <label for="Username" class="sr-only">Username</label>
                <input id="Username" name="Username" type="text" autocomplete="Username" required value="{{ old('Username') }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('Username') is-invalid @enderror" placeholder="Username">
            </div>
            @error('Username')
            <div class="text-sm text-red-700">
              {{ $message }}   
            </div>
            @enderror
            <div>
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required value="{{ old('email') }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
            </div>
            @error('email')
            <div class="text-sm text-red-700">
              {{ $message }}   
            </div>
            @enderror
            <div>
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
            </div>
            @error('password')
            <div class="text-sm text-red-700">
              {{ $message }}   
            </div>
            @enderror
            
        </div>
  
        
        <div class="flex items-center justify-between">
            <div class="flex items-center">
            </div>
            <div class="text-sm">
              <a href="/login" class="font-medium text-red-500 hover:text-indigo-500">
                Sudah daftar?
              </a>
            </div>
        </div>

        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Sign up
          </button>
        </div>
      </form>
    </div>
  </div>

    
@endsection
