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
                        <img class="img-responsive img-rounded" src="/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">{{ $user->nom_prof}}
                            {{ $user->apePaterno_prof }}
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
                            <a href="{{ route('profesor.index') }}">
                                <i class="fa fa-folder"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="/perfilprofesor">
                                <i class="fa fa-folder"></i>
                                <span>Mi información</span>
                            </a>
                        </li>

                        <li class="header-menu">
                            <span>Operaciones</span>
                        </li>
                        <li>
                            <a href="\cambiocontraseña">
                                <i class="fa fa-folder"></i>
                                <span>Cambiar contraseña</span>
                            </a>
                        </li>
                        <li>
                            <a href="\modulosprofesor">
                                <i class="fa fa-folder"></i>
                                <span>Ver módulos</span>
                            </a>
                        </li>
                        <li>
                            <a href="\ingresanotas">
                                <i class="fa fa-folder"></i>
                                <span>Ingresar notas</span>
                            </a>
                        </li>
                        <li>
                            <a href="/salir/{{$user->correo}}">
                                <i class="fa fa-ban"></i>
                                <span>Cerrar sesion</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->            
        </nav>
        <!-- sidebar-wrapper -->
