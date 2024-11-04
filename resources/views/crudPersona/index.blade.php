<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <title>GESTIONAR PERSONAS</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto py-10 px-6">
        <div class="text-center mb-8">
          <h1 class="text-4xl font-bold text-blue-600 mb-2">GESTIONAR PERSONAS</h1>
        </div>

        <div class="flex justify-between items-center mb-8">
          <a href="{{ route('persona.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded shadow-md">
            <i class="fas fa-user-plus mr-2"></i>Registrar Persona
          </a>
          <form action="{{ route('persona.search') }}" method="POST" class="flex items-center space-x-3">
            @csrf
            <select name="criterio" class="form-select border-b-2 border-blue-500 focus:outline-none">
                <option value="per_nom">Buscar por Nombre</option>
                <option value="per_cod">Buscar por CI</option>
            </select>
            <input type="text" name="buscar" class="form-input border-b-2 border-blue-500 focus:outline-none" placeholder="Buscar..." aria-label="Buscar">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded shadow-md">
                <i class="fas fa-search"></i>
            </button>
        </form>
        </div>

        <div class="overflow-x-auto shadow-lg rounded-lg">
          <table class="table-auto w-full text-left">
            <thead>
              <tr class="bg-blue-600 text-white">
                <th class="px-4 py-3 font-semibold">Código</th>
                <th class="px-4 py-3 font-semibold">Nombre</th>
                <th class="px-4 py-3 font-semibold">Apellido</th>
                <th class="px-4 py-3 font-semibold">Profesión</th>
                <th class="px-4 py-3 font-semibold">Teléfono</th>
                <th class="px-4 py-3 font-semibold">Celular</th>
                <th class="px-4 py-3 font-semibold">Email</th>
                <th class="px-4 py-3 font-semibold">Dirección</th>
                <th class="px-4 py-3 font-semibold">Fecha de Nacimiento</th>
                <th class="px-4 py-3 font-semibold">Lugar de Nacimiento</th>
                <th class="px-4 py-3 font-semibold">Estado</th>
                <th class="px-4 py-3 font-semibold">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($persona as $item)
              <tr class="bg-white hover:bg-gray-100 border-b">
                <td class="px-4 py-3">{{ $item->per_cod }}</td>
                <td class="px-4 py-3">{{ $item->per_nom }}</td>
                <td class="px-4 py-3">{{ $item->per_appm }}</td>
                <td class="px-4 py-3">{{ $item->per_prof }}</td>
                <td class="px-4 py-3">{{ $item->per_telf }}</td>
                <td class="px-4 py-3">{{ $item->per_cel }}</td>
                <td class="px-4 py-3">{{ $item->per_email }}</td>
                <td class="px-4 py-3">{{ $item->per_dir }}</td>
                <td class="px-4 py-3">{{ $item->per_fnac }}</td>
                <td class="px-4 py-3">{{ $item->per_lnac }}</td>
                <td class="px-4 py-3">{{ $item->per_est }}</td>
                <td class="px-4 py-3 flex space-x-2">
                  <a href="{{ route('persona.edit', $item) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-3 rounded shadow-md">
                    <i class="fas fa-pencil-alt"></i>
                  </a>
                  <form action="{{ route('persona.destroy', $item) }}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar este registro?');" class="inline-block">
                    @method('delete')
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-3 rounded shadow-md">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded shadow mb-6 text-center">
              {{ session('success') }}
        </div>
        @endif
      </div>
</body>
</html>
