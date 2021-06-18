@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <form method="POST" action="{{url('/empleados/'.$empleados->id)}}">
                @csrf
                {{method_field('PATCH')}}
           @include('empleados.form')
            </form>
        </div>
    </div>
    </div>
    @endsection