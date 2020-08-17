inicio (despliegue de dayos)

<!DOCTYPE html>
<html lang="en">

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

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listaFrutas as $sepa)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$sepa->nombre}}</td>
                <td>{{$sepa->cantidad}}</td>
                <td>{{$sepa->precio}}</td>
                <td>{{$sepa->descripcion}}</td>
                <td>Editar

                    <form method="post" action="{{ url('/frutas/'.$sepa->id)}}">
                    {{csrf_field()}}
                    {{  method_field('DELETE')  }}

                    <button type=" submit" onclick="return confirm('¿Borrar?');"> Borrar</button>


                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>