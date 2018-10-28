@extends('layouts.plantilla_alumno')

@section("contenido_principal")

            <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Reportes de <span>Matrícula</span></h2>
                </div>

                <table class="table">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col" width="15%">#Matrícula</th>
                            <th scope="col" width="15%">Numero de recibo</th>
                            <th scope="col" width="15%">DNI</th>
                            <th scope="col" width="15%">Fecha</th>
                            <th scope="col" width="15%">Monto</th>
                            <th scope="col" width="15%">Grupo</th>
                            <th scope="col" width="10%">Evento</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($matricula as $mtc)
                        <tr>
                            <th scope="row">{{ $mtc->id }}</th>
                            <td>{{ $mtc->numReciboPago }}</td>
                            <td>{{ $mtc->estudiante_dni }}</td>
                            <td>{{ $mtc->fecMat }}</td>
                            <td>{{ $mtc->montoLabo }}</td>
                            <td>{{ $mtc->grupo_id }}</td>
                            
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
                                        <h4 class="modal-title" id="myModalLabel">Matrícula N° 10000001</h4>
                                    </div>
                                    <div class="form-group col-md-3 float-right">
                                        <label class="titulo-label">Fecha: </label>
                                        <h6>10/10/2018</h6>
                                    </div>
                                
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                     <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" width="30%">Módulo</th>
                                            <th scope="col" width="30%">Docente</th>
                                            <th scope="col" width="8%">Turno</th>
                                            <th scope="col" width="18%">Frecuencia</th>
                                            <th scope="col" width="7%">Inicio</th>
                                            <th scope="col" width="7%">Fin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Panadería fina</td>
                                            <td>Anderson Estela Coronel</td>
                                            <td>Mañana</td>
                                            <td>Mar-Jue</td>
                                            <td>30/10/2018</td>
                                            <td>30/11/2018</td>
                                        </tr>
                                        <tr>
                                            <td>Diseño Gráfico I</td>
                                            <td>Anderson Estela Coronel</td>
                                            <td>Tarde</td>
                                            <td>Lun-Mie-Vie</td>
                                            <td>30/10/2018</td>
                                            <td>30/11/2018</td>
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