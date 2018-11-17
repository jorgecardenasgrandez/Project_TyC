@extends('layouts.plantilla_alumno')

@section("contenido_principal")

            <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Detalle de la <span>Matrícula</span></h2>
                </div>

                <table class="table">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col" width="30%">Módulo</th>
                            <th scope="col" width="10%">Docente</th>
                            <th scope="col" width="8%">Turno</th>
                            <th scope="col" width="18%">Frecuencia</th>
                            <th scope="col" width="17%">Inicio</th>
                            <th scope="col" width="17%">Fin</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">{{ ucwords($modulo->nombreMod) }}</th>
                            <td>{{ ucwords($profesor->nom_prof) }}</td>
                            <td>{{ ucwords($turno->descripcion) }}</td>
                            <td>{{ ucwords($frecuencia->detalle) }}</td>
                            <td>{{ ucwords($grupo->fecInicio) }}</td>
                            <td>{{ ucwords($grupo->fecFin) }}</td>
                            
                        </tr>
                   
                    </tbody>
                </table>
                <br>
                <a href="{{ route('reporte.matricula')}}" class="show-modal btn btn-info btn-sm">Regresar</a>
                <br>
            </div>
@endsection