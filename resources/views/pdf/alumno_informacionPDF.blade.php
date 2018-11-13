<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> PDF Alumno </title>

	<style>
		body
		{
			background: gray;
		}


		.Hoja
		{
			width: 595px;
			height: 842px;
			border: 3px solid black;
			margin: auto;
			background: white;
		}

		header
		{
			width: 595px;
			height: 100px;
		}

		#Logo
		{
			width: 120px;
			height: 80px;
			position: relative;
			margin: -120px 470px;
			background: url(../img/cetpro.png);
			background-size: contain;
			background-repeat: no-repeat;
			filter: grayscale(100%);
		}

		#Encabezado1
		{
			width: 475px;
			height: 80px; 
			position: relative;
			margin: 30px auto;
			font-family: sans-serif;
			font-size: 30px;
			font-weight: bolder;
		}

		img
		{
			width: 200px;
			height: 120px;
			filter: grayscale(100%);
		}

		#Encabezado
		{
			text-align: center;
			line-height: auto;
		}

		.borde
		{
			border: 2px solid black;
			border-radius: 15px;
		}

		.Entrada
		{
			font-size: 20px;
			font-weight: bold;
		}

	</style>

</head>
<body>
	<div class ="Hoja">
	    <header>
	    	<div id="Encabezado1">CENTRO DE PRODUCCIÓN TÉCNICA JOSÉ GALVEZ</div>
	    	<div id="Logo"></div>
	    </header>

	    <div>
	        <div id="Encabezado">
	            <h2>Información Personal</h2>
	        </div>

	        <form>
	            <fieldset class="borde">
	                <legend class="Entrada">Datos personales</legend>
	                <div>
	                    <div><label>Nombres &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:                </label><label> {{ucwords($alumno->nombres)}} </label></div>
	                    <div><label>Apellido Paterno &emsp;&emsp;:                               </label><label> {{ucwords($alumno->apePaterno)}}</label></div>
	                    <div><label>Apellido Materno &emsp;&nbsp;&nbsp;&nbsp;:                   </label><label> {{ucwords($alumno->apeMaterno)}}</label></div>
	                    <div><label>Fecha de nacimiento&nbsp;&nbsp;&nbsp;:                       </label><label> {{$alumno->fnacimiento}}  </label></div>
	                    <div><label>Sexo &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: </label><label> {{$alumno->sexo}}   </label></div>
	                </div>
	            </fieldset>
	            <br>
	            <br>


	            <fieldset class="borde">
	                <legend class="Entrada"> Datos Adicionales y de contacto</legend>
	                <div>
	                <div><label>Estado Civil &emsp;&emsp;&emsp;&emsp;:                           </label><label> {{ucwords($alumno->ecivil)}}   </label></div>
	                <div><label>Grado de Instrucción &nbsp;&nbsp;:                               </label><label> {{ucwords($alumno->gradoInstruccion)}}     </label></div>
	                <div><label>Ocupación &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;:                  </label><label> {{ucwords($alumno->ocupacion)}} </label></div>           
	                <div><label>Celular &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:                    </label><label> {{$alumno->telefono}}   </label></div>
	                <div><label>Correo electrónico &emsp;&nbsp;&nbsp;:                           </label><label> {{$alumno->correo}}    </label></div>
	            </div>
	            </fieldset>
	            <br>
	            <br>
	            
	            <fieldset class="borde">
	                <legend class="Entrada">Dirección</legend>
	                <div><label>Domicilio &emsp;&emsp;&emsp;&emsp;:                              </label><label> {{ucwords($alumno->domicilio)}}    </label></div>
	                <div><label>Distrito &emsp;&emsp;&emsp;&emsp;&emsp;:                         </label><label> {{ucwords($distrito->nombre)}}     </label></div>
	                <div><label>Provincia &emsp;&emsp;&emsp;&emsp;&nbsp;:                        </label><label> {{ucwords($provincia->nombre)}}    </label></div>
	                <div><label>Departamento &emsp;&emsp;&nbsp;&nbsp;:                           </label><label> {{ucwords($departamento->nombre)}} </label></div>
	                </div>
	            </fieldset>
	        </form>
	    </div>
	</div>

</body>
</html>