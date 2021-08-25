@extends('layouts.app')
@section('content')
    <div class="container">

        @if (Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <a href="{{ url('empleado/create') }}" class="btn btn-success">Agregar Empleado</a><br><br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->id }}</td>
                        <td><img src="{{ asset('storage') . '/' . $empleado->Foto }}" class="img-thumbnail img-fluid" alt="" width="100"></td>
                        <td>{{ $empleado->Nombre . ' ' . $empleado->Apellidos }}</td>
                        <td>{{ $empleado->Telefono }}</td>
                        <td>{{ $empleado->Correo }}</td>
                        <td>
                            <a href="{{ url('/empleado/' . $empleado->id . '/edit') }}" class="btn btn-warning">Editar</a>
                            <form action="{{ url('/empleado/' . $empleado->id) }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')"
                                    value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $empleados->links() !!}

    </div>
@endsection
