@extends('layouts.app')

@section('title','Home')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

<table class="table-fixed w-full">
  <thead>
    <tr class="bg-indigo-500 text-white">
      <th class="w-14 py-4 ...">ID</th>
      <th class="w-1/8 py-4 ...">Nombre</th>
      <th class="w-1/8 py-4 ...">Apellido Paterno</th>
      <th class="w-1/8 py-4 ...">Apellido Materno</th>
      <th class="w-1/6 py-4 ...">Fecha de Nacimiento</th>
      <th class="w-1/6 py-4 ...">Correo</th>
      <th class="w-1/10 py-4 ...">Telefono</th>
      <th class="w-1/10 py-4 ...">Estatus</th>
      <th class="w-28 py-4 ...">Accion</th>
    </tr>
  </thead>
    <tbody>
        @foreach ($usuarios as $row)

      <tr>
        <td class="py-3 px-6">{{ $row->id }}</td>
        <td class="p-3">{{ $row ->name }}</td>
        <td class="p-3 text-center">{{ $row->lastname }}</td>
        <td class="p-3 text-center">{{ $row->lastnamem }}</td>
        <td class="p-3 text-center">{{ $row->date }}</td>
        <td class="p-3 text-center">{{ $row->email }}</td>
        <td class="p-3 text-center">{{ $row->number }}</td>
        <td class="p-3 text-center">{{ $row->status }}</td>
      <td class="p-3 flex justify-center">
        <form action="{{ route('usuarios.destroy', $row->id) }}" method="POST">
        @csrf
        @method('delete')
        <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
        <i class="fas fa-trash"></i></button>
        </form> 
        <a href="{{ route('usuarios.edit', $row->id) }}"class="bg-green-500 text-white px-3 py-1 rounded-sm">
        <i class="fas fa-pen"></i>
      </td>
    </tr>

    @endforeach
  </tbody>
</table>
</div>
@endsection