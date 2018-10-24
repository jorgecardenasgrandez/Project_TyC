<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Cetpro José Galvez</title>
    <link rel="stylesheet" type="text/css" href="css/estilos-propios.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
</head>

<body>

    <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
        
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>

        <nav id="sidebar" class="sidebar-wrapper" style="background-color: #163590">
            <div class="sidebar-content">

                <div class="sidebar-brand">
                    <a href="#"></a>
                    <div id="close-sidebar">
                        <i class="fas fa-times float-left"></i>
                    </div>
                </div>

                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jorgito
                            <strong>Cárdenaz</strong>
                        </span>
                        <span class="user-role">Alumno</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>En línea</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->


                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Panel General</span>
                        </li>
                        <li>
                            <a href="/visualizarAlumno">
                                <i class="fa fa-folder"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="visualizarAlumno">
                                <i class="fa fa-folder"></i>
                                <span>Mi información</span>
                            </a>
                        </li>

                        <li class="header-menu">
                            <span>Operaciones</span>
                        </li>
                        <li>
                            <a href="matricular.php">
                                <i class="fa fa-folder"></i>
                                <span>Cambiar contraseña</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Generar Reportes</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Reporte de Matrícula</a>
                                    </li>
                                    <li>
                                        <a href="#">Reporte de Evaluaciones</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->            
        </nav>
        <!-- sidebar-wrapper -->


        <main class="page-content">


            <div class="titulo-principal" class="row justify-content-center" style="background-color: #192F72">
                <div>
                    <h4>CENTRO DE PRODUCCIÓN TÉCNICA JOSÉ GALVEZ</h4>
                </div>
            </div>

            <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Reportes de <span>Matrícula</span></h2>
                </div>

                <table class="table">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col" width="15%">#Matrícula</th>
                            <th scope="col" width="15%">Numero de recibo</th>
                            <th scope="col" width="15%">DNI</th>
                            <th scope="col" width="15%">Fecha</th>
                            <th scope="col" width="15%">Monto</th>
                            <th scope="col" width="15%">Grupo</th>
                            <th scope="col" width="10%">Evento</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($matricula as $mtc)
                        <tr>
                            <th scope="row">{{ $mtc->id }}</th>
                            <td>{{ $mtc->numReciboPago }}</td>
                            <td>{{ $mtc->estudiante_dni }}</td>
                            <td>{{ $mtc->fecMat }}</td>
                            <td>{{ $mtc->montoLabo }}</td>
                            <td>{{ $mtc->grupo_id }}</td>
                            
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#miModal">Ver</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
                <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header justify-content-center">
                                
                                    <div class="form-group col-md-9 float-left">
                                        <h4 class="modal-title" id="myModalLabel">Matrícula N° 10000001</h4>
                                    </div>
                                    <div class="form-group col-md-3 float-right">
                                        <label class="titulo-label">Fecha: </label>
                                        <h6>10/10/2018</h6>
                                    </div>
                                
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                     <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" width="30%">Módulo</th>
                                            <th scope="col" width="30%">Docente</th>
                                            <th scope="col" width="8%">Turno</th>
                                            <th scope="col" width="18%">Frecuencia</th>
                                            <th scope="col" width="7%">Inicio</th>
                                            <th scope="col" width="7%">Fin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Panadería fina</td>
                                            <td>Anderson Estela Coronel</td>
                                            <td>Mañana</td>
                                            <td>Mar-Jue</td>
                                            <td>30/10/2018</td>
                                            <td>30/11/2018</td>
                                        </tr>
                                        <tr>
                                            <td>Diseño Gráfico I</td>
                                            <td>Anderson Estela Coronel</td>
                                            <td>Tarde</td>
                                            <td>Lun-Mie-Vie</td>
                                            <td>30/10/2018</td>
                                            <td>30/11/2018</td>
                                    </tbody>
                                </table>
                                <br>
                                <div class="botones">
                                    <button type="button" class="btn boton-registrar btn-success col-xs-4">Generar PDF</button>
                                    <button type="button" class="btn boton-registrar btn-danger col-xs-4 " class="close" data-dismiss="modal" aria-label="Close">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    


            </div>
        </main>
        <!-- page-content" -->


    </div>

    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>