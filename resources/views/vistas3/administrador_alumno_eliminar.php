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
                        <span class="user-name">Jeferson
                            <strong>Cayo</strong>
                        </span>
                        <span class="user-role">Administrador</span>
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
                            <span>Administración</span>
                        </li>
                        <li>
                            <a href="administrador_index.php">
                                <i class="fa fa-folder"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-graduation-cap"></i>
                                <span>Alumnos</span>
                                <!-- <span class="badge badge-pill badge-danger">New </span> -->
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="administrador_alumno_registrar.php">Agregar <!--<span class="badge badge-pill badge-success">Pro</span>--></a>
                                    </li>
                                    <li>
                                        <a href="administrador_alumno_buscar.php">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_alumno_modificar.php">Editar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_alumno_eliminar.php">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_alumnos_todos.php">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span>Profesores</span>
                                <!--<span class="badge badge-pill badge-primary">3</span>-->
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="administrador_profesor_registrar.php">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_profesor_buscar.php">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_profesor_modificar.php">Editar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_profesor_eliminar.php">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_profesores_todos.php">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Familias Profesionales</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="administrador_familia_registrar.php">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_familia_modificar.php">Editar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_familia_eliminar.php">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_familias_todos.php">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Opciones Ocup.</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="administrador_opcion_registrar.php">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_opcion_modificar.php">Editar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_opcion_eliminar.php">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_opciones_todos.php">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Módulos</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="administrador_modulo_registrar.php">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_modulo_buscar.php">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_modulo_modificar.php">Editar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_modulo_eliminar.php">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="administrador_modulos_todos.php">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>Operaciones</span>
                        </li>
                        <li>
                            <a href="administrador_matricular.php">
                                <i class="fa fa-folder"></i>
                                <span>Matrícular</span>
                            </a>
                        </li>
                        <li>
                            <a href="administrador_asignar.php">
                                <i class="fa fa-folder"></i>
                                <span>Asignar Docente</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Reportes</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="#">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="#">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="#">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="#">Reporte de ...</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="administrador_crear_administrador.php">
                                <i class="fa fa-folder"></i>
                                <span>Crear Administrador</span>
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
                    <h2>Eliminar datos de <span>Alumno</span></h2>
                </div>

                <div class="container" style="margin: 0 auto 20px auto">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div id="imaginary_container"> 
                                <div class="input-group stylish-input-group">
                                    <input id="id" name="id" type="text" class="form-control" autocomplete="off" placeholder="Escriba el nombre y/o apellido">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form>
                    <fieldset>
                        <legend>Datos personales</legend>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Nombres</label>
                                <input type="text" class="form-control" name="nombres" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Apellido Paterno</label>
                                <input type="text" class="form-control" name="apellido-paterno" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Apellido Materno</label>
                                <input type="text" class="form-control" name="apellido-materno" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="titulo-label">Fecha de nacimiento</label>
                                <input type="text" class="form-control" name="fecha-nacimiento" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="titulo-label">Sexo</label>                            
                                <input type="text" class="form-control" name="sexo" readonly>
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
                            <input type="text" class="form-control" name="estado-civil" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Grado de Instrucción</label>                            
                            <input type="text" class="form-control" name="grado-instruccion" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Ocupación</label>                            
                            <input type="text" class="form-control" name="ocupacion" readonly>
                        </div>
                    </div>

                    <div class="form-row">           
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Número de celular</label>
                            <input type="number" class="form-control" name="numero" readonly>                       
                        </div>
                        <div class="form-group col-md-6">
                            <label class="titulo-label">Correo electrónico</label>                            
                            <input type="email" class="form-control" name="email" readonly>
                        </div>
                    </div>
                    </fieldset>
                    <br>
                    <br>
                    
                    <fieldset >
                        <legend>Dirección</legend>
                        <div class="form-group">
                            <label class="titulo-label">Domicilio</label>
                            <input type="text" class="form-control" name="domicilio" readonly>                       
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Distrito</label>                            
                                <input type="text" class="form-control" name="distrito" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Provincia</label>                            
                                <input type="text" class="form-control" name="provincia" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="titulo-label">Departamento</label>                            
                                <input type="text" class="form-control" name="departamento" readonly>
                            </div>
                        </div>
                    </fieldset>

                    <br>
                    <div class="botones">
                        <button type="submit" class="btn boton-registrar btn-danger col-xs-4">Eliminar</button>
                    </div>
                    <br>

                </form>
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