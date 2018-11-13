@extends('layouts/plantilla_profesor')

@section("contenido_principal")

    <div class="contenido-main">
    
        <div class="titulo-formulario">
                        <h2>Información <span>Personal</span></h2>
        </div>

        <form>
 
                    <div class="form-group">
                        <label class="titulo-label">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" value="{{$user->nom_prof}}" readonly="">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellido-paterno" name="apellido-paterno" value="{{$user->apePaterno_prof}}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellido-materno" name="apellido-materno"  value="{{$user->apeMaterno_prof}}" readonly>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="titulo-label">Sexo</label>                            
                        <input type="text" class="form-control" id="sexo" name="sexo" value="{{$user->sexo_prof}}" readonly>
                    </div>

                    <div class="form-group">
                        <label class="titulo-label">Fecha de nacimiento</label>
                        <input type="text" class="form-control" id="fecha-nacimiento" name="fecha-nacimiento" value="{{$user->fechaNac_prof}}" readonly>
                    </div>

                    <div class="botones">
                        <button type="submit" class="btn boton-limpiar btn-success col-xs-4">Regresar</button>
                    </div>

                </form>
                
    </div>


@endsection