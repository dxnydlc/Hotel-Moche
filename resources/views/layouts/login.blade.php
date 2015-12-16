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

</body>

</html>
