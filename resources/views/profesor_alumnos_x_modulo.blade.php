@extends('layouts.plantilla_profesor')


@section("contenido_principal")

    <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Alumnos del<span> Grupo {{$grupo->id}}</span></h2>
                </div>

                <table class="table">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col" width="20%">Nro. DNI</th>
                            <th scope="col" width="20%">Ape. Paterno</th>
                            <th scope="col" width="20%">Ape. Materno</th>
                            <th scope="col" width="20%">Nombres</th>
                            <th scope="col" width="20%">F. Nacimiento</th>
                            <th scope="col" width="20%">Nota Final</th>
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
                                <td>{{$alu['nota3']}}</td>
                                @if($alu['nota3']=="-")
                                    <td><button class="btn btn-warning" data-toggle="modal" data-target="#miModal" onClick="setNomina('{{$alu['nro']}}','{{$alu['nombres']}}','{{$alu['apellido-paterno']}}','{{$alu['apellido-materno']}}','{{$alu['nro_matricula']}}');" >Agregar</button></td>
                                @else
                                    <td><button class="btn btn-warning" data-toggle="modal" data-target="#miModal" onClick="setNomina('{{$alu['nro']}}','{{$alu['nombres']}}','{{$alu['apellido-paterno']}}','{{$alu['apellido-materno']}}','{{$alu['nro_matricula']}}');" disabled>Agregar</button></td>
                                @endif
                                
                            </tr>
                        
                        @endforeach
                        
                    </tbody>
                </table>
                
                
                <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header  bg-primary" >
                                <h5 class="modal-title" id="myModalLabel" name="myModalLabel"> </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>                                  
                            </div>
                            <div class="modal-body">
                                        <form>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                                        <div class="form-row">
                                           <div class="form-group col-md-1">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="titulo-label">Alumno:</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label id="nombre-completo"></label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-1">

                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="titulo-label">DNI:</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label id="dni"></label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-1">

                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="titulo-label">Nota 1:</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="number_format" class="form-control" id="nota1" name="nota1">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-1">

                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="titulo-label">Nota 2:</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="number_format" class="form-control" id="nota2" name="nota2">
                                            </div>
                                        </div>
                                        <!--
                                        <div class="form-row">
                                            <div class="form-group col-md-1">

                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="titulo-label">Nota 3:</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="number_format" class="form-control" id="nota3">
                                            </div>
                                        </div>
                                        -->
                                        <div class="form-row">
                                            <div class="form-group col-md-1">

                                            </div>
                                            <div class="form-group col-md-10">
                                                <label class="titulo-label">Observaciones:</label>
                                                <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
                                            </div>
                                        </div>
                                        <div class="botones">
                                                <button type="button" class="btn boton-registrar btn-success col-xs-4" id="btnregistrar">Registrar</button>
                                                <button type="button" class="btn boton-registrar btn-danger col-xs-4 " class="close" id="btncerrar" data-dismiss="modal" aria-label="Close">Cerrar</button>
                                        </form>
                                        
                                </div>                                                              
                            </div>                  
                        </div>
                    </div>
                </div>
                    
    </div>

@endsection