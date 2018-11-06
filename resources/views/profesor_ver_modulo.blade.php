@extends('layouts.plantilla_profesor')


@section("contenido_principal")

    <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Ver <span>Modulos</span></h2>
                </div>

                <table class="table">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col" width="15%">Nro. Grupo</th>
                            <th scope="col" width="20%">Modulo</th>
                            <th scope="col" width="15%">Turno</th>
                            <th scope="col" width="15%">Frecuencia</th>
                            <th scope="col" width="20%">Inicio</th>
                            <th scope="col" width="25%">Fin</th>
                            <th scope="col" width="10%">Alumnos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gruposprofesor as $gru)
                        
                            <tr>
                                <th scope="row">{{$gru['nro']}}</th>
                                <td>{{$gru['modulo']}}</td>
                                <td>{{$gru['turno']}}</td>
                                <td>{{$gru['frecuencia']}}</td>
                                <td>{{$gru['inicio']}}</td>
                                <td>{{$gru['fin']}}</td>
                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#miModal">Ver</button></td>
                            </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                
                <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header justify-content-center">
                                
                                    <div class="form-group col-md-9 float-left">
                                        <h4 class="modal-title" id="myModalLabel">Modulo1</h4>
                                    </div>
                                    <div class="form-group col-md-3 float-right">
                                        <label class="titulo-label" style="margin: 0 -70px">Horario </label>
                                        <h6 style="margin: 0 -70px">Lunes 8:00am - 12:00m </h6>
                                    </div>
                                
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                     <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" width="10%">Orden</th>
                                            <th scope="col" width="20%">Nombre</th>
                                            <th scope="col" width="30%">Apellido</th>
                                            <th scope="col" width="10%">Edad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Anderson</td>
                                            <td>Estela Coronel</td>
                                            <td> 23 </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Anderson</td>
                                            <td>Estela Coronel</td>
                                            <td> 24 </td>
                                    </tbody>
                                </table>
                                <br>
                                <div class="botones">
                                    <button type="button" class="btn boton-registrar btn-success col-xs-4">Generar PDF</button>
                                    <button type="button" class="btn boton-registrar btn-danger col-xs-4 " class="close" data-dismiss="modal" aria-label="Close">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
    </div>

@endsection