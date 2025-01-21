{{-- @extends('layout')

@section('main') --}}

<x-layout>

    {{-- @auth
        <h1>Logged in</h1>
    @endauth

    @guest
        <h1>Guest</h1>
    @endguest --}}

    <h1>Latest Posts</h1>

    {{-- Div card pour chaque postes --}}
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Boucle foreach pour poster chaque postes de ma bdd --}}
            @foreach ($posts as $post)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-4">
                    {{-- Title --}}
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $post->title }}</h2>

                    {{-- Body --}}
                    <p class="text-gray-600">{{ Str::words($post->body, 15) }}</p>

                    {{-- Info utilisateur et date --}}
                    <p class="text-sm text-gray-500 pt-4">
                        Posted by <span class="font-medium text-gray-700">Username</span> 
                        {{-- diffForHumans est une méthode de Carbon (voir leur doc) et est implémenté directement dans laravel --}}
                        {{ $post->created_at->diffForHumans() }}
                    </p>

                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div>
        {{-- Pagination --}}
        {{ $posts->links() }}
    </div>
    
</x-layout>

{{-- @endsection --}}
