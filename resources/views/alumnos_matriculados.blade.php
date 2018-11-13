@extends('layouts.plantilla_admin')

@section("contenido_principal")

<div class="contenido-main">
    <div class="titulo-formulario">
            <h2>Reporte de <span>Alumnos matriculados</span></h2>
    </div>
        <form action="#" method='GET'>
            <table class="table">
                <thead class="bg-primary">
                    <tr>
                        <th scope="col" width="10%">#Matrícula</th>
                        <th scope="col" width="15%">DNI</th>
                        <th scope="col" width="15%">Alumno</th>
                        <th scope="col" width="15%">Fecha</th>
                        <th scope="col" width="15%">Monto</th>
                        <th scope="col" width="15%">Modulo</th>
                        <th scope="col" width="10%">Docente</th>
                        <th scope="col" width="10%">Turno</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i=0;$i<count($matriculas);$i++)
                    <tr>
                        <th scope="row"><?php echo $matriculas[$i]->id ?></th>
                        <th scope="row"><?php echo $new_alumno[$i]->dni ?></th>
                        <td><?php echo ucwords($new_alumno[$i]->nombres) ?></td>
                        <td><?php echo $matriculas[$i]->fecMat ?></td>
                        <th scope="row"><?php echo $matriculas[$i]->montoLabo ?></th>
                        <th scope="row"><?php echo ucwords($new_modulo[$i]->nombreMod) ?></th>
                        <td><?php echo ucwords($new_profesor[$i]->nom_prof) ?></td>
                        <th scope="row"><?php echo ucwords($new_turno[$i]->descripcion) ?></th>
                           
                    </tr>
                @endfor

                </tbody>
            </table>
            <br>      
            
        </form>              
</div>
@endsection 
