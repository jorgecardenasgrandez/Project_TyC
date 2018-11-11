@extends('layouts.plantilla_alumno')

@section("contenido_principal")

            <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Reportes de <span>Matrícula</span></h2>
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
                            <th scope="row">{{ $modulo->nombreMod }}</th>
                            <td>{{ $profesor->nom_prof }}</td>
                            <td>{{ $turno->descripcion }}</td>
                            <td>{{ $frecuencia->detalle }}</td>
                            <td>{{ $grupo->fecInicio }}</td>
                            <td>{{ $grupo->fecFin }}</td>
                            
                        </tr>
                   
                    </tbody>
                </table>
                
                <div class="botones">
                    <button type="button" class="btn boton-registrar btn-success col-xs-4">Generar PDF</button>
                    <button type="button" class="btn boton-registrar btn-danger col-xs-4 " class="close" data-dismiss="modal" aria-label="Close">Cerrar</button>
                </div> 
                
                <a href="{{ route('reporte.matricula',['dni'=>$alumno_composer->dni])}}" class="show-model btn bnt-info btn-sm" data-id="">Regresar</a>
            </div>
@endsection