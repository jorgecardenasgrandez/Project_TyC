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
                        <span class="user-name">Andercito
                            <strong>Estela</strong>
                        </span>
                        <span class="user-role">Profesor</span>
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
                            <a href="profesor_index.php">
                                <i class="fa fa-folder"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="profesor_informacion.php">
                                <i class="fa fa-folder"></i>
                                <span>Mi información</span>
                            </a>
                        </li>

                        <li class="header-menu">
                            <span>Operaciones</span>
                        </li>
                        <li>
                            <a href="profesor_cambiar_contraseña.php">
                                <i class="fa fa-folder"></i>
                                <span>Cambiar contraseña</span>
                            </a>
                        </li>
                        <li>
                            <a href="profesor_ver_modulo.php">
                                <i class="fa fa-folder"></i>
                                <span>Ver módulos</span>
                            </a>
                        </li>
                        <li>
                            <a href="profesor_ingresa_nota.php">
                                <i class="fa fa-folder"></i>
                                <span>Ingresar notas</span>
                            </a>
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
                    <h2>Ver <span>Modulos</span></h2>
                </div>

                <table class="table">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col" width="20%">Modulo</th>
                            <th scope="col" width="25%">Frecuencia</th>
                            <th scope="col" width="25%">Hora</th>
                            <th scope="col" width="10%">Alumnos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Modulo1</th>
                            <td>Lunes</td>
                            <td>8:00am - 12:00m </td>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#miModal">Ver</button></td>
                        </tr>
                        <tr>
                            <th scope="row">Modulo2</th>
                            <td>Miercoles</td>
                            <td>2:00pm - 4:00pm</td>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#miModal">Ver</button></td>
                        </tr>
                        <tr>
                          <th scope="row">Modulo3</th>
                          <td>Viernes</td>
                          <td>12:00m - 2:00pm </td>
                          <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#miModal">Ver</button></td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header justify-content-center">
                                
                                    <div class="form-group col-md-9 float-left">
                                        <h4 class="modal-title" id="myModalLabel">Modulo1</h4>
                                    </div>
                                    <div class="form-group col-md-3 float-right">
                                        <label class="titulo-label" style="margin: 0 -70px">Horario </label>
                                        <h6 style="margin: 0 -70px">Lunes 8:00am - 12:00m </h6>
                                    </div>
                                
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                     <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" width="10%">Orden</th>
                                            <th scope="col" width="20%">Nombre</th>
                                            <th scope="col" width="30%">Apellido</th>
                                            <th scope="col" width="10%">Edad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Anderson</td>
                                            <td>Estela Coronel</td>
                                            <td> 23 </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Anderson</td>
                                            <td>Estela Coronel</td>
                                            <td> 24 </td>
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