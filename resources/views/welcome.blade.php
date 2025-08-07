<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Challenge ISW811</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
        
        <!-- Styles -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
        @endif
    </head>
    <body class="antialiased">
        <div class="min-h-screen bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-100 flex items-center justify-center">
            <div class="max-w-4xl mx-auto text-center px-6">
                <!-- Meme Image -->
                <div class="mb-8">
                    <img src="{{ asset('storage/uploads/perdon.jpg') }}" 
                         alt="Meme - Perdón" 
                         class="w-full max-w-md mx-auto rounded-2xl shadow-2xl">
                </div>
                
                <!-- Message -->
                <div class="mb-12">
                    <p class="text-2xl md:text-3xl font-semibold text-gray-800 mb-4">
                        "Perdón por no ser el primero... pero aquí estoy" 😅
                    </p>
                </div>
                
                <!-- Login/Register Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                           class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200 font-semibold text-lg">
                            Ir al Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" 
                           class="w-full sm:w-auto px-8 py-4 bg-white text-gray-700 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200 font-semibold text-lg border-2 border-gray-200">
                            Iniciar Sesión
                        </a>
                        <a href="{{ route('register') }}" 
                           class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200 font-semibold text-lg">
                            Crear Cuenta
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
