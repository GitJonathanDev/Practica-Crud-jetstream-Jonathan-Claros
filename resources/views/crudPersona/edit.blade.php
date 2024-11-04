<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>EDITAR PERSONA</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto my-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-6">EDITAR PERSONA</h1>
        <hr class="mb-6">
        
        @if(session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('persona.update', $persona) }}" method="POST" class="space-y-6 flex flex-col items-center">
            @csrf
            @method('PUT')
            <input type="hidden" name="per_cod" value="{{ $persona->per_cod }}">

            <div class="flex flex-col w-full max-w-md">
                <label for="nombre" class="font-semibold text-gray-700">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_nom', $persona->per_nom) }}">
                @error('nombre')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="apellido" class="font-semibold text-gray-700">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_appm', $persona->per_appm) }}">
                @error('apellido')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="profesion" class="font-semibold text-gray-700">Profesión:</label>
                <input type="text" name="profesion" id="profesion" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_prof', $persona->per_prof) }}">
                @error('profesion')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="telefono" class="font-semibold text-gray-700">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_telf', $persona->per_telf) }}">
                @error('telefono')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="celular" class="font-semibold text-gray-700">Celular:</label>
                <input type="text" name="celular" id="celular" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_cel', $persona->per_cel) }}">
                @error('celular')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="email" class="font-semibold text-gray-700">Email:</label>
                <input type="email" name="email" id="email" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_email', $persona->per_email) }}">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="direccion" class="font-semibold text-gray-700">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_dir', $persona->per_dir) }}">
                @error('direccion')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="fecha_nacimiento" class="font-semibold text-gray-700">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_fnac', $persona->per_fnac) }}">
                @error('fecha_nacimiento')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="lugar_nacimiento" class="font-semibold text-gray-700">Lugar de Nacimiento:</label>
                <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_lnac', $persona->per_lnac) }}">
                @error('lugar_nacimiento')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-full max-w-md">
                <label for="estado" class="font-semibold text-gray-700">Estado:</label>
                <input type="text" name="estado" id="estado" class="border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring focus:ring-blue-300" value="{{ old('per_est', $persona->per_est) }}">
            </div>

            <div class="flex justify-center space-x-4 mt-6">
                <a href="{{ route('persona.index') }}" class="flex items-center bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-md hover:bg-gray-400 transition">
                    <i class="fas fa-arrow-left mr-2"></i>VOLVER
                </a>
                <button type="submit" class="flex items-center bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition">
                    <i class="fas fa-edit mr-2"></i>MODIFICAR
                </button>
            </div>
        </form>
    </div>
</body>
</html>
