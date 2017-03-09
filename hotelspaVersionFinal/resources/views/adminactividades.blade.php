<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Admin - Actividades</title>
    <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/demo.css">

    <link rel="stylesheet" href="css/pushy.css">

    <link href="css/tcal.css" type="text/css" rel="stylesheet" media="all" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.min.css">
    <script type="text/javascript" src="js/tcal.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="css/tcal.css" type="text/css" rel="stylesheet" media="all" />
    <script type="text/javascript" src="js/tcal.js"></script>

    <script src="./js/Admin.js" type="text/javascript"></script>  
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
            <li class="pushy-link"><a href="./pdfServicios">Imprimir Servicios</a></li>
            <li class="pushy-link"><a href="./pdfActividades">Imprimir actividades</a></li>
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
    <!— Menu Button —>
    <button class="menu-btn">&#9776; Menu</button>
    <h1 class="text-center">Actividades</h1>

    <form id="myform" class="push" method="POST" role="form" >

        <table class="table table-striped">

            <thead>
            <tr>
                <th>DNI Cliente</th>
                <th>Actividad</th>
                <th>Habitacion</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($actividades as $actividad):?>
                <tr>
                    <td> <?=$actividad->user->dni?> </td>
                    <td> <?=$actividad->act?> </td>
                    <td> <?=$actividad->habit?> </td>
                    <td> <?=$actividad->fecha?> 
                    <td><button type="button" href="" class="btn btn-info"  name="btnBorrarCliente" onclick="abrirModal(this.id,'modificar')"  id="<?=$actividad['id']?>">Modificar</button>
                        <button type="button" href="" class="btn btn-danger" name="btnBorrarCliente" onclick="abrirModal(this.id,'borrar')"  id="<?=$actividad['id']?>">Borrar</button></td>
                </tr>
             <?php endforeach?>
            </tbody>
        </table>

    </form>

<div style="top:20%" class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Eliminar Actividad
            </div>
            <form  class="push" method="POST" role="form" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="formdni" name="id" value="">
                <div class="modal-body">
                    <span id="idBorrar"></span>
                    <span id="idABorrar"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="btnDeleteAct" class="btn btn-danger btn-ok">Borrar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div style="top:20%" class="modal fade" id="confirm-modify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Modificar Actividad
            </div>
            <form class="push" method="POST" role="form" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control1" placeholder="Id" name="id" value="">
                    </br>
                    <label class="col-md-2 control-label">act</label>
                    <input type="text" id="tipo" class="form-control1" placeholder="Actividad" name="tipo" value="">
                    </br>
                    <label class="col-md-2 control-label">hab</label>
                    <input type="text" id="hab" class="form-control1" placeholder="Habitacion" name="hab" value="">
                    </br>
                    <label class="col-md-2 control-label">fecha</label>
                    <input type="text" id="mod" class="form-control1" placeholder="Fecha" name="mod" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="btnUpdateAct" class="btn btn-danger btn-ok">Modificar</button>
            </div>
            </form>
        </div>
    </div>
</div>

</div>

<footer class="site-footer push"><small>© Copyright 2017, Grupo 2 Corporation</small></footer>

<!-- Pushy JS -->
<script src="js/pushy.min.js"></script>

</body>
</html>