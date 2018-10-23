@extends("layouts.plantilla_admin")

@section("contenido_principal")
<div class="contenido-main">
        <div class="titulo-formulario">
            <h2>Registrar <span>Familia Profesional</span></h2>
        </div>

        <form action="/registrarFamiliaProfesional" method="POST">
            @csrf
            <div class="form-group">
                <label class="titulo-label">Nombre de la Familia Profesional</label>
                <input type="text" class="form-control" name="nombre"  required autofocus>
            </div>
                        
            <div class="botones">
                <button type="submit" class="btn boton-registrar btn-success col-xs-4">Registrar</button>
                
            </div>

        </form>
</div>
@endsection