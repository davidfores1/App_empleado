@extends('welcome')
@section('content')
    <a href="{{ url('crear') }}" class="btn btn-info" style="float:right">Nuevo
        registro</a><br><br>
    </div>
    </div>
    <div class="row">

        <div class="col-12">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Area</th>
                        <th scope="col">Boletin</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleado as $empleados)
                        <tr>
                            <td>{{ $empleados->nombre }}</td>
                            <td>{{ $empleados->email }}</td>
                            <td>{{ $empleados->sexo }}</td>
                            <td>{{ $empleados->nombre_area }}</td>
                            <td>{{ $empleados->boletin }}</td>
                            <td style="padding: 5px 0px 0px 0px">

                                <a href="{{ url('/empleados/' . $empleados->id . '/edit') }}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <form action="{{ url('/empleados/' . $empleados->id) }}" method="post">

                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" onclick="return confirm('Quieres Borrar')" value="Eliminar"><i <i
                                            class="fas fa-trash-alt"></i></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
@endsection
