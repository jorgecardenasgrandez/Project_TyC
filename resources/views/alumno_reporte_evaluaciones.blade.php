@extends('layouts.plantilla_alumno')

@section('contenido_principal')

<div class="contenido-main">
    <div class="titulo-formulario">
        <h2>Reporte de <span>Evaluaciones</span></h2>
    </div>
    <form action="#" method='GET'>
        <table class="table">
            <thead class="bg-primary">
                <tr>
                    <th scope="col" width="45%">Módulo</th>
                    <th scope="col" width="10%">Docente</th>
                    <th scope="col" width="8%">Turno</th>
                    <th scope="col" width="25%">Frecuencia</th>
                    <th scope="col" width="25%">Notas</th>
                </tr>
            </thead>
            <tbody>
                @for($i=0;$i<count($matriculas);$i++)
                    <tr>
                        <th scope="row"><?php echo ucwords($new_modulo[$i]->nombreMod) ?></th>
                        <td><?php echo ucwords($new_profesor[$i]->nom_prof) ?></td>
                        <td><?php echo ucwords($new_turno[$i]->descripcion) ?></td>
                        <td><?php echo ucwords($new_frecuencia[$i]->detalle) ?></td>

                    <td><a href="{{ route('reporte.nomina',['id'=>$matriculas[$i]->id]) }}" class="show-modal btn btn-info btn-sm" >Ver nota</a>
                            
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <br>      
        
    </form>    
</div>

@endsection  