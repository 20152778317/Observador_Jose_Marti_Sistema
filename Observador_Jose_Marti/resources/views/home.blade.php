<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/ICONO JOSE MARTI.png">
    <title>OBSERVADOR | JOSÉ MARTÍ</title>
    <!-- Custom CSS -->
    <link href="Plugins/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="Plugins/jquery-steps/steps.css" rel="stylesheet">
    <link href="Plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="Plugins/css/style.min.css" rel="stylesheet">
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="home">
                        <b class="logo-icon p-l-10">
                            <img src="images/JoseMarti.png" alt="homepage" class="light-logo" />
                        </b>
                        <span class="logo-text">
                             <img src="images/TextoIcono.png" alt="homepage" class="light-logo" />
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
               
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                    <ul class="navbar-nav float-left mr-auto">
                       <li class="nav-item d-none d-md-block">
                           <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                     
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Buscar &amp; Enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                  
                    <ul class="navbar-nav float-right">
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/User.png" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> Mi perfil</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Correo</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-divider"></div>
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout"></i>
                                    {{ __('Cerrar Sesión') }}
                                </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </header>
    
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="home" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-school"></i><span class="hide-menu">Estudiante</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="estudiante" class="sidebar-link"><i class="mdi mdi-account-edit"></i><span class="hide-menu"> Gestión Estudiante </span></a></li>
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-file-document"></i><span class="hide-menu"> Reportes </span></a></li>
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-chart-bar"></i><span class="hide-menu"> Estadisticas </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span class="hide-menu">Docente</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="docente" class="sidebar-link"><i class="mdi mdi-border-color"></i><span class="hide-menu"> Gestión Docente </span></a></li>
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-file-outline"></i><span class="hide-menu"> Reportes </span></a></li>
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-chart-pie"></i><span class="hide-menu"> Estadisticas </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-binoculars"></i><span class="hide-menu">Observador</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="gestionObservador" class="sidebar-link"><i class="mdi mdi-marker"></i><span class="hide-menu"> Gestión Observador </span></a></li>
                                <li class="sidebar-item"><a href="generarCitacion" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> Gestión Citación </span></a></li>
                                <li class="sidebar-item"><a href="gestionFaltas" class="sidebar-link"><i class="mdi mdi-glasses"></i><span class="hide-menu"> Gestión Faltas</span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Usuarios</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i class="mdi mdi-account-convert"></i><span class="hide-menu"> Gestion Usuarios </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-wrench"></i><span class="hide-menu">Configuración General</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i class="mdi mdi-pin"></i><span class="hide-menu"> Gestión Cursos</span></a></li>
                                <li class="sidebar-item"><a href="asignatura" class="sidebar-link"><i class="mdi mdi-flask-empty-outline"></i><span class="hide-menu"> Gestión Asignaturas</span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i class="mdi mdi-bus"></i><span class="hide-menu"> Gestión Ruta</span></a></li>
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i class="mdi mdi-feather"></i><span class="hide-menu"> Gestión Sede</span></a></li>
                                <li class="sidebar-item"><a href="colegio" class="sidebar-link"><i class="mdi mdi-map-marker"></i><span class="hide-menu"> Gestión Colegio</span></a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
       
        <div class="page-wrapper">
           
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
            @yield('content')
            </div>
         
            <footer class="footer text-center">
                Observador Virtual. Desarrolado por: <a href="https://www.facebook.com/dariosteven.jimenezcruz">Dario Jiménez & </a> 
                <a href="http://facebook.com/orjuela.jimmi">Yimmi Gil</a>
            </footer>
        </div>
    </div>
  
    <script src="Plugins/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap tether Core JavaScript -->
    <script src="Plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="Plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="Plugins/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="Plugins/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="Plugins/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="Plugins/js/custom.min.js"></script>
    <!--This page JavaScript -->
</body>
</html>          