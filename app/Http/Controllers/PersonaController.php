<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()  {
        $persona = Persona::all();
        return view('crudPersona.index', compact('persona'));
    }
    public function create() {
        return view('crudPersona.create');
    }
    public function store(Request $request)  {
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'profesion' => 'required',
            'telefono' => 'required',
            'celular' => 'required',
            'email' => 'required', 
            'direccion' => '',
            'fecha_nacimiento' => 'required',
            'lugar_nacimiento' => 'required',
        ]);
        $persona = new Persona();
        $persona->per_cod = $request->codigo;
        $persona->per_nom = $request->nombre;
        $persona->per_appm = $request->apellido;
        $persona->per_prof = $request->profesion;
        $persona->per_telf = $request->telefono;
        $persona->per_cel = $request->celular;
        $persona->per_email = $request->email;
        $persona->per_dir = $request->direccion;
        $persona->per_fnac = $request->fecha_nacimiento;
        $persona->per_lnac = $request->lugar_nacimiento;
        $persona->per_est = true;
        $persona->per_create  = date('Y-m-d');
        $persona->per_update  = date('Y-m-d');
        $persona->save();
        return redirect()->route('persona.create')->with('success', 'Registro guardado correctamente');
    }
    public function edit(Request $request) {
        $persona = Persona::findOrFail($request->per_cod);
        return view('crudPersona.edit', compact('persona'));
    }
    public function update(Request $request) {
        $request->validate([
            'per_cod' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'profesion' => 'required',
            'telefono' => 'required',
            'celular' => 'required',
            'email' => 'required', 
            'direccion' => '',
            'fecha_nacimiento' => 'required',
            'lugar_nacimiento' => 'required',
        ]);
        $persona = Persona::findOrFail($request->per_cod);
        $persona->per_nom = $request->nombre;
        $persona->per_appm = $request->apellido;
        $persona->per_prof = $request->profesion;
        $persona->per_telf = $request->telefono;
        $persona->per_cel = $request->celular;
        $persona->per_email = $request->email;
        $persona->per_dir = $request->direccion;
        $persona->per_fnac = $request->fecha_nacimiento;
        $persona->per_lnac = $request->lugar_nacimiento;
        $persona->per_est = $request->estado;
        $persona->per_create  = date('Y-m-d');
        $persona->per_update  = date('Y-m-d');
        $persona->save();
        return redirect()->route('persona.index')->with('success', 'Registro actualizado correctamente');
    }
    public function search(Request $request) {
        $query = Persona::query();
        if ($request->has('buscar') && $request->input('buscar') !== '') {
            $criterio = $request->input('criterio');
            $buscar = $request->input('buscar');
    
            $query->where($criterio, 'like', "%{$buscar}%");
        }
        $persona = $query->get();
        return view('crudPersona.index', compact('persona'));
    }
    public function destroy(Request $request) {
        $persona = Persona::findOrFail($request->per_cod);
        $persona->delete();
        return redirect()->route('persona.index')->with('success', 'Registro eliminado correctamente');
    }
}
