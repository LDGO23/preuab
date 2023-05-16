@extends('layouts.app')

@section('title','Create')

@section('content')


<form action="{{ route ('usuarios.store' )}}" table-responsive method="POST" role="form" 
enctype="multipart/form-data" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg form-row">
    @csrf
    <div>
        <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">CREAR USUARIO</h2>
    </div>

    <div class="form-group">
         <label for="">Nombre</label>
        <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
         placeholder="" name="name"  type="text" pattern="[a-zA-Z\s]+" title="Solo colocar texto" required>
    </div>
    
    <div class="form-group" >
        <label for="">Apellidp Paterno</label>
        <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
         placeholder=" " name="lastname"  type="text" pattern="[a-zA-Z\s]+" title="Solo colocar texto" required>
    </div>
    
    <div class="form-group">
        <label for="">Apellido Materno</label>
        <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
        placeholder=" " name="lastnamem"  type="text" pattern="[a-zA-Z\s]+" title="Solo colocar texto" required>
    </div>
         
    <div class="form-group">
        <label for="">Fecha de Naciemiento</label>
        <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
         placeholder="" name="date"  type="date"  required>
    </div>
    
    <div class="form-group">
        <label for="">Correo Electronico</label>
        <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
        placeholder=" " name="email"  type="email" required title="Introduzca una dirección de correo electrónico válida">
    </div>
   
    <div class="form-group">
        <label for="">Numero Telefonico</label>
        <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
         placeholder=" " name="number"  type="text"  pattern="[0-9]+" title="Solo colocar números" required>
    </div>

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold 
    rounded text-white hover:bg-blue-600">Guardar</button>

</form>


@endsection