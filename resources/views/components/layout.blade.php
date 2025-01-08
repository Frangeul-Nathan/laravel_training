<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    {{-- Ajout de Alpine.js pour faire un menu dropdown --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

   <header class="bg-black text-white">

        <nav class="container mx-auto flex justify-between items-center py-4">

            <h1 class="text-4xl font-bold">BVN</h1>

            <ul class="flex space-x-6 text-lg">

                <li>
                    <a href="{{route('home')}}" class="hover:text-gray-400 transition duration-300">Home</a>
                </li>

                {{-- Utilisation du @guest pour montrer dans la barre de recherche seulement aux guest les boutons Register et Login --}}
                @guest

                <li>
                    <a href="{{route('register')}}" class="hover:text-gray-400 transition duration-300">Register</a>
                </li>
                <li>
                    <a href="{{route('login')}}" class="hover:text-gray-400 transition duration-300">Login</a>
                </li>
                    
                @endguest

                @auth

                    <div class="relative grid place-items-center" x-data="{ open: false }">
                        {{-- Bouton du menu dropdown avec Alpine.js --}}
                        <button type="button" class="round-btn" @click="open = !open">
                            <img src="https://picsum.photos/200" alt="">
                        </button>

                        {{-- Menu dropdown avec Alpine.js --}}
                        <div class="bg-white shadow-lg absolute top-10 right-0 rounded-lg overflow-hidden" x-show="open" @click.outside="open = false">
                            {{-- Utilisation de la fonction auth->user->username pour montrer le username de la personne connecté--}}
                            <p class="text-black pl-4 pr-8 py-2 ">{{auth()->user()->username}}</p>

                            <a href="{{route ('dashboard')}}" class="text-black pl-4 pr-8 py-2 "> Dashboard</a>

                            <form action="{{route ('logout')}}" method="POST">
                                @csrf
                                <button type="submit" class="text-black pl-4 pr-8 py-2">Logout</button>

                        </div>
                    </div>
                    
                @endauth
            </ul>
        </nav>
   </header>

   <main class="container mx-auto py-10">
       {{-- @yield('main') --}}
       {{ $slot }}
   </main>
</body>
</html>
