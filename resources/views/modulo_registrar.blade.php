@extends('layouts.plantilla_admin')

@section("contenido_principal")
<div class="contenido-main">
    <div class="titulo-formulario">
        <h2>Registrar <span>Módulo</span></h2>
    </div>

    <form action="/registrarModulo" method="POST" >
    @csrf
        <div class="form-group">
            <label class="titulo-label">Nombre del Módulo</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre del módulo" required autofocus>
        </div>

        <div class="form-group">
            <label class="titulo-label">Opción ocupacional</label>                            
            <select  class="form-control" name="opcion_ocupacional">
                <option value="-1" selected>Seleccionar Opcion Ocupacional</option>
                @foreach($lsOpcionesOcup as $OpcOcup)
                <option value="{{$OpcOcup->id}}">{{$OpcOcup->nombreOO}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label class="titulo-label">Duración en horas</label>
                <input type="number" class="form-control" name="duracion" placeholder="Ej. 300" required>
            </div>
        </div>

        <div class="botones">
            <button type="submit" class="btn boton-registrar btn-success col-xs-4" name="registro_modulo">Registrar</button>
        </div>

    </form>
</div>
@endsection
