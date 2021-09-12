@extends('welcome')
@section('content')

<div class="row">
    <div class="col-4">
    <a href="{{ url('inicio') }}" class="btn btn-info" style="float:right">Volver
</a><br><br>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Roles {{ $empleado->nombre}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rolesM as $roles)
                <tr>
                    <td>{{ $roles }}</td>
                    </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>
@endsection