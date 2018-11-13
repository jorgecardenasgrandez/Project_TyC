<!DOCTYPE html>
<html lang="en">

<head>

    <style type="text/css">

        main{
            width: 595px;
            height: 842px;
            border: 3px solid black;
            margin: auto;
            padding: 5px 0;
        }

        .table1 {
            width: 40%;
            border: 1px solid #000;
            margin-left: auto;
            margin-right: auto;
            font-size: 12px;
        }

        .table2 {
            width: 98%;
            border: 1px solid #000;
            margin-left: auto;
            margin-right: auto;
            font-size: 12px;
        }

        th, td {
            text-align: left;
            vertical-align: top;
            border-spacing: 0;
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
            width: 39%;
            margin: 0px auto;
        }

        .titulo-formulario h2{
            font-size: 25px;
        }

        .imagen img{
            filter: grayscale(100%);
            width: 22%;
            margin: 10px 225px;
        }

    </style>

</head>

<body>

        <main>

            <div class="titulo-principal">
                <h4>CENTRO DE PRODUCCIÓN TÉCNICA JOSÉ GALVEZ</h4>
            </div>

            <div class="imagen">
                <img src="../img/cetpro.png">
            </div>

            <div class="titulo-año">
                <h2>“Año del Diálogo y la Reconciliación Nacional”</h2>
            </div>

            <br><br>

            <div class="titulo-formulario">
                <h2>Reporte de <span>Matrícula</span></h2>
            </div>

            <div class="contenido-main">


                <table class="table1">
                    <thead class="bg-primary">
                        <tr>
                            <th>#Matrícula</th>
                            <th>{{ $matricula->id }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Número de recibo</td>
                            <td>{{ $matricula->numReciboPago}}</td>
                        </tr>
                        <tr>
                            <td>DNI</td>
                            <td>{{ $matricula->estudiante_dni}}</td>
                        </tr>
                        <tr>
                            <td>Fecha</td>
                            <td>{{ $matricula->fecMat}}</td>
                        </tr>
                        <tr>
                            <td>Monto</td>
                            <td>{{ $matricula->montoLabo}}</td>
                        </tr>
                        <tr>
                            <td>Grupo</td>
                            <td>{{ $matricula->grupo_id}}</td>
                        </tr>
                    </tbody>
                </table>
                
                <br><br>

                <table class="table2">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col" width="25%">Módulo</th>
                            <th scope="col" width="25%">Docente</th>
                            <th scope="col" width="15%">Turno</th>
                            <th scope="col" width="15%">Frecuencia</th>
                            <th scope="col" width="10%">Inicio</th>
                            <th scope="col" width="10%">Fin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ ucwords($modulo->nombreMod) }}</td>
                            <td>{{ ucwords($profesor->nom_prof) }}</td>
                            <td>{{ ucwords($turno->descripcion) }}</td>
                            <td>{{ ucwords($frecuencia->detalle) }}</td>
                            <td>{{ ucwords($grupo->fecInicio) }}</td>
                            <td>{{ ucwords($grupo->fecFin) }}</td>
                        </tr>
                    </tbody>
                </table>  
            </div>
        </main>
        <!-- page-content" -->

</body>

</html>