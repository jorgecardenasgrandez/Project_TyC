@extends("layouts.plantilla_admin")

@section("contenido_principal")
    <div class="contenido-main">
        <div class="titulo-formulario">
            <h2>Registrar <span>Opción Ocupacional</span></h2>
        </div>

        <form action="/RegistroOpcionOcupacional" method="POST">
        @csrf
            <div class="form-group">
                <label class="titulo-label">Nombre de la Opción Ocupacional</label>
                <input type="text" class="form-control" name="nombre"  required autofocus>
            </div>

            <div class="form-group">
                <label class="titulo-label">Familia profesional</label>
                <select  class="form-control" name="familia">
                    <option value="-1" selected>Seleccionar Familia Profesional</option>
                    @foreach($FamiliasProf as $Famprof)
                    <option value="{{$Famprof->id}}">{{$Famprof->nombreFP}}</option>
                    @endforeach
                </select>
            </div>
                        
            <div class="botones">
                <button type="submit" class="btn boton-registrar btn-success col-xs-4">Registrar</button>
            </div>

        </form>
    </div>
@endsection