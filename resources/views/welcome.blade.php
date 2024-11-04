<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio de Sesión</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            @import 'https://cdn.jsdelivr.net/npm/tailwindcss@latest/tailwind.min.css';
        </style>
    @endif
</head>
<body class="bg-gray-100 font-sans antialiased min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-10 max-w-md w-full text-center border border-gray-200">
        <h1 class="text-4xl font-bold text-blue-600 mb-6">TECNOLOGÍA WEB INF513-CC</h1>
        <p class="text-gray-900 mb-4">Inicia sesión o regístrate para continuar.</p>
        <p class="text-gray-600 mb-4">o si deseas puedes visitar la paágina con esta cuanta de invitado:</p>
        <p class="text-gray-800 font-medium mb-2">Correo electrónico: <span class="font-semibold">invitado@gmail.com</span></p>
        <p class="text-gray-800 font-medium mb-2">contraseña: <span class="font-semibold">invitado123</span></p>
        @if (Route::has('login'))
            <nav class="flex flex-col space-y-4 items-center">
                @auth
                    <a href="{{ url('/dashboard') }}" class="block w-3/4 rounded-md bg-blue-600 text-white py-3 transition transform hover:bg-blue-500 hover:scale-105 text-center">
                        No has cerrado sesión, ingresar nuevamente al dashboard.
                    </a>
                @else
                    <a href="{{ route('login') }}" class="block w-3/4 rounded-md bg-blue-600 text-white py-3 transition transform hover:bg-blue-500 hover:scale-105 text-center">
                        INICIAR SESIÓN
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block w-3/4 rounded-md bg-blue-500 text-white py-3 transition transform hover:bg-blue-400 hover:scale-105 text-center">
                            REGISTRAR
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</body>
</html>
