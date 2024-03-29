<h1> {{ $modo }} empleado </h1>

@if (count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre"
        value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}" id="Nombre">
</div>
<div class="form-group">
    <label for="Apellidos">Apellidos</label>
    <input type="text" class="form-control" name="Apellidos"
        value="{{ isset($empleado->Apellidos) ? $empleado->Apellidos : old('Apellidos') }}" id="Apellidos">
</div>
<div class="form-group">
    <label for="Telefono">Telefono</label>
    <input type="text" class="form-control" name="Telefono"
        value="{{ isset($empleado->Telefono) ? $empleado->Telefono : old('Telefono') }}" id="Telefono">
</div>
<div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo"
        value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}" id="Correo">
</div>
<div class="form-group">
    @if (isset($empleado->Foto))
        <label for="Foto"></label>
        <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $empleado->Foto }}" alt="" width="100">
    @endif
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
</div>
<input class="btn btn-success" type="submit" value="{{ $modo }} empleado">
<a class="btn btn-primary" href="{{ url('empleado') }}">Regresar</a>
