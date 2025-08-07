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
        <div class="relative min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50">
            <!-- Background Image -->
            <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('storage/uploads/238ffd1d12c527357ed7bd76817e6ee0.jpg') }}" 
                     alt="Background" 
                     class="w-full h-full object-cover opacity-20">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20"></div>
            </div>
            
            <!-- Navigation -->
            <nav class="relative z-10 px-6 py-4">
                <div class="max-w-7xl mx-auto flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-sm">C</span>
                        </div>
                        <span class="text-xl font-bold text-gray-800">Challenge ISW811</span>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" 
                               class="px-6 py-2 bg-white text-gray-700 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 font-medium">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" 
                               class="px-6 py-2 text-gray-700 hover:text-gray-900 transition-colors duration-200 font-medium">
                                Iniciar Sesión
                            </a>
                            <a href="{{ route('register') }}" 
                               class="px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-200 font-medium">
                                Registrarse
                            </a>
                        @endauth
                    </div>
                </div>
            </nav>
            
            <!-- Main Content -->
            <div class="relative z-10 flex items-center justify-center min-h-screen px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <!-- Hero Content -->
                    <div class="mb-12">
                        <h1 class="text-5xl md:text-7xl font-bold text-gray-800 mb-6 leading-tight">
                            Bienvenido al
                            <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                                Challenge ISW811
                            </span>
                        </h1>
                        <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto leading-relaxed">
                            Una plataforma moderna para demostrar tus habilidades de desarrollo web con Laravel y las mejores tecnologías.
                        </p>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                        @auth
                            <a href="{{ url('/dashboard') }}" 
                               class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 font-semibold text-lg">
                                Ir al Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" 
                               class="w-full sm:w-auto px-8 py-4 bg-white text-gray-700 rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 font-semibold text-lg border-2 border-gray-200">
                                Iniciar Sesión
                            </a>
                            <a href="{{ route('register') }}" 
                               class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 font-semibold text-lg">
                                Crear Cuenta
                            </a>
                        @endauth
                    </div>
                    
                    <!-- Features Grid -->
                    <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-200">
                            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Rápido y Moderno</h3>
                            <p class="text-gray-600">Desarrollado con las últimas tecnologías para ofrecer una experiencia excepcional.</p>
                        </div>
                        
                        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-200">
                            <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Seguro y Confiable</h3>
                            <p class="text-gray-600">Implementamos las mejores prácticas de seguridad para proteger tus datos.</p>
                        </div>
                        
                        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-200">
                            <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Fácil de Usar</h3>
                            <p class="text-gray-600">Interfaz intuitiva diseñada para que cualquier usuario pueda utilizarla sin problemas.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class="relative z-10 text-center py-8">
                <p class="text-gray-600">
                    © 2024 Challenge ISW811. Desarrollado con ❤️ usando Laravel y Tailwind CSS.
                </p>
            </footer>
        </div>
    </body>
</html>
