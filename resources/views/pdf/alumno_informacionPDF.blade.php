<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Documento PDF</title>
    <style type="text/css">

        main{
            width: 595px;
            height: 842px;
            border: 3px solid black;
            margin: auto;
            padding: 5px 0;
        }

        .borde
        {
            border: 1px solid black;
            border-radius: 8px;
        }

        .Entrada
        {
            font-size: 20px;
            font-weight: bold;
        }

        .titulo-principal{
            width: 100%;
            margin: 20px 0px 0px 0px;
        }

        .titulo-principal h4{
            font-size: 20px;
            width: 85%;
            margin: 0px auto;
        }

        .titulo-año{
            width: 100%;
        }

        .titulo-año h4{
            font-size: 16px;
            width: 55%;
            margin: 0px auto;
        }

        .titulo-formulario{
            width: 40%;
            margin: 0px auto;
        }

        .titulo-formulario h2{
            font-size: 25px;
        }

    </style>

</head>

<body>

        <main>

            <div class="titulo-principal">
                <h4>CENTRO DE PRODUCCIÓN TÉCNICA JOSÉ GALVEZ</h4>
            </div>

            <div class="titulo-año">
                <center><h4>“Año del Diálogo y la Reconciliación Nacional”</h4></center>
            </div>

            <br><br>

            <div class="titulo-formulario">
                <h2>Información <span>Personal</span></h2>
            </div>

            <div class="contenido-main">


                <fieldset class="borde">
                    <legend class="Entrada">Datos personales</legend>
                    <div>
                        <div><label>Nombres &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label> {{ucwords($alumno->nombres)}} </label></div>
                        <div><label>Apellido Paterno &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label> {{ucwords($alumno->apePaterno)}}</label></div>
                        <div><label>Apellido Materno &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label> {{ucwords($alumno->apeMaterno)}}</label></div>
                        <div><label>Fecha de nacimiento&nbsp;&nbsp;&nbsp;:</label><label> {{$alumno->fnacimiento}}  </label></div>
                        <div><label>Sexo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label><label> {{ucwords($alumno->sexo)}}  </label></div>
                    </div>
                </fieldset>
                
                <br><br>

                <fieldset class="borde">
                    <legend class="Entrada"> Datos Adicionales y de contacto</legend>
                    <div>
                    <div><label>Estado Civil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<label><label> {{ucwords($alumno->ecivil)}}    </label></div>
                    <div><label>Grado de Instrucción &nbsp;&nbsp;:                               </label><label> {{ucwords($alumno->gradoInstruccion)}}     </label></div>
                    <div><label>Ocupación &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label> {{ucwords($alumno->ocupacion)}} </label></div>           
                    <div><label>Celular &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label> {{$alumno->telefono}}    </label></div>
                    <div><label>Correo electrónico &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label> {{$alumno->correo}}     </label></div>
                </div>
                </fieldset>

                <br><br>

                <fieldset class="borde">
                    <legend class="Entrada">Dirección</legend>
                    <div><label>Domicilio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label> {{ucwords($alumno->domicilio)}}    </label></div>
                    <div><label>Distrito &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  </label><label> {{ucwords($distrito->nombre)}}    </label></div>
                    <div><label>Provincia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label><label> {{ucwords($provincia->nombre)}}  </label></div>
                    <div><label>Departamento &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><label> {{ucwords($departamento->nombre)}} </label></div>
                    </div>
                </fieldset>
            </div>
        </main>
        <!-- page-content" -->

</body>

</html>

