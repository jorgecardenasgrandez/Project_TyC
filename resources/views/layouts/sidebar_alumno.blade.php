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
                <span class="user-name">
                <strong>{{ ucwords($alumno_composer->nombres)}}</strong>
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
                    <a href="{{route('alumno.index')}}">
                        <i class="fa fa-folder"></i>
                        <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('alumno.perfil',['dni'=>$alumno_composer->dni]) }}">
                        <i class="fa fa-folder"></i>
                        <span>Mi información</span>
                    </a>
                </li>

                <li class="header-menu">
                    <span>Operaciones</span>
                </li>
                <li>
                    <a href="#">
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
                                <a href="{{ route('reporte.matricula',['dni'=>$alumno_composer->dni]) }}">Reporte de Matrícula</a>
                            </li>
                            <li>
                                <a href="{{ route('reporte.notas',['dni'=>$alumno_composer->dni]) }}">Reporte de Evaluaciones</a>
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