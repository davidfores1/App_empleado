@extends('welcome')
@section('content')
<a href="{{url('crear')}}" class="btn btn-success" style="float:right">Nuevo
    registro</a><br><br>
    </div>
    </div>
    <div class="row">

        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Area</th>
                        <th scope="col">Boletin</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleado as $empleados)
                    <tr>
                     <td>{{$empleados->nombre}}</td>
                     <td>{{$empleados->email}}</td>
                     <td>{{$empleados->sexo}}</td>
                     <td>{{$empleados->area_id}}</td>
                     <td>{{$empleados->boletin}}</td>
                     <td>
                    
                    <a href="{{url('/niveles/'.$empleados->id.'/edit')}}">Editar</a>
                
                    <form action="{{url('/niveles/'.$empleados->id)}}" method="post">
                    
                    @csrf
                    {{method_field('DELETE')}}
                     <button>Eliminar</button>
                    </form>
                     
                     </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
@endsection
