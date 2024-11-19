@extends('layouts.admin')

@section('title', 'Incapacidades')

@push('head')
    <link rel="icon" type="image/x-icon" href="{{ asset('images/ux.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="table-container p-3">
    <h1 class="mb-4">Lista de Incapacidades</h1>

    <!-- Tabla -->
    @if ($salientes->isEmpty())
        <p class="no-data">No hay incapacidades registradas en este momento.</p>
    @else
        <table class="table table-bordered table-hover">
            <thead class="thead-blue">
                <tr class="text-center text-columna-incapacidad">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo empleado</th>
                    <th scope="col">Código de incapacidad</th>
                    <th scope="col">Días incapacidad</th>
                    <th scope="col">Fecha de Radicado</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($salientes as $saliente)
                    <tr class="text-center">
                        <td>{{ $saliente->id }}</td>
                        <td>{{ $saliente->nombre_completo }}</td>
                        <td>{{ $saliente->tipo_empleado }}</td>
                        <td>{{ $saliente->codigo_incapacidad }}</td>
                        <td>{{ $saliente->dias_incapacidad }}</td>
                        <td>{{ $saliente->fecha_radicado }}</td>
                        <td><span class="badge bg-info text-dark">En revisión</span></td>
                        <td>
                            <div class="btn-container">
                                <!-- Botón Eliminar -->
                                <form action="{{ route('incapacidades.destroy', $saliente->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta incapacidad?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                                <!-- Botón Editar -->
                                <form action="{{ route('incapacidades.edit', $saliente->id) }}" method="GET">
                                    @csrf
                                    <button class="btn btn-warning btn-sm" type="submit">Editar</button>
                                </form>
                                <!-- Botón Ver Incapacidad -->
                                <form action="{{ route('incapacidades.view', $saliente->id) }}" method="GET">
                                    @csrf
                                    <button class="btn btn-info btn-sm" type="submit">Ver</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <!-- Botón agregar -->
    <div class="text-center mt-4">
        <h6>Agregar una nueva incapacidad</h6>
        <button onclick="window.location.href='{{ route('incapacidades.create') }}'" class="btn btn-dark">Agregar</button>
    </div>
</div>
@endsection
