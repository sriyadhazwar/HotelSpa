<!DOCTYPE HTML>
<html>
<head>
    <title>Hotel Unicorns Of PHP</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/tcal.css" type="text/css" rel="stylesheet" media="all" />
   <link href="css/estilo2.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.min.css">
    <script type="text/javascript" src="js/tcal.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Riviera Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>


</head>
<body>

<!-- header -->
    <div class="banner-masaje">
        <div class="container">
                <div class="head-nav">
                        <span class="menu"> </span>
                            <ul class="cl-effect-7">
                                <li><a href="./actividad">Volver</a></li>

                                    <div class="clearfix"> </div>
                            </ul>
                </div>
                    <!-- script-for-nav -->
                    <script>
                        $( "span.menu" ).click(function() {
                          $( ".head-nav ul" ).slideToggle(300, function() {
                            // Animation complete.
                          });
                        });
                    </script>
                <!-- script-for-nav -->
                <div class="logo">
                    <a href="index.php"><img src="images/log.png" class="img-responsive" alt="" /></a>
                </div>
                <div class="banner-info">
            </div>
        </div>
    </div>
<!-- header -->
<!-- Gim -->
    <div class="container calen">
        <div class="container">
            <h1>Masajes</h1>
            <p style="font-size: 20px"> Disfruta de los mejores fisioterapeutas sin salir de nuestro hotel.</p>
        </div>
        <form method="POST" role="form">
        <div class ="formCalen col-md-2">
            <h4> Seleccione el día:  </h4>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="date" class="tcal form-control" value="" />    
        </div>
            <div class="form-group formCalen col-md-2" style="margin-left:15%">
                <h4>Habitación: </h4>
                <input type="text" name="habit">
                <button type="submit"  class="btn btn-default" style="margin-top:8%" name="btnmasaje">Enviar Solicitud</button>
            </div>      
        </div>
    </form>
</div>



</div>