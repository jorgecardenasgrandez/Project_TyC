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
                                    <input id="tag" type="text" class="form-control" placeholder="Escriba el nombre y/o apellido">
                            
                                    <script type="text/javascript">
                                        $(function () {
                                            var  items = ["elemento 1","elemento 2"];

                                            $("#tag").autocomplete({
                                                source: items,
                                                minLength: 0
                                            });
                                        });
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form>
 
                    <div class="form-group">
                        <label class="titulo-label">Nombres</label>
                        <input type="text" class="form-control" name="nombres" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellido-paterno"  required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellido-materno"  required>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="titulo-label">Sexo</label>                            
                        <select  class="form-control" name="sexo">
                            <option value="vacio" selected></option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="titulo-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fecha-nacimiento" required>
                    </div>

                    <div class="botones">
                        <button type="submit" class="btn boton-registrar btn-success col-xs-4">Modificar</button>
                        <button type="reset" class="btn boton-limpiar btn-warning col-xs-4">Limpiar</button>
                    </div>


                </form>
            </div>

@endsection
