<h3>{{ $modo }} Empleados</h3>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre completo *</label>
    <div class="col-sm-10">
        <input required autocomplete="off" value="{{ isset($empleado->nombre) ?$empleado->nombre : '' }}" name="nombre"
        class="form-control" type="text" placeholder="Nombre">

        @error('nombre')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Correo Electronico *</label>
    <div class="col-sm-10">
        <input required autocomplete="off" name="email" class="form-control"
        value="{{ isset($empleado->email) ?$empleado->email : '' }}" type="email" placeholder="Email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
  </div>
  <fieldset class="form-group row">
    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Sexo *</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="M" {{ old('$empleado->sexo') === "M" ? 'checked' : (isset($empleado->boletin) && $empleado->sexo === 'M' ? 'checked' : '') }}>
        <label class="form-check-label" for="gridRadios1">
          Masculino
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="F" {{ old('$empleado->sexo') === "F" ? 'checked' : (isset($empleado->boletin) && $empleado->sexo === 'F' ? 'checked' : '') }}>
        <label class="form-check-label" for="gridRadios2">
            Femenino
        </label>

        @error('sexo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>
  </fieldset>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Area *</label>
    <div class="col-sm-10">
        <select id="inputState" class="form-control" name="area_id" required>
        <option value="">Seleccionar...</option>
            @foreach($area as $areas)
            <option value="{{ $areas->id }}" {{ old('$empleado->area_id') === $areas->id ? 'selected' : (isset($empleado->area_id) && $empleado->area_id === $areas->id ? 'selected' : '')}} >{{ $areas->nombre_area }}</option>
            @endforeach
        </select>
        @error('area')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Descripcion*</label>
    <div class="col-sm-10">
        <textarea required class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3">{{ isset($empleado->descripcion) ?$empleado->descripcion : '' }}</textarea>
        @error('descripcion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" name="boletin" type="checkbox" id="gridCheck1" value="SI" {{ old('$empleado->boletin') === "SI" ? 'checked' : (isset($empleado->boletin) && $empleado->boletin === 'SI' ? 'checked' : '') }}>
        <label class="form-check-label" for="gridCheck1">
        Deseo recibir boletin informativo
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
        <input type="submit" class="btn btn-primary" value="{{ $modo }}">
    </div>
  </div>
