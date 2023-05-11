@extends('layouts.app')

@section('title','Edit')

@section('content')

<form action="{{ route ('usuarios.update', $usuario->id  )}}" method="POST" role="form" enctype="multipart/form-data" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
    @csrf
    @method('put')

    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">EDITAR USUARIO</h2>

    <h4>Nombre</h4>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder="Nombre" name="name"  type="text" value="{{ $usuario->name}}" pattern="[a-zA-Z\s]+" title="Solo colocar texto" required>

    <h4>Apellido Paterno</h4>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder="Apellido Paterno" name="lastname"  type="text" value="{{ $usuario->lastname}}" pattern="[a-zA-Z\s]+" title="Solo colocar texto" required>
    <h4>Apellido Materno</h4>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder="Apellido Materno" name="lastnamem"  type="text" value="{{ $usuario->lastnamem}}" pattern="[a-zA-Z\s]+" title="Solo colocar texto" required>
    <H4>Fecha de Nacimiento</H4>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder="Fecha de Nacimiento" name="date"  type="date" value="{{ $usuario->date}}" required>
    <h4>Correo Electronico</h4>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder="Correo Electronico" name="email"  type="email" value="{{ $usuario->email}}" type="email" required title="Introduzca una dirección de correo electrónico válida">
    <h4>Numero Telefonico</h4>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder="Numero Telefonico" name="number"  type="text" value="{{ $usuario->number}}"value="{{ $usuario->number}}"  pattern="[0-9]+" title="Solo colocar números" required>
    <h4>Estatus</h4>
    <select class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
    placeholder="Estatus" name="status"  value="{{ $usuario->status}}" >
    <option value="" disabled selected>Selecciona</option>
    <option value="Activo">Activo</option>
    <option value="Inactivo">Inactivo</option>

</select>
<div style="display: flex; justify-content: space-between;">
    <button type="submit" class="my-3  bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Guardar</button>
    <a href="{{route('usuarios.index')}}" class="my-3 bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Cancelar</a>
</div>


</form>





@endsection