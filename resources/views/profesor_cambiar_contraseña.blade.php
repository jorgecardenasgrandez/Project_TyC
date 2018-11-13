@extends('layouts.plantilla_profesor')


@section("contenido_principal")

    <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2> <span> Cambiar Contraseña </span></h2>
                </div>

                <form>
                    <fieldset>
                        <div>
                            <div class="form-group">
                                <label class="titulo-label"> Contraseña Actual </label>
                                <input type="password" class="form-control" name="nombres" required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="titulo-label">Contraseña Nueva</label>
                                <input type="password" class="form-control" name="apellido-paterno" required>
                            </div>
                            <div class="form-group">
                                <label class="titulo-label">Repetir Contraseña Nueva</label>
                                <input type="password" class="form-control" name="apellido-materno" required>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <br>
                    <br>
                    <div class="botones">
                        <button type="submit" class="btn boton-registrar btn-success col-xs-4">Modificar Contraseña</button>
                    </div>
                    <br>
                    
                </form>
    </div>

@endsection