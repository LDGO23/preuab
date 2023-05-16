<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Usuarios</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <nav class="h-16 flex justify-end py-4 px-16">

        <a href="{{route('usuarios.index')}}" class="border border-blue-500
    rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Usuarios</a>

        <a href="{{route('usuarios.create')}}" class=" border border-blue-300 text-white rounded px-4 pt-1 h-10 bg-blue-500
    font-semibold mx-2 hover:bg-blue-600">Crear Usuario</a>

    </nav>

    <main class="p-16 flex justify-center">
        @yield('content')
    </main>


    @if(session('UsuarioCreado') == 'OK')
    <script type="text/javascript">
    Swai.fire(
        'El usuario ha sido creado',
        '',
        'success'
    );
    </script>
    @endif
    @yield('js')
</body>

</html>