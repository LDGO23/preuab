<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = usuario::latest()->get();
    
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();

            $usuario->name      = $request->name;
            $usuario->lastname  = $request->lastname;
            $usuario->lastnamem = $request->lastnamem;
            $usuario->date      = $request->date;
            $usuario->email     = $request->email;
            $usuario->number    = $request->number;
            $usuario->status    = "Activo";


            // $usuario->name       = $request->input('name');
            // $usuario->lastname   = $request->input('lastname');
            // $usuario->lastnamem  = $request->input('lastnamem');
            // $usuario->date       = $request->input('date');
            // $usuario->email      = $request->input('email');
            // $usuario->number     = $request->input('number');
            // $usuario->status      $request->input('status');

        $usuario->save();
        return redirect()->route('usuarios.index')->with('agregado', 'Usuario agregado exitosamente');
    }
    
    public function edit($id)
    {
        $usuario = Usuario::find($id);

        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        
        $usuario = Usuario::find($id);

        $usuario->update($request->all());
        
        return redirect()->route('usuarios.index')->with('success', 'Usuario editado exitosamente');

    }

    public function cambiarEstado($id)
    {
        $usuario = Usuario::find($id);
        $usuario->status = 'Inactivo';
        $usuario->save();
        return redirect()->route('usuarios.index');
    }
}
