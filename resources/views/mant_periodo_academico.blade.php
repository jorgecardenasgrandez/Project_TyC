@extends('layouts.plantilla_admin')


@section("contenido_principal")

    <div class="contenido-main">
                
                <div class="titulo-formulario">
                    <h2><span> Periodos Academicos </span></h2>
                </div>
                
                
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <button type="button" class="btn btn-info"> + </button>
                        </div>
                </div>
                                <table class="table">
                                     <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" width="20%">  Codigo      </th>
                                            <th scope="col" width="20%"> Nombre  </th>
                                            <th scope="col" width="20%"> Fecha Inicio  </th>
                                            <th scope="col" width="20%"> Fecha Fin     </th>
                                            <th scope="col" width="20%">  Estado       </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                            <td> 1          </td>
                                            <td> Semestre 2018-1 </td>
                                            <td> 3/03/2018       </td>
                                            <td> 3/09/2018</td>
                                            <td> Activo              </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                </form>
                    
    </div>

@endsection