<!-- Indicamos que vamos a usar la plantilla de app.blade.php que se encuentra en la carpeta layouts -->
@extends('layouts.app')
<!-- Indicamos que el titulo ca a ser Edit -->
@section('title','Edit')
<!-- Indicamos que apartir de aqui la seccion de contienidos va a ser lo siguiene que se ponga hasta endsection  -->
@section('content')

<form table-responsive action="{{ route ('usuarios.update', $usuario->id  )}}" method="POST" role="form" enctype="multipart/form-data"
    class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg form-row">
    @csrf
    @method('put')

    <div>
        <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">EDITAR USUARIO</h2>
    </div>

    <div class="form-group">
        <label for="">Nombre</label>
        <input  class="form-control my-2 w-full bg-gray-200 p-2 text-lg rounded text-left placebolder-gray-900" placeholder="Nombre"
            name="name" type="text" value="{{ $usuario->name}}" pattern="[a-zA-Z\s]+" title="Solo colocar texto"
            required>
    </div>
    <div class="form-group">
        <label>Apellido Paterno</label>
        <input class="form-control my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900 text-left"
            placeholder="Apellido Paterno" name="lastname" type="text" value="{{ $usuario->lastname}}"
            pattern="[a-zA-Z\s]+" title="Solo colocar texto" required>
    </div>
    <div class="form-group">
        <label>Apellido Materno</label>
        <input class="form-control my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900" placeholder="Apellido Materno"
            name="lastnamem" type="text" value="{{ $usuario->lastnamem}}" pattern="[a-zA-Z\s]+"
            title="Solo colocar texto" required>

    </div>
    <div class="form-group">
        <label>Fecha de Nacimiento</label>
        <input class="form-control my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900"
            placeholder="Fecha de Nacimiento" name="date" type="date" value="{{ $usuario->date}}" required>

    </div>
    <div class="form-group">
        <label>Correo Electronico</label>
        <input class="form-control my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900" placeholder="Correo Electronico"
            name="email" type="email" value="{{ $usuario->email}}" type="email" required
            title="Introduzca una dirección de correo electrónico válida">
    </div>
    <div class="form-group">
        <label>Numero Telefonico</label>
        <input class="form-control my-2 w-full bg-gray-200 p-2 text-lg rounded placebolder-gray-900" placeholder="Numero Telefonico"
            name="number" type="text" value="{{ $usuario->number}}" value="{{ $usuario->number}}" pattern="[0-9]+"
            title="Solo colocar números" required>

    </div>
    <div style="display: flex; justify-content: space-between;">
        <button type="submit"
            class="my-3  bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Guardar</button>
        <a href="{{route('usuarios.index')}}"
            class="my-3 bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Cancelar</a>
    </div>
</form>





@endsection