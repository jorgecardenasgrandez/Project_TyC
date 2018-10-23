@extends('layouts.plantilla_admin')


@section("contenido_principal")

    <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Reporte de <span>Alumnos matriculados</span></h2>
                </div>

                <form>
                    <div class="form-row"> 
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Familia Profesional</label>                            
                            <select  class="form-control" name="familia">
                                <option value="vacio" selected> </option>
                                <option value="fam1">Familia Profesional 1</option>
                                <option value="fam2">Familia Profesional 2</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Opción Ocupacional</label>                            
                            <select  class="form-control" name="opcion">
                                <option value="vacio" selected> </option>
                                <option value="opcion1">Opción Ocupacional 1</option>
                                <option value="opcion2">Opción Ocupacional 2</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Módulo</label>                            
                            <select  class="form-control" name="modulo">
                                <option value="vacio" selected> </option>
                                <option value="modulo1">Módulo 1</option>
                                <option value="modulo2">Módulo 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn boton-registrar btn-primary w-100">Ver reporte</button>
                        </div>
                    </div>

                    <br>
                    <!--<table class="table">
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">ID. Módulo</th>
                                <th scope="col">Módulo</th>
                                <th scope="col">Opción Ocupacional</th>
                                <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                        </tbody>
                    </table> -->

                    <div class="botones">
                        <button type="submit" class="btn boton-registrar btn-primary col-xs-4">Exportar PDF</button>
                        <button type="reset" class="btn boton-limpiar btn-warning col-xs-4">Limpiar</button>
                    </div> 

                </form>
    </div>

@endsection