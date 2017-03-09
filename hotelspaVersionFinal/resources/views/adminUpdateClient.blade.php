<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Pushy - Off-Canvas Navigation Menu</title>
    <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/demo.css">
    <!-- Pushy CSS -->
    <link rel="stylesheet" href="./css/pushy.css">
    <link rel="stylesheet" href="./css/styleAdminAddClient.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="./js/adminDelete.js" type="text/javascript">  </script>  
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

    <form id="myform" class="push" method="POST" role="form" >
        <table class="table table-striped" id="tabla">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>RANGO</th>
                    <th>ACCION</th>
                </tr>
            </thead>
            <tbody>     
               
                    <?php foreach ($usuarios as $usuario):?> 
                        <tr>
                            <td><?=$usuario['id']?></td>
                            <td><?=$usuario['name']?></td>
                            <td><?=$usuario['dni']?></td>
                            <td><?=$usuario['rol']?></td>
                            <td value="lolo"><button type="button" class="btn btn-danger" name="btnModificarCliente"  onclick="abrirUpdateModal(this.id)"  id="<?=$usuario['dni']?>">Modificar</button></td>
                        </tr>
                    <?php endforeach?>
                

            </tbody>
        </table>
       

    </form>


    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Eliminar Usuario
            </div>
            <form  class="push" method="POST" role="form" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">                
                <div class="modal-body">
                             
                    <input type="hidden" id="modalDni" class="form-control1" placeholder="Dni" name="dni" value="">
                    <input type="hidden" id="modalid" class="form-control1" placeholder="id" name="id" value="">
                    <label class="col-md-2 control-label">Dni</label>   
                    <input type="text" id="modalDniFalso" class="form-control1" placeholder="Dni" name="dnifalso" value="" disabled>


                    <label class="col-md-2 control-label">Nombre</label>
                    <input type="text" id="modalNombre" class="form-control1" placeholder="Nombre" name="Nombre" value="">

                    <label class="col-md-2 control-label">Rango</label>
                    <input type="text" id="modalRango" class="form-control1" placeholder="Rango" name="Rango" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="abrirUpdateModal" class="btn btn-danger btn-ok">Actualizar</button>
            </div>
            </form>
        </div>
    </div>
</div>


<footer class="site-footer push"><small>© Copyright 2017, Grupo 2 Corporation</small></footer>

<!-- Pushy JS -->
<script src="js/pushy.min.js"></script>

</body>
</html>
