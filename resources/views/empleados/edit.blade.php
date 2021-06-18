@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <form method="POST" action="{{url('/empleados/'.$empleado->id)}}">
                @csrf
                {{method_field('PATCH')}}
           @include('empleados.form',['modo'=>'Editar'])
            </form>
        </div>
    </div>
    </div>
    @endsection