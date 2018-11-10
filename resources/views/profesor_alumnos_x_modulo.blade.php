@extends('layouts.plantilla_profesor')


@section("contenido_principal")

    <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Alumnos del<span> Grupo {{$grupo->id}}</span></h2>
                </div>

                <table class="table">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col" width="20%">Nro. Orden</th>
                            <th scope="col" width="20%">Ape. Paterno</th>
                            <th scope="col" width="20%">Ape. Materno</th>
                            <th scope="col" width="20%">Nombres</th>
                            <th scope="col" width="20%">F. Nacimiento</th>
                            <th scope="col" width="20%">Notas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alumnosdetalles as $alu)
                        
                            <tr>
                                <th>{{$alu['nro']}}</th>
                                <td>{{$alu['apellido-paterno']}}</td>
                                <td>{{$alu['apellido-materno']}}</td>
                                <td>{{$alu['nombres']}}</td>
                                <td>{{$alu['fnacimiento']}}</td>
                                <td><a class="btn btn-warning" href="">Agregar</a></td>
                            </tr>
                        
                        @endforeach
                        
                    </tbody>
                </table>
    </div>

@endsection