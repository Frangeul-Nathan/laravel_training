<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
   <header class="bg-black text-white">
        <nav class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-4xl font-bold">Jibal</h1>
            <ul class="flex space-x-6 text-lg">
                <li>
                    <a href="{{route('home')}}" class="hover:text-gray-400 transition duration-300">Home</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="hover:text-gray-400 transition duration-300">Register</a>
                </li>
                <li>
                    <a href="{{route('login')}}" class="hover:text-gray-400 transition duration-300">Login</a>
                </li>
            </ul>
        </nav>
   </header>

   <main class="container mx-auto py-10">
       {{-- @yield('main') --}}
       {{ $slot }}
   </main>
</body>
</html>
