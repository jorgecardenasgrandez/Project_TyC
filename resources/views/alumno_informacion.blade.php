@extends('layouts.plantilla_alumno')

@section("contenido_principal")

        <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Información <span>Personal</span></h2>
                </div>

                <form action=" {{ route('perfil.pdf',['dni'=>$alumno_composer->dni])}}" method='GET'>
                
                    <fieldset>
                        <legend>Datos personales</legend>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Nombres </label>
                                <input type="text" class="form-control" name="nombres" value="{{ucwords($alumno->nombres)}}" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Apellido Paterno</label>
                                <input type="text" class="form-control" name="apellido-paterno" value="{{ucwords($alumno->apePaterno)}}"readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Apellido Materno</label>
                                <input type="text" class="form-control" name="apellido-materno" value="{{ucwords($alumno->apeMaterno)}}"readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="titulo-label">Fecha de nacimiento</label>
                                <input type="text" class="form-control" name="fecha-nacimiento" value="{{$alumno->fnacimiento}}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="titulo-label">Sexo</label>                            
                                <input type="text" class="form-control" name="sexo" value="{{$alumno->sexo}}" readonly>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <br>


                    <fieldset>
                        <legend>Datos Adicionales y de contacto</legend>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Estado Civil</label>                            
                            <input type="text" class="form-control" name="estado-civil" value="{{ucwords($alumno->ecivil)}}" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Grado de Instrucción</label>                            
                            <input type="text" class="form-control" name="grado-instruccion" value="{{ucwords($alumno->gradoInstruccion)}}" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Ocupación</label>                            
                            <input type="text" class="form-control" name="ocupacion" value="{{ucwords($alumno->ocupacion)}}" readonly>
                        </div>
                    </div>

                    <div class="form-row">           
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Número de celular</label>
                            <input type="number" class="form-control" name="numero" value="{{$alumno->telefono}}" readonly>                       
                        </div>
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Correo electrónico</label>                            
                            <input type="email" class="form-control" name="email" value="{{$alumno->correo}}" readonly>
                        </div>
                    </div>
                    </fieldset>
                    <br>
                    <br>
                    
                    <fieldset >
                        <legend>Dirección</legend>
                        <div class="form-group">
                            <label class="titulo-label">Domicilio</label>
                            <input type="text" class="form-control" name="domicilio" value="{{ucwords($alumno->domicilio)}}" readonly>                       
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Distrito</label>                            
                                <input type="text" class="form-control" name="distrito" value="{{ucwords($distrito->nombre)}}" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Provincia</label>                            
                                <input type="text" class="form-control" name="provincia" value="{{ucwords($provincia->nombre)}}" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Departamento</label>                            
                                <input type="text" class="form-control" name="departamento" value="{{ucwords($departamento->nombre)}}" readonly>
                            </div>
                        </div>
                    </fieldset>

                    <br>
                    <div class="botones">
                        <button type="submit" class="btn boton-registrar btn-success col-xs-4">Exportar a PDF</button>
                    </div>
                    <br>

                </form>          
        </div>
@endsection


   