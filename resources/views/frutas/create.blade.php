<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> SmartAdmin </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production-plugins.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-skins.min.css') }}">

    <!-- SmartAdmin RTL Support  -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-rtl.min.css') }}">

    <!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/demo.min.css') }}">

</head>







<body>
    <center>
        <img src="{{ asset('img/logo.jpg') }}" alt="" width="30%" height="auto">
        <h1>Formulario de nuevo producto</h1>
        <br><br><br>
    </center>
    <div class="row">
        <form action="{{ url('/frutas') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-offset-3 col-xs-offset-3 col-md-6 col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">Nuevo producto</h3>
                    </div>
                    <div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="Nombre">{{'Nombre de producto'}}</label>
                                <input class="form-control" placeholder="Piña, cereza, tomates, etc" id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="cantidad">{{'Cantidad'}}</label>
                                <input class="form-control" type="number" min="0" min="200" id="cantidad" name="cantidad" value="1">
                            </div>
                            <div class="form-group">
                                <label for="precio">{{'Precio'}}</label>
                                <input class="form-control" type="number" min="0" min="200" id="precio" name="precio" value="1">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">{{'Descripcion'}}</label>
                                <input class="form-control" id="descripcion" name="descripcion">
                            </div>
                            <div>
                                <input type="submit" value="Agregar" class="btn btn-success btn-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <a href="/" class="btn btn-primary btn-lg col-md-offset-3"> <-- Regresar </a>

</body>