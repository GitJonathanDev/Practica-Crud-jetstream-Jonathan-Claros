<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <title>REGISTRAR PERSONA</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto my-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-6">REGISTRAR PERSONA</h1>
        <hr class="mb-6">
        
        @if(session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('persona.store') }}" method="POST" class="space-y-6 flex flex-col items-center">
            @csrf
            
            <div class="flex flex-col w-full max-w-md">
                <label for="codigo" class="font-semibold text-gray-700">Código:</label>
                <input type="text" name="codigo" id="codigo" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_cod') }}">
                @error('codigo')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="nombre" class="font-semibold text-gray-700">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_nom') }}">
                @error('nombre')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="apellido" class="font-semibold text-gray-700">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_appm') }}">
                @error('apellido')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="profesion" class="font-semibold text-gray-700">Profesión:</label>
                <input type="text" name="profesion" id="profesion" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_prof') }}">
                @error('profesion')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="telefono" class="font-semibold text-gray-700">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_telf') }}">
                @error('telefono')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="celular" class="font-semibold text-gray-700">Celular:</label>
                <input type="tel" name="celular" id="celular" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_cel') }}">
                @error('celular')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="email" class="font-semibold text-gray-700">Email:</label>
                <input type="email" name="email" id="email" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_email') }}">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="direccion" class="font-semibold text-gray-700">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_dir') }}">
                @error('direccion')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="fecha_nacimiento" class="font-semibold text-gray-700">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_fnac') }}">
                @error('fecha_nacimiento')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="lugar_nacimiento" class="font-semibold text-gray-700">Lugar de Nacimiento:</label>
                <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_lnac') }}">
                @error('lugar_nacimiento')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-center space-x-4 mt-6">
                <a href="{{ route('persona.index') }}" class="flex items-center bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-md hover:bg-gray-400 transition">
                    ATRÁS
                </a>
                <button type="submit" class="flex items-center bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition">
                    GUARDAR
                </button>
            </div>
        </form>
    </div>
</body>
</html>
