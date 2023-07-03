<h3>{{ $modo }} Empleado</h3>

@if(count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>

@endif

<div class="form-group">
    <label for="Nombre">Nombre <span class="text-muted">(Incluir Apellido)</span></label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}">
</div>

<div class="form-group">
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : old('ApellidoPaterno') }}">
</div>
<div class="form-group">
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : old('ApellidoMaterno') }}">
</div>
<div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" id="Correo" placeholder="you@example.com" value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}">
</div>

<div class="form-group form-file-upload">
    @isset($empleado->Foto )
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" style="max-width: 50px;">
    <br>
    @endisset

    <input type="file" name="Foto" id="Foto" >
    <div class="input-group">
        <input type="text" readonly="" class="form-control" placeholder="Seleccionar Foto">
    </div>
</div>

<button class="btn btn-success" type="submit">Guardar</button>

<a href="{{ url('empleado') }}" class="btn btn-primary"> Regresar</a>
