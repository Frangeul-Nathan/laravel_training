{{-- @extends('layout')

@section('main') --}}

<x-layout>

    <h1>Hello {{auth()->user()->username}}</h1>

    <body class="bg-gradient-to-r from-blue-50 via-white to-blue-50 text-gray-800">
        <div class="min-h-screen flex items-center justify-center">
            <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-lg border border-gray-200">
                <h1 class="text-3xl font-semibold text-center text-blue-600 mb-8">Create a new post</h1>

                {{-- Session message if success --}}

                @if (session ('success'))

                <div>
                    <p>{{ session ('success') }}</p>
                </div>
                    
                @endif

                <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
                    @csrf
                
                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-semibold text-gray-700">Title</label>
                        <input 
                            type="text" 
                            name="title"
                            value="{{ old('title') }}"
                            class="mt-1 block w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-200 sm:text-sm focus:outline-none @error('title') border-red-500 @enderror"
                            placeholder="Enter your title"
                        >
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <!-- Post Body -->
                    <div>
                        <label for="body" class="block text-sm font-semibold text-gray-700">Post</label>
                        <textarea 
                            name="body"
                            placeholder="Enter your post"
                            class="mt-1 block w-full px-4 py-8 mb-2 rounded-lg border border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-200 sm:text-sm focus:outline-none @error('body') border-red-500 @enderror"
                        >{{ old('body') }}</textarea>
                        @error('body')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <!-- Submit Button -->
                    <div>
                        <button 
                            type="submit" 
                            class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white py-3 px-4 rounded-lg hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-offset-2"
                        >
                            Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</x-layout>

{{-- @endsection --}}
