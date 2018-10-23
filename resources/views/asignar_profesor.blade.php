@extends('layouts.plantilla_admin')


@section("contenido_principal")

    <div class="contenido-main">
        <div class="titulo-formulario">
                    <h2>Realizar <span>Asignación de Docentes</span></h2>
                </div>

                <form>

                    <div class="form-group">
                        <label class="titulo-label">Profesor</label>
                        <input type="text" class="form-control" name="nombres" autofocus>
                    </div>

                    <div class="form-group">
                        <label class="titulo-label">Módulo</label>
                        <input type="text" class="form-control" name="modulo">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Turno</label>
                            <select  class="form-control" name="turno">
                                <option value="mañana" selected>Mañana</option>
                                <option value="tarde">Tarde</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="titulo-label">Frecuencia</label>
                            <select  class="form-control" name="frecuencia">
                                <option value="1" selected>Lunes, Miércoles y Viernes</option>
                                <option value="2">Martes y Jueves</option>
                                <option value="3">Lunes a Viernes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Fecha de inicio</label>
                            <input type="date" class="form-control" name="fecha-inicio" placeholder="DD/MM/AAAA" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Fecha de fin</label>
                            <input type="date" class="form-control" name="fecha-fin" placeholder="DD/MM/AAAA" required>
                        </div>
                    </div>

                    <div class="botones">
                        <button type="submit" class="btn boton-registrar btn-primary col-xs-4">Matricular</button>
                        <button type="reset" class="btn boton-limpiar btn-warning col-xs-4">Limpiar</button>
                    </div>

                </form>
    </div>

@endsection