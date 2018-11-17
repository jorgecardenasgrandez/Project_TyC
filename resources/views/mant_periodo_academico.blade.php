@extends('layouts.plantilla_admin')


@section("contenido_principal")

    <div class="contenido-main">
                
                <div class="titulo-formulario">
                    <h2><span> Periodos Academicos </span></h2>
                </div>
                
                
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <label class="titulo-label">Ordenar por:</label>
                        </div>
                        <div class="col-sm-3">
                            <select name="orden" id="orden" class="form-control">
                                <option value="">Seleccionar</option>
                                <option value="">Codigo</option>
                                <option value="">Nombre</option>
                            </select>
                        </div>
                        <div class="col-sm">
                        </div>
                        <div class="col-sm">
                        </div>
                        <div class="col-sm">
                        </div>
                        <div class="col-sm">
                        </div>
                        <div class="col-sm">
                            <button type="button" class="btn btn-success">+ Añadir</button>
                        </div>
                    </div>
                    <br></br>
                    <table class="table table-hover">
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col" width="10%">  Codigo      </th>
                                <th scope="col" width="20%"> Nombre  </th>
                                <th scope="col" width="15%"> Fecha Inicio  </th>
                                <th scope="col" width="15%"> Fecha Fin     </th>
                                <th scope="col" width="15%">  Estado </th>
                                <th scope="col" width="20%">  Operacion </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1          </td>
                                <td> Semestre 2018-1 </td>
                                <td> 3/03/2018       </td>
                                <td> 3/09/2018</td>
                                <td> Activo              </td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="fa fa-wrench"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>              
    </div>

@endsection