@extends('layouts.app')

@section('title','Create')

@section('content')

<form action="{{ route ('usuarios.store' )}}" method="POST" role="form" enctype="multipart/form-data" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
    @csrf

    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">CREAR USUARIO</h2>
    <h4>Nombre</h4>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder="" name="name"  type="text" pattern="[a-zA-Z\s]+" title="Solo colocar texto" required>
    <h3>Apellido Paterno</h3>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder=" Paterno" name="lastname"  type="text" pattern="[a-zA-Z\s]+" title="Solo colocar texto" required>
    <h4>Apellido Materno</h4>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder=" Materno" name="lastnamem"  type="text" pattern="[a-zA-Z\s]+" title="Solo colocar texto" required>
    <h4>Fehca de Nacimiento</h4>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder="" name="date"  type="date"  required>
    <h4>Correo Electrónico</h4>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder=" " name="email"  type="email" required title="Introduzca una dirección de correo electrónico válida">
    <h4>Numero Telefonico</h4>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder=" " name="number"  type="text"  pattern="[0-9]+" title="Solo colocar números" required>
    <h4>Estatus</h4>
    <select class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder="" name="status" required>
    <option value="" disabled selected>Activo / Inactivo</option>
    <option value="Activo">Activo</option>
    <option value="Inactivo">Inactivo</option>

</select>

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold 
    rounded text-white hover:bg-blue-600">Guardar</button>

</form>

@endsection