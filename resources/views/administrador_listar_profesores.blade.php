@extends('layouts.plantilla_admin')


@section("contenido_principal")

    <div class="contenido-main">
                
                <div class="titulo-formulario">
                    <h2>Reporte de <span> Profesores </span></h2>
                </div>

                <form>
                    <div class="modal-body">
                                <table class="table">
                                     <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" width="5%">  DNI      </th>
                                            <th scope="col" width="20%"> Ape. Paterno  </th>
                                            <th scope="col" width="20%"> Ape. Materno  </th>
                                            <th scope="col" width="10%"> Nombre     </th>
                                            <th scope="col" width="5%">  Sexo       </th>
                                            <th scope="col" width="20%"> Nacimiento </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($profesores as $prof)
                                            <tr>
                                            <td> {{$prof->dni}}              </td>
                                            <td> {{$prof->apePaterno_prof}} </td>
                                            <td> {{$prof->apeMaterno_prof}}       </td>
                                            <td>{{$prof->nom_prof}}</td>
                                            <td> {{$prof->sexo_prof}}              </td>
                                            <td> {{$prof->fechaNac_prof}}     </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                </form>
                    
    </div>

@endsection