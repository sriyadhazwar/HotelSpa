<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Hotel Unicorns Of PHP</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estilo2.css" rel="stylesheet" type="text/css" media="all" />
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
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>

</head>
<body>

     <ul class="nav navbar-nav navbar-right navbar-fixed-top">
            <li><a href="./home"><h3 class="desconectar">Volver</h3></a></li>
    </ul>

<div class="rooms" id="suites">
    <div class="col-md-3 act-1">
        <div class="room-info">
            <a href="./gimactivity"> <img src="images/logo2v2.png" alt=""></a>
        </div>
    </div>
    <div class="col-md-3 act-2">
        <div class="room-info">
            <a href="./masaje"><img src="images/logo3v2.png" alt=""></a>
        </div>
    </div>
    <div class="col-md-3 act-3">
        <div class="room-info">
            <a href="./conferencias"><img src="images/logo4v2.png"  alt=""></a>
        </div>
    </div>
    <div class="col-md-3 act-4">
        <div class="room-info">
            <a href="./spa"><img src="images/logo5v2.png" alt=""></a>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>

</body>
</html>