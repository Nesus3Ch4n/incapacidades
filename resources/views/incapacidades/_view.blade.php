@extends('layouts.app')

@section('title', 'Ver Incapacidad')

@section('content')
    <div class="form-container">
        <h1>VER INCAPACIDAD</h1>
        <form action="{{ route('incapacidades.index') }}" method="GET">
            @csrf

            <div class="row">
                <!-- Primera columna -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nombre_completo" class="form-label">Nombres completos</label>
                        <input type="text" id="nombre_completo" name="nombre_completo" class="form-control"
                            value="{{ $saliente->nombre_completo }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_empleado" class="form-label">Tipo de empleado</label>
                        <input type="text" id="tipo_empleado" name="tipo_empleado" class="form-control"
                            value="{{ $saliente->tipo_empleado }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="dias_incapacidad" class="form-label">Días de incapacidad</label>
                        <input type="number" id="dias_incapacidad" name="dias_incapacidad" class="form-control"
                            value="{{ $saliente->dias_incapacidad }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cédula</label>
                        <input type="text" id="cedula" name="cedula" class="form-control"
                            value="{{ $saliente->cedula }}" readonly>
                    </div>
                </div>

                <!-- Segunda columna -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="codigo_incapacidad" class="form-label">Código de incapacidad</label>
                        <input type="number" id="codigo_incapacidad" name="codigo_incapacidad" class="form-control"
                            value="{{ $saliente->codigo_incapacidad }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" id="correo" name="correo" class="form-control"
                            value="{{ $saliente->correo }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_radicado" class="form-label">Fecha de radicación</label>
                        <input type="date" id="fecha_radicado" name="fecha_radicado" class="form-control"
                            value="{{ $saliente->fecha_radicado }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="incapacidad_pdf" class="form-label">Incapacidad en PDF</label>

                        @if ($saliente->incapacidad_pdf)
                            <!-- Mostrar PDF dentro de un iframe -->
                            <iframe src="{{ asset('storage/' . $saliente->incapacidad_pdf) }}" width="100%"
                                height="400px"></iframe>

                            <!-- Opción para descargar o abrir en una nueva pestaña -->
                            <div class="mt-2 text-center">
                                <a href="{{ asset('storage/'.$saliente->incapacidad_pdf) }}" target="_blank" class="btn btn-info small">Ver PDF completo</a>
                            </div>

                        @else
                            <p class="text-danger">No hay archivo PDF disponible.</p>
                        @endif
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-dark" onclick="history.back()">Volver atrás</button>
        </form>
    </div>
@endsection
