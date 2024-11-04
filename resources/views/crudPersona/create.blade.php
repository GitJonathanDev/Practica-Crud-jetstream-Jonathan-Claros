<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <title>Registrar persona</title>
</head>
<body>
    <div class="container mx-auto my-8">
        <p class="text-2xl font-bold mb-4">REGISTRAR PERSONAS</p>
        <hr class="mb-4">
        @if(session('success'))
          <div class="bg-green-500 text-white p-2">
            {{ session('success') }}
          </div>
        @endif
        <form action="{{route('persona.store')}}" method="POST" class="space-y-4">
          @csrf
          <div class="flex flex-col">
            <label for="codigo" class="font-bold">codigo:</label>
            <input type="text" name="codigo" id="codigo" class="border-2 border-gray-300 p-2 rounded-md w-96"  value="{{ old('per_cod') }}">
          @error('codigo')
           {{$message}}   
          @enderror
          </div>
          <div class="flex flex-col">
            <label for="nombre" class="font-bold">nombre:</label>
            <input type="text" name="nombre" id="nombre" class="border-2 border-gray-300 p-2 rounded-md w-96"  value="{{ old('per_nom') }}">
            @error('nombre')
            {{$message}}   
           @enderror
          </div>
          <div class="flex flex-col">
            <label for="apellido" class="font-bold">apellido:</label>
            <input type="text" name="apellido" id="apellido" class="border-2 border-gray-300 p-2 rounded-md w-96"  value="{{ old('per_appm') }}">
            @error('apellido')
           {{$message}}   
          @enderror
          </div>
          <div class="flex flex-col">
            <label for="profesion" class="font-bold">profesión:</label>
            <input type="text" name="profesion" id="profesion" class="border-2 border-gray-300 p-2 rounded-md w-96"  value="{{ old('per_prof') }}">
            @error('profesion')
           {{$message}}   
          @enderror
          </div>
          <div class="flex flex-col">
            <label for="telefono" class="font-bold">telefono:</label>
            <input type="text" name="telefono" id="telefono" class="border-2 border-gray-300 p-2 rounded-md w-96"  value="{{ old('per_telf') }}">
            @error('telefono')
           {{$message}}   
          @enderror
          </div>
          <div class="flex flex-col">
            <label for="celular" class="font-bold">celular:</label>
            <input type="tel" name="celular" id="celular" class="border-2 border-gray-300 p-2 rounded-md w-96"  value="{{ old('per_cel') }}">
            @error('celular')
           {{$message}}   
          @enderror
          </div>
          <div class="flex flex-col">
            <label for="email" class="font-bold">email:</label>
            <input type="email" name="email" id="email" class="border-2 border-gray-300 p-2 rounded-md w-96"  value="{{ old('per_email') }}">
            @error('email')
           {{$message}}   
          @enderror
          </div>
          <div class="flex flex-col">
            <label for="direccion" class="font-bold">dirección:</label>
            <input type="text" name="direccion" id="direccion" class="border-2 border-gray-300 p-2 rounded-md w-96"  value="{{ old('per_dir') }}">
            @error('direccion')
           {{$message}}   
          @enderror
          </div>
          <div class="flex flex-col">
            <label for="fecha_nacimiento" class="font-bold">fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="border-2 border-gray-300 p-2 rounded-md w-96"  value="{{ old('per_fnac') }}">
            @error('fecha_nacimiento')
           {{$message}}   
          @enderror
          </div>
          <div class="flex flex-col">
            <label for="lugar_nacimiento" class="font-bold">lugar de nacimiento:</label>
            <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" class="border-2 border-gray-300 p-2 rounded-md w-96"  value="{{ old('per_lnac') }}">
            @error('lugar_nacimiento')
           {{$message}}   
          @enderror
          </div>
          <div class="flex">
            <a href="{{route('persona.index')}}" class="bg-gray-400 text-black font-bold py-2 rounded-md">ATRAS</a>
            <button type="submit" value="Guardar" class="bg-red-300 text-red-500 font-bold py-2 mx-4 rounded-md">GUARDAR</button>
          </div>
        </form>
      </div>
</body>
</html>