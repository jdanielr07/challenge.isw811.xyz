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
        <!-- Hero Section -->
        <div class="min-h-screen bg-gradient-to-br from-purple-100 via-pink-100 to-yellow-100 relative overflow-hidden">
            <!-- Floating Elements -->
            <div class="absolute top-20 left-10 w-20 h-20 bg-yellow-300 rounded-full opacity-20 animate-bounce"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-pink-300 rounded-full opacity-30 animate-pulse"></div>
            <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-purple-300 rounded-full opacity-25 animate-bounce"></div>
            
            <!-- Navigation -->
            <nav class="relative z-10 px-6 py-4">
                <div class="max-w-7xl mx-auto flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-pink-600 rounded-xl flex items-center justify-center transform rotate-12">
                            <span class="text-white font-bold text-lg">C</span>
                        </div>
                        <span class="text-2xl font-bold text-gray-800">Challenge ISW811</span>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" 
                               class="px-6 py-3 bg-white text-gray-700 rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 font-medium transform hover:scale-105">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" 
                               class="px-6 py-3 text-gray-700 hover:text-gray-900 transition-colors duration-200 font-medium">
                                Iniciar Sesión
                            </a>
                            <a href="{{ route('register') }}" 
                               class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 font-medium transform hover:scale-105">
                                Registrarse
                            </a>
                        @endauth
                    </div>
                </div>
            </nav>
            
            <!-- Main Content -->
            <div class="relative z-10 flex items-center justify-center min-h-screen px-6">
                <div class="max-w-6xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <!-- Left Side - Text Content -->
                        <div class="text-center lg:text-left">
                            <h1 class="text-5xl md:text-7xl font-bold text-gray-800 mb-6 leading-tight">
                                Bienvenido al
                                <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                                    Challenge ISW811
                                </span>
                            </h1>
                            
                            <!-- CTA Buttons -->
                            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start items-center mb-8">
                                @auth
                                    <a href="{{ url('/dashboard') }}" 
                                       class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200 font-semibold text-lg transform hover:scale-105">
                                        Ir al Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" 
                                       class="w-full sm:w-auto px-8 py-4 bg-white text-gray-700 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200 font-semibold text-lg border-2 border-gray-200 transform hover:scale-105">
                                        Iniciar Sesión
                                    </a>
                                    <a href="{{ route('register') }}" 
                                       class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200 font-semibold text-lg transform hover:scale-105">
                                        Crear Cuenta
                                    </a>
                                @endauth
                            </div>
                        </div>
                        
                        <!-- Right Side - Meme Display -->
                        <div class="relative">
                            <div class="relative group">
                                <!-- Meme Container -->
                                <div class="relative bg-white rounded-3xl shadow-2xl p-6 transform rotate-3 hover:rotate-0 transition-all duration-300">
                                    <img src="https://jdanielr07.s3.us-east-2.amazonaws.com/perdon.jpg" 
                                         alt="Meme - Perdón" 
                                         class="w-full h-auto rounded-2xl shadow-lg">
                                    
                                    <!-- Decorative Elements -->
                                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-yellow-400 rounded-full animate-pulse"></div>
                                    <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-pink-400 rounded-full animate-bounce"></div>
                                    
                                    <!-- Speech Bubble -->
                                    <div class="absolute -top-12 -left-8 bg-white rounded-2xl px-4 py-2 shadow-lg transform -rotate-12">
                                        <span class="text-sm font-bold text-gray-700">¡Hola! 👋</span>
                                    </div>
                                </div>
                                
                                <!-- Floating Icons -->
                                <div class="absolute -top-8 -right-8 text-4xl animate-bounce">🎉</div>
                                <div class="absolute -bottom-8 -left-8 text-3xl animate-pulse">💻</div>
                                <div class="absolute top-1/2 -right-12 text-2xl animate-spin">⚡</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class="relative z-10 text-center py-8">
                <p class="text-gray-600">
                    © 2024 Challenge ISW811. Desarrollado con ❤️ y mucho humor usando Laravel y Tailwind CSS.
                </p>
            </footer>
        </div>
    </body>
</html>
