@extends('layouts.app')

@section('title', 'Registrar Incapacidad')

@section('head')
    <link rel="icon" type="image/x-icon" href="{{ asset('images/ux.png') }}">

    <style>

    </style>
@endsection

@section('content')

    <div class="form-container">
        <h1>Registrar Incapacidad</h1>
        <form action="{{ route('incapacidades.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Primera columna -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nombre_completo" class="form-label">Nombres completos</label>
                        <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" value="{{ old('nombre_completo') }}">
                        @error('nombre_completo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tipo_empleado" class="form-label">Tipo de empleado</label>
                        <input type="text" id="tipo_empleado" name="tipo_empleado" class="form-control" value="{{ old('tipo_empleado') }}">
                        @error('tipo_empleado')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="dias_incapacidad" class="form-label">Días de incapacidad</label>
                        <input type="number" id="dias_incapacidad" name="dias_incapacidad" class="form-control" value="{{ old('dias_incapacidad') }}">
                        @error('dias_incapacidad')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cédula</label>
                        <input type="text" id="cedula" name="cedula" class="form-control" value="{{ old('cedula') }}">
                        @error('cedula')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Segunda columna -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="codigo_incapacidad" class="form-label">Código de incapacidad</label>
                        <input type="number" id="codigo_incapacidad" name="codigo_incapacidad" class="form-control" min="100" max="9000" value="{{ old('codigo_incapacidad') }}">
                        @error('codigo_incapacidad')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" id="correo" name="correo" class="form-control" value="{{ old('correo') }}">
                        @error('correo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fecha_radicado" class="form-label">Fecha de radicación</label>
                        <input type="date" id="fecha_radicado" name="fecha_radicado" class="form-control" value="{{ old('fecha_radicado') }}">
                        @error('fecha_radicado')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="incapacidad_pdf" class="form-label">Incapacidad en PDF</label>
                        <input type="file" id="incapacidad_pdf" name="incapacidad_pdf" class="form-control">
                        <small class="note">Recuerde que su incapacidad debe estar escaneada en PDF.</small>
                        @error('incapacidad_pdf')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn-back" onclick="history.back()">Volver atrás</button>
                <button type="submit" class="btn btn-submit">Enviar</button>
            </div>
        </form>
    </div>

@endsection
