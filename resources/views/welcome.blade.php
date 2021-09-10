<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/636936b757.js" crossorigin="anonymous"></script>

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
    <div class="container p-3">
        <div class="row">
            <div class="col-12">

                @yield('content')

                @if(session('crearEmpleado') == 'ok')

                <script>
                Swal.fire(
                    'registrado!',
                    'Empleado registrado.',
                    'success'
                )
                </script>
                @endif

                <!-- editar usuario -->
                @if(session('editarEmpleado') == 'ok')

                <script>
                Swal.fire(
                    'Editado!',
                    'Empleado editado.',
                    'success'
                )
                </script>
                @endif

                @if(session('eliminadoEmpleado') == 'ok')

                <script>
                Swal.fire(
                    'Elimando!',
                    'Empleado eliminado.',
                    'success'
                )
                </script>
                @endif

            </div>
        </div>
    </div>
</body>

</html>