<x-layout>

    <body class="bg-gradient-to-r from-blue-50 via-white to-blue-50 text-gray-800">
        <div class="min-h-screen flex items-center justify-center">
            <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-lg border border-gray-200">
                <h1 class="text-3xl font-semibold text-center text-blue-600 mb-8">Create Your Account</h1>
                <form action="{{ route('register') }}" method="POST" class="space-y-6">
                    {{-- CSRF pour sécuriser le formulaire --}}
                    @csrf
                    
                    <!-- Username -->
                    <div>
                        <label for="username" class="block text-sm font-semibold text-gray-700">Username</label>
                        <input 
                            type="text" 
                            name="username"
                            value="{{ old('username') }}"
                            class="mt-1 block w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-200 sm:text-sm focus:outline-none @error('username') border-red-500 @enderror"
                            placeholder="Enter your username"
                        >
                        {{-- Message d'erreur --}}
                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                        <input 
                        {{-- Bien mettre le type en text pour l'email pour afficher correctement le message d'erreur --}}
                            type="text" 
                            name="email"
                            value="{{ old('email') }}"
                            class="mt-1 block w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-200 sm:text-sm focus:outline-none @error('email') border-red-500 @enderror"
                            placeholder="Enter your email"
                        >
                        {{-- Message d'erreur --}}
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                        <input 
                            type="password" 
                            name="password"
                            class="mt-1 block w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-200 sm:text-sm focus:outline-none @error('password') border-red-500 @enderror"
                            placeholder="Enter your password"
                        >
                        {{-- Message d'erreur --}}
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700">Confirm Password</label>
                        <input 
                            type="password" 
                            name="password_confirmation"
                            class="mt-1 block w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-200 sm:text-sm focus:outline-none"
                            placeholder="Confirm your password"
                        >
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button 
                            type="submit" 
                            class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white py-3 px-4 rounded-lg hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-offset-2"
                        >
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>

</x-layout>
