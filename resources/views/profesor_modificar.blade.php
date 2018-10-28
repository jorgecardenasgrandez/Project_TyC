@extends('layouts.plantilla_admin')


@section("contenido_principal")

    <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Modificar <span>Profesor</span></h2>
                </div>

                <div class="container" style="margin: 0 auto 20px auto">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div id="imaginary_container"> 
                                <div class="input-group stylish-input-group">
                                    <select class="form-control" name="tag" id="tag">
                                       <option value="">Seleccionar</option>
                                        @foreach($profesores as $pro)
                                            <option value="{{$pro->id}}">{{$pro->nom_prof . " " . $pro->apePaterno_prof. " " .$pro->apeMaterno_prof}}</option>
                                        @endforeach
                                    </select>                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="formulario" action= "/modificarprofesor" role="form" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="titulo-label">Nombres</label>
                        <input type="text" class="form-control" name="nombres" id="nombres" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellido-paterno" id="apellido-paterno" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellido-materno" id="apellido-materno" required>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="titulo-label">Sexo</label>                            
                        <select  class="form-control" name="sexo" id="sexo">
                            <option value="Seleccionar" selected>Seleccionar</option>
                            <option value="m">Masculino</option>
                            <option value="f">Femenino</option>
                        </select>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha-nacimiento" id="fecha-nacimiento" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Estado</label>
                            <select class="form-control" name="estado" id="estado">
                                <option type="number_format" value= "1">Activo</option>
                                <option type="number_format" value= "0">Inhabilitado</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <input type="text"  class="form-control" id="idprof" name="idprof" hidden>
                    </div>
                    
                    <div class="botones">
                        <button type="submit" class="btn boton-registrar btn-success col-xs-4">Modificar</button>
                        <button type="reset" class="btn boton-limpiar btn-warning col-xs-4">Limpiar</button>
                    </div>


                </form>
            </div>

@endsection
