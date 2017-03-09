<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Pushy - Off-Canvas Navigation Menu</title>
    <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/demo.css">
    <!-- Pushy CSS -->
    <link rel="stylesheet" href="css/pushy.css">
    <link rel="stylesheet" href="css/styleAdminAddClient.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>

</div>

    <form class="push" method="POST" role="form" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <label class="col-md-2 control-label">Dni</label>
                    <div class="col-md-8">
                        <div class="input-group">                           
                            <span class="input-group-addon">
                                <img class="iconss" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4Mi45IDQ4Mi45IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0ODIuOSA0ODIuOTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMzkuNywyNjAuMmMwLjUsMCwxLDAsMS42LDBjMC4yLDAsMC40LDAsMC42LDBjMC4zLDAsMC43LDAsMSwwYzI5LjMtMC41LDUzLTEwLjgsNzAuNS0zMC41ICAgIGMzOC41LTQzLjQsMzIuMS0xMTcuOCwzMS40LTEyNC45Yy0yLjUtNTMuMy0yNy43LTc4LjgtNDguNS05MC43QzI4MC44LDUuMiwyNjIuNywwLjQsMjQyLjUsMGgtMC43Yy0wLjEsMC0wLjMsMC0wLjQsMGgtMC42ICAgIGMtMTEuMSwwLTMyLjksMS44LTUzLjgsMTMuN2MtMjEsMTEuOS00Ni42LDM3LjQtNDkuMSw5MS4xYy0wLjcsNy4xLTcuMSw4MS41LDMxLjQsMTI0LjlDMTg2LjcsMjQ5LjQsMjEwLjQsMjU5LjcsMjM5LjcsMjYwLjJ6ICAgICBNMTY0LjYsMTA3LjNjMC0wLjMsMC4xLTAuNiwwLjEtMC44YzMuMy03MS43LDU0LjItNzkuNCw3Ni03OS40aDAuNGMwLjIsMCwwLjUsMCwwLjgsMGMyNywwLjYsNzIuOSwxMS42LDc2LDc5LjQgICAgYzAsMC4zLDAsMC42LDAuMSwwLjhjMC4xLDAuNyw3LjEsNjguNy0yNC43LDEwNC41Yy0xMi42LDE0LjItMjkuNCwyMS4yLTUxLjUsMjEuNGMtMC4yLDAtMC4zLDAtMC41LDBsMCwwYy0wLjIsMC0wLjMsMC0wLjUsMCAgICBjLTIyLTAuMi0zOC45LTcuMi01MS40LTIxLjRDMTU3LjcsMTc2LjIsMTY0LjUsMTA3LjksMTY0LjYsMTA3LjN6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTQ0Ni44LDM4My42YzAtMC4xLDAtMC4yLDAtMC4zYzAtMC44LTAuMS0xLjYtMC4xLTIuNWMtMC42LTE5LjgtMS45LTY2LjEtNDUuMy04MC45Yy0wLjMtMC4xLTAuNy0wLjItMS0wLjMgICAgYy00NS4xLTExLjUtODIuNi0zNy41LTgzLTM3LjhjLTYuMS00LjMtMTQuNS0yLjgtMTguOCwzLjNjLTQuMyw2LjEtMi44LDE0LjUsMy4zLDE4LjhjMS43LDEuMiw0MS41LDI4LjksOTEuMyw0MS43ICAgIGMyMy4zLDguMywyNS45LDMzLjIsMjYuNiw1NmMwLDAuOSwwLDEuNywwLjEsMi41YzAuMSw5LTAuNSwyMi45LTIuMSwzMC45Yy0xNi4yLDkuMi03OS43LDQxLTE3Ni4zLDQxICAgIGMtOTYuMiwwLTE2MC4xLTMxLjktMTc2LjQtNDEuMWMtMS42LTgtMi4zLTIxLjktMi4xLTMwLjljMC0wLjgsMC4xLTEuNiwwLjEtMi41YzAuNy0yMi44LDMuMy00Ny43LDI2LjYtNTYgICAgYzQ5LjgtMTIuOCw4OS42LTQwLjYsOTEuMy00MS43YzYuMS00LjMsNy42LTEyLjcsMy4zLTE4LjhjLTQuMy02LjEtMTIuNy03LjYtMTguOC0zLjNjLTAuNCwwLjMtMzcuNywyNi4zLTgzLDM3LjggICAgYy0wLjQsMC4xLTAuNywwLjItMSwwLjNjLTQzLjQsMTQuOS00NC43LDYxLjItNDUuMyw4MC45YzAsMC45LDAsMS43LTAuMSwyLjVjMCwwLjEsMCwwLjIsMCwwLjNjLTAuMSw1LjItMC4yLDMxLjksNS4xLDQ1LjMgICAgYzEsMi42LDIuOCw0LjgsNS4yLDYuM2MzLDIsNzQuOSw0Ny44LDE5NS4yLDQ3LjhzMTkyLjItNDUuOSwxOTUuMi00Ny44YzIuMy0xLjUsNC4yLTMuNyw1LjItNi4zICAgIEM0NDcsNDE1LjUsNDQ2LjksMzg4LjgsNDQ2LjgsMzgzLjZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                            </span>
                            <input type="text" class="form-control1" placeholder="Dni" name="dni">
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
             <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <label class="col-md-2 control-label">Nombre</label>
                    <div class="col-md-8">
                        <div class="input-group">                           
                            <span class="input-group-addon">
                                <img class="iconss" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4Mi45IDQ4Mi45IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0ODIuOSA0ODIuOTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMzkuNywyNjAuMmMwLjUsMCwxLDAsMS42LDBjMC4yLDAsMC40LDAsMC42LDBjMC4zLDAsMC43LDAsMSwwYzI5LjMtMC41LDUzLTEwLjgsNzAuNS0zMC41ICAgIGMzOC41LTQzLjQsMzIuMS0xMTcuOCwzMS40LTEyNC45Yy0yLjUtNTMuMy0yNy43LTc4LjgtNDguNS05MC43QzI4MC44LDUuMiwyNjIuNywwLjQsMjQyLjUsMGgtMC43Yy0wLjEsMC0wLjMsMC0wLjQsMGgtMC42ICAgIGMtMTEuMSwwLTMyLjksMS44LTUzLjgsMTMuN2MtMjEsMTEuOS00Ni42LDM3LjQtNDkuMSw5MS4xYy0wLjcsNy4xLTcuMSw4MS41LDMxLjQsMTI0LjlDMTg2LjcsMjQ5LjQsMjEwLjQsMjU5LjcsMjM5LjcsMjYwLjJ6ICAgICBNMTY0LjYsMTA3LjNjMC0wLjMsMC4xLTAuNiwwLjEtMC44YzMuMy03MS43LDU0LjItNzkuNCw3Ni03OS40aDAuNGMwLjIsMCwwLjUsMCwwLjgsMGMyNywwLjYsNzIuOSwxMS42LDc2LDc5LjQgICAgYzAsMC4zLDAsMC42LDAuMSwwLjhjMC4xLDAuNyw3LjEsNjguNy0yNC43LDEwNC41Yy0xMi42LDE0LjItMjkuNCwyMS4yLTUxLjUsMjEuNGMtMC4yLDAtMC4zLDAtMC41LDBsMCwwYy0wLjIsMC0wLjMsMC0wLjUsMCAgICBjLTIyLTAuMi0zOC45LTcuMi01MS40LTIxLjRDMTU3LjcsMTc2LjIsMTY0LjUsMTA3LjksMTY0LjYsMTA3LjN6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTQ0Ni44LDM4My42YzAtMC4xLDAtMC4yLDAtMC4zYzAtMC44LTAuMS0xLjYtMC4xLTIuNWMtMC42LTE5LjgtMS45LTY2LjEtNDUuMy04MC45Yy0wLjMtMC4xLTAuNy0wLjItMS0wLjMgICAgYy00NS4xLTExLjUtODIuNi0zNy41LTgzLTM3LjhjLTYuMS00LjMtMTQuNS0yLjgtMTguOCwzLjNjLTQuMyw2LjEtMi44LDE0LjUsMy4zLDE4LjhjMS43LDEuMiw0MS41LDI4LjksOTEuMyw0MS43ICAgIGMyMy4zLDguMywyNS45LDMzLjIsMjYuNiw1NmMwLDAuOSwwLDEuNywwLjEsMi41YzAuMSw5LTAuNSwyMi45LTIuMSwzMC45Yy0xNi4yLDkuMi03OS43LDQxLTE3Ni4zLDQxICAgIGMtOTYuMiwwLTE2MC4xLTMxLjktMTc2LjQtNDEuMWMtMS42LTgtMi4zLTIxLjktMi4xLTMwLjljMC0wLjgsMC4xLTEuNiwwLjEtMi41YzAuNy0yMi44LDMuMy00Ny43LDI2LjYtNTYgICAgYzQ5LjgtMTIuOCw4OS42LTQwLjYsOTEuMy00MS43YzYuMS00LjMsNy42LTEyLjcsMy4zLTE4LjhjLTQuMy02LjEtMTIuNy03LjYtMTguOC0zLjNjLTAuNCwwLjMtMzcuNywyNi4zLTgzLDM3LjggICAgYy0wLjQsMC4xLTAuNywwLjItMSwwLjNjLTQzLjQsMTQuOS00NC43LDYxLjItNDUuMyw4MC45YzAsMC45LDAsMS43LTAuMSwyLjVjMCwwLjEsMCwwLjIsMCwwLjNjLTAuMSw1LjItMC4yLDMxLjksNS4xLDQ1LjMgICAgYzEsMi42LDIuOCw0LjgsNS4yLDYuM2MzLDIsNzQuOSw0Ny44LDE5NS4yLDQ3LjhzMTkyLjItNDUuOSwxOTUuMi00Ny44YzIuMy0xLjUsNC4yLTMuNyw1LjItNi4zICAgIEM0NDcsNDE1LjUsNDQ2LjksMzg4LjgsNDQ2LjgsMzgzLjZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                            </span>
                            <input type="text" class="form-control1" placeholder="Nombre" name="name" >
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
             <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <label class="col-md-2 control-label">Contraseña</label>
                    <div class="col-md-8">
                        <div class="input-group">                           
                            <span class="input-group-addon">
                                <img class="iconss" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4Mi45IDQ4Mi45IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0ODIuOSA0ODIuOTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMzkuNywyNjAuMmMwLjUsMCwxLDAsMS42LDBjMC4yLDAsMC40LDAsMC42LDBjMC4zLDAsMC43LDAsMSwwYzI5LjMtMC41LDUzLTEwLjgsNzAuNS0zMC41ICAgIGMzOC41LTQzLjQsMzIuMS0xMTcuOCwzMS40LTEyNC45Yy0yLjUtNTMuMy0yNy43LTc4LjgtNDguNS05MC43QzI4MC44LDUuMiwyNjIuNywwLjQsMjQyLjUsMGgtMC43Yy0wLjEsMC0wLjMsMC0wLjQsMGgtMC42ICAgIGMtMTEuMSwwLTMyLjksMS44LTUzLjgsMTMuN2MtMjEsMTEuOS00Ni42LDM3LjQtNDkuMSw5MS4xYy0wLjcsNy4xLTcuMSw4MS41LDMxLjQsMTI0LjlDMTg2LjcsMjQ5LjQsMjEwLjQsMjU5LjcsMjM5LjcsMjYwLjJ6ICAgICBNMTY0LjYsMTA3LjNjMC0wLjMsMC4xLTAuNiwwLjEtMC44YzMuMy03MS43LDU0LjItNzkuNCw3Ni03OS40aDAuNGMwLjIsMCwwLjUsMCwwLjgsMGMyNywwLjYsNzIuOSwxMS42LDc2LDc5LjQgICAgYzAsMC4zLDAsMC42LDAuMSwwLjhjMC4xLDAuNyw3LjEsNjguNy0yNC43LDEwNC41Yy0xMi42LDE0LjItMjkuNCwyMS4yLTUxLjUsMjEuNGMtMC4yLDAtMC4zLDAtMC41LDBsMCwwYy0wLjIsMC0wLjMsMC0wLjUsMCAgICBjLTIyLTAuMi0zOC45LTcuMi01MS40LTIxLjRDMTU3LjcsMTc2LjIsMTY0LjUsMTA3LjksMTY0LjYsMTA3LjN6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTQ0Ni44LDM4My42YzAtMC4xLDAtMC4yLDAtMC4zYzAtMC44LTAuMS0xLjYtMC4xLTIuNWMtMC42LTE5LjgtMS45LTY2LjEtNDUuMy04MC45Yy0wLjMtMC4xLTAuNy0wLjItMS0wLjMgICAgYy00NS4xLTExLjUtODIuNi0zNy41LTgzLTM3LjhjLTYuMS00LjMtMTQuNS0yLjgtMTguOCwzLjNjLTQuMyw2LjEtMi44LDE0LjUsMy4zLDE4LjhjMS43LDEuMiw0MS41LDI4LjksOTEuMyw0MS43ICAgIGMyMy4zLDguMywyNS45LDMzLjIsMjYuNiw1NmMwLDAuOSwwLDEuNywwLjEsMi41YzAuMSw5LTAuNSwyMi45LTIuMSwzMC45Yy0xNi4yLDkuMi03OS43LDQxLTE3Ni4zLDQxICAgIGMtOTYuMiwwLTE2MC4xLTMxLjktMTc2LjQtNDEuMWMtMS42LTgtMi4zLTIxLjktMi4xLTMwLjljMC0wLjgsMC4xLTEuNiwwLjEtMi41YzAuNy0yMi44LDMuMy00Ny43LDI2LjYtNTYgICAgYzQ5LjgtMTIuOCw4OS42LTQwLjYsOTEuMy00MS43YzYuMS00LjMsNy42LTEyLjcsMy4zLTE4LjhjLTQuMy02LjEtMTIuNy03LjYtMTguOC0zLjNjLTAuNCwwLjMtMzcuNywyNi4zLTgzLDM3LjggICAgYy0wLjQsMC4xLTAuNywwLjItMSwwLjNjLTQzLjQsMTQuOS00NC43LDYxLjItNDUuMyw4MC45YzAsMC45LDAsMS43LTAuMSwyLjVjMCwwLjEsMCwwLjIsMCwwLjNjLTAuMSw1LjItMC4yLDMxLjksNS4xLDQ1LjMgICAgYzEsMi42LDIuOCw0LjgsNS4yLDYuM2MzLDIsNzQuOSw0Ny44LDE5NS4yLDQ3LjhzMTkyLjItNDUuOSwxOTUuMi00Ny44YzIuMy0xLjUsNC4yLTMuNyw1LjItNi4zICAgIEM0NDcsNDE1LjUsNDQ2LjksMzg4LjgsNDQ2LjgsMzgzLjZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                            </span>
                            <input type="password"  class="form-control1" placeholder="Contrasela" name="password">
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
             <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <label class="col-md-2 control-label">Re-Contraseña</label>
                    <div class="col-md-8">
                        <div class="input-group">                           
                            <span class="input-group-addon">
                                <img class="iconss" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4Mi45IDQ4Mi45IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0ODIuOSA0ODIuOTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMzkuNywyNjAuMmMwLjUsMCwxLDAsMS42LDBjMC4yLDAsMC40LDAsMC42LDBjMC4zLDAsMC43LDAsMSwwYzI5LjMtMC41LDUzLTEwLjgsNzAuNS0zMC41ICAgIGMzOC41LTQzLjQsMzIuMS0xMTcuOCwzMS40LTEyNC45Yy0yLjUtNTMuMy0yNy43LTc4LjgtNDguNS05MC43QzI4MC44LDUuMiwyNjIuNywwLjQsMjQyLjUsMGgtMC43Yy0wLjEsMC0wLjMsMC0wLjQsMGgtMC42ICAgIGMtMTEuMSwwLTMyLjksMS44LTUzLjgsMTMuN2MtMjEsMTEuOS00Ni42LDM3LjQtNDkuMSw5MS4xYy0wLjcsNy4xLTcuMSw4MS41LDMxLjQsMTI0LjlDMTg2LjcsMjQ5LjQsMjEwLjQsMjU5LjcsMjM5LjcsMjYwLjJ6ICAgICBNMTY0LjYsMTA3LjNjMC0wLjMsMC4xLTAuNiwwLjEtMC44YzMuMy03MS43LDU0LjItNzkuNCw3Ni03OS40aDAuNGMwLjIsMCwwLjUsMCwwLjgsMGMyNywwLjYsNzIuOSwxMS42LDc2LDc5LjQgICAgYzAsMC4zLDAsMC42LDAuMSwwLjhjMC4xLDAuNyw3LjEsNjguNy0yNC43LDEwNC41Yy0xMi42LDE0LjItMjkuNCwyMS4yLTUxLjUsMjEuNGMtMC4yLDAtMC4zLDAtMC41LDBsMCwwYy0wLjIsMC0wLjMsMC0wLjUsMCAgICBjLTIyLTAuMi0zOC45LTcuMi01MS40LTIxLjRDMTU3LjcsMTc2LjIsMTY0LjUsMTA3LjksMTY0LjYsMTA3LjN6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTQ0Ni44LDM4My42YzAtMC4xLDAtMC4yLDAtMC4zYzAtMC44LTAuMS0xLjYtMC4xLTIuNWMtMC42LTE5LjgtMS45LTY2LjEtNDUuMy04MC45Yy0wLjMtMC4xLTAuNy0wLjItMS0wLjMgICAgYy00NS4xLTExLjUtODIuNi0zNy41LTgzLTM3LjhjLTYuMS00LjMtMTQuNS0yLjgtMTguOCwzLjNjLTQuMyw2LjEtMi44LDE0LjUsMy4zLDE4LjhjMS43LDEuMiw0MS41LDI4LjksOTEuMyw0MS43ICAgIGMyMy4zLDguMywyNS45LDMzLjIsMjYuNiw1NmMwLDAuOSwwLDEuNywwLjEsMi41YzAuMSw5LTAuNSwyMi45LTIuMSwzMC45Yy0xNi4yLDkuMi03OS43LDQxLTE3Ni4zLDQxICAgIGMtOTYuMiwwLTE2MC4xLTMxLjktMTc2LjQtNDEuMWMtMS42LTgtMi4zLTIxLjktMi4xLTMwLjljMC0wLjgsMC4xLTEuNiwwLjEtMi41YzAuNy0yMi44LDMuMy00Ny43LDI2LjYtNTYgICAgYzQ5LjgtMTIuOCw4OS42LTQwLjYsOTEuMy00MS43YzYuMS00LjMsNy42LTEyLjcsMy4zLTE4LjhjLTQuMy02LjEtMTIuNy03LjYtMTguOC0zLjNjLTAuNCwwLjMtMzcuNywyNi4zLTgzLDM3LjggICAgYy0wLjQsMC4xLTAuNywwLjItMSwwLjNjLTQzLjQsMTQuOS00NC43LDYxLjItNDUuMyw4MC45YzAsMC45LDAsMS43LTAuMSwyLjVjMCwwLjEsMCwwLjIsMCwwLjNjLTAuMSw1LjItMC4yLDMxLjksNS4xLDQ1LjMgICAgYzEsMi42LDIuOCw0LjgsNS4yLDYuM2MzLDIsNzQuOSw0Ny44LDE5NS4yLDQ3LjhzMTkyLjItNDUuOSwxOTUuMi00Ny44YzIuMy0xLjUsNC4yLTMuNyw1LjItNi4zICAgIEM0NDcsNDE1LjUsNDQ2LjksMzg4LjgsNDQ2LjgsMzgzLjZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                            </span>
                            <input type="password" class="form-control1" placeholder="Repetir Contraseña" name="repassword">
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

        <button type="submit" name="btnAddClient" id="btnAddClient">Registrar</button>

    </form>


<footer class="site-footer push"><small>© Copyright 2017, Grupo 2 Corporation</small></footer>

<!-- Pushy JS -->
<script src="js/pushy.min.js"></script>

</body>
</html>
