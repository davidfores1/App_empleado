@extends('welcome')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-8">
                <form method="POST" action="{{ url('empleados') }}">
                    @csrf
                    @include('empleados.form',['modo'=>'Crear'])
                </form>
            </div>
        </div>
    </div>
@endsection
