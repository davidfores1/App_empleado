<div class="form-group">
    <label class="label">Nombre</label>
    <input required autocomplete="off" value="{{ isset($empleados->nombre) ?$empleados->nombre : '' }}" name="cedula"
        class="form-control" type="text" placeholder="Nombre">
</div>
<div class="form-group">
    <label class="label">Email</label>
    <input required autocomplete="off" name="nombre" class="form-control"
        value="{{ isset($empleados->email) ?$empleados->email : '' }}" type="text" placeholder="Email">
</div>


<button class="btn btn-success">Guardar</button>
<a class="btn btn-primary" href="{{ url('inicio') }}">Volver al listado</a>
