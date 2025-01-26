<x-layout>

    {{-- Pour montrer le username du user ainsi que son nombre de posts --}}
    <h1>{{ $user->username }} 's Posts {{ $posts->total() }}</h1>

    {{-- User's post --}}

    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Boucle foreach pour poster chaque postes de ma bdd --}}
            @foreach ($posts as $post)
            {{-- Utilisation de ma props postCard pour alléger le code et le rendre plus lisible --}}
                <x-postCard :post="$post" />
            @endforeach
        </div>
    </div>

    <div>
        {{-- Pagination --}}
        {{ $posts->links() }}
    </div>

</x-layout>