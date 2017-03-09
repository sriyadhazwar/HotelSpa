<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/demo.css">
    <!-- Pushy CSS -->
    <link rel="stylesheet" href="css/pushy.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>

<header class="site-header push">Panel de Administrador</header>

<!-- Pushy Menu -->
<nav class="pushy pushy-left" data-focus="#first-link">
    <div class="pushy-content">
        <ul>
            <li class="pushy-link"><a href="./admin">Inicio</a></li>
            <li class="pushy-submenu">
                <button id="first-link">Modificar o Eliminar</button>
                <ul>
                    <li class="pushy-link"><a href="./adminactividades">Petición De Actividades</a></li>
                    <li class="pushy-link"><a href="./adminservicios">Peticion De Servicios</a></li>
                </ul>
            </li>
            <li class="pushy-submenu">
                <button>Clientes</button>
                <ul>
                    <li class="pushy-link"><a href="./AdminAddClient">Nuevo Cliente</a></li>
                    <li class="pushy-link"><a href="./AdminUpdateClient">Modificar Cliente</a></li>
                    <li class="pushy-link"><a href="./AdminDeleteClient">Borrar Cliente</a></li>
                </ul>
            </li>
            <li class="pushy-link"><a href="./pdfServicios" onclick="alert('No disponible en este momento')">Imprimir Servicios</a></li>
            <li class="pushy-link"><a href="./pdfActividades" onclick="alert('No disponible en este momento')">Imprimir actividades</a></li>
            <li class="pushy-link"><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Desconectar</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </li>
        </ul>
    </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>
<!-- Your Content -->
<div id="container">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 class="text-center">Clientes</h1>

    <table class="table table-striped" style="width: 70%; margin-left:15%">

    <thead>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
    </tr>
    </thead>
    
    <tbody>
        @foreach($usuarios as $user)
            <tr>
                <td> {{$user->dni}} </td>
                <td> {{$user->name}}</td>
            </tr>
        @endforeach
    </tbody>
    
    </table>

</div>

<!-- Pushy JS -->
<script src="js/pushy.min.js"></script>

</body>
</html>
