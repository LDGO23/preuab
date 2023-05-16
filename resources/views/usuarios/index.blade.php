@extends('layouts.app')

@section('title','Home')

@section('content')

<div table-responsive class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table table-responsive class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-500 text-white row align-items-start" >
                <th class=" w-14 py-4 ...">ID</th>
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

            <tr table-responsive class="row align-items-start" >
                <td class="py-3 px-6">{{ $row->id }}</td>
                <td class="p-3">{{ $row ->name }}</td>
                <td class="p-3 text-left">{{ $row->lastname }}</td>
                <td class="p-3 text-left">{{ $row->lastnamem }}</td>
                <td class="p-3 text-center">{{ $row->date }}</td>
                <td class="p-3 text-left">{{ $row->email }}</td>
                <td class="p-3 text-center">{{ $row->number }}</td>
                <td class="p-3 text-center">{{ $row->status }}</td>
                <td class="p-3 flex justify-center">

                    <button data-toggle="modal" class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1"  onclick="cambiarEstadoUsuario({{ $row->id }})">
                        <i class="fas fa-trash"></i></button>
                    <a href="{{ route('usuarios.edit', $row->id) }}"
                        class="bg-green-500 text-white px-3 py-1 rounded-sm">
                        <i class="fas fa-pen"></i>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection




@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Usuario editado exitosamente',
    text: '',
    confirmButtonText: 'Aceptar'
});
</script>
@endif

@if(session('agregado'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Usuario agregado exitosamente',
    text: '',
    confirmButtonText: 'Aceptar'
});
</script>
@endif

<<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function cambiarEstadoUsuario(id) {
        if (confirm("¿Estás seguro de que deseas cambiar el estado de este usuario?")) {
            $.ajax({
                url: "{{ route('usuarios.cambiar_estado', '__id__') }}".replace('__id__', id),
                type: "PUT",
                data: {
                    _token: "{{ csrf_token() }} "
                },
                success: function (res) {
                    alert(res);
                    location.reload(); // Recarga la página
                },
            });
        }
    }
</script>

@endsection