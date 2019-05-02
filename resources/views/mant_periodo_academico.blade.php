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
                            <a class="btn btn-success" href="{{route('periodo.create')}}">+ Añadir</a>
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
                            @foreach($periodos as $per)
                            <tr>
                                <td> {{$per->id}}          </td>
                                <td> {{$per->nombre}} </td>
                                <td> {{$per->fechaInicio}}       </td>
                                <td> {{$per->fechaFin}}</td>
                                @if($per->estado == 1)
                                    <td> Activo              </td>
                                @else
                                    <td> No activo              </td>
                                @endif
                                <td>
                                    <a class="btn btn-warning" href="{{action('PeriodoController@edit', $per->id)}}"><i class="fa fa-wrench"></i></a>
                                    <a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>              
    </div>

@endsection