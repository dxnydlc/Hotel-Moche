<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hotel Moche</title>

    <!-- Bootstrap Core CSS -->
    {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}

    <!-- MetisMenu CSS -->
    {!!Html::style('bower_components/metisMenu/dist/metisMenu.min.css')!!}

    <!-- Custom CSS -->
    {!!Html::style('dist/css/sb-admin-2.css')!!}
    {!!Html::style('dist/css/estilos.css')!!}

    <!-- Custom Fonts -->
    {!!Html::style('bower_components/font-awesome/css/font-awesome.min.css')!!}

    <link href='https://fonts.googleapis.com/css?family=Ropa+Sans:400,400italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    

    <div id="wrapper">


        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Hotel Moche v1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {!!Auth::User()->nombre.' '.Auth::User()->apellidos!!} <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/home"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/registro"><i class="fa fa-table fa-fw"></i> Registro</a>
                        </li>
                        <li>
                            <a href="reservas.php"><i class="fa fa-edit fa-fw"></i> Reservas</a>
                        </li>
                        @if( Auth::User()->tipo == 'admin' )
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Mantenimiento<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/usuario">Usuarios</a>
                                </li>
                                <li>
                                    <a href="/habitacion">Habitacion</a>
                                </li>
                                <li>
                                    <a href="/empresa">Empresas</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        @endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    {!!Html::script('bower_components/jquery/dist/jquery.min.js')!!}

    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}

    <!-- Metis Menu Plugin JavaScript -->
    {!!Html::script('bower_components/metisMenu/dist/metisMenu.min.js')!!}

    <!-- Custom Theme JavaScript -->
    {!!Html::script('dist/js/sb-admin-2.js')!!}

    @section('scripts')
    @show

</body>

</html>
