<!DOCTYPE HTML>
<html>
<head>
    <style type="text/css" media="screen">
        .titulo{
            color: white;
        }
    </style>
    <title>Route of despair Hotel</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/estilo2.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Riviera Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
</head>
<body>
    <!--
    <div class="banner">
        <div class="head-nav">
            <span class="menu"> </span>
                <ul class="cl-effect-7">
                    <h1 class="titulo">Bienvenido, Elige la opción que desee.</h1>
                </ul>
        </div>
        <div class="rooms" id="suites">
        <div class="col-md-4">
            <div class="room-info">
                <a href="./servicios"> <img src="images/servicio-habitaciones.png" class="img-responsive"> </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="room-info">
                <a href="http://www.google.es"> <img src="images/actividades.png" class="img-responsive"> </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="room-info">
                <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                     <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                    <div class="clearfix"> </div>
                <img src="images/admin.png" class="img-responsive" alt=""></a>
            </div>
        </div>
            <div class="clearfix"> </div>
    </div>
    </div>
    -->

        <ul class="nav navbar-nav navbar-right navbar-fixed-top">
            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><h3 class="desconectar">Desconectar</h3></a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </li>
        </ul>
   

    
    <div class="rooms" id="suites">
        <div class="col-md-4 activity-1">
            <div class="room-info">
                <a href="./servicios"> <img src="images/logohabitaciones.png" class="" alt=""></a>
            </div>
        </div>
        <div class="col-md-4 activity-2">
            <div class="room-info">
                <a href="./actividad"><img src="images/logoactividades.png" class="" alt=""></a>
            </div>
        </div>
        <div class="col-md-4 activity-3">
            <div class="room-info">
                <a href="" onclick="alert('No disponible, solo para administración')"><img src="images/logoadministracion.png" class="" alt=""></a>
            </div>
        </div>
    </div>
</body>
</html>
