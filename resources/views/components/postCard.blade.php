@props(['post'])

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="p-4">
        {{-- Title --}}
        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $post->title }}</h2>

        {{-- Body --}}
        <p class="text-gray-600">{{ Str::words($post->body, 15) }}</p>

        {{-- Info utilisateur et date --}}
            {{-- Possible en créant la relation BelongsTo dans le model Post, en tant que 2ème param de la route, passer la relation pour rendre l'url dynamique --}}
            <span class="text-sm text-gray-500 pt-4">Posted by</span> <a href="{{ route('posts.user', $post->user)}}" class="font-medium text-gray-700">{{$post->user->username}}</a> 
            {{-- diffForHumans est une méthode de Carbon (voir leur doc) et est implémenté directement dans laravel --}}
            {{ $post->created_at->diffForHumans() }}
    </div>
</div>