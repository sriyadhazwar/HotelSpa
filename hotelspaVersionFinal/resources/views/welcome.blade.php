<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Unicorns Of PHP</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
<!-- header -->
    <div class="banner">
        <div class="container">
                <div class="head-nav">
                        <span class="menu"> </span>
                            <ul class="cl-effect-7">
                                <li><a href="">Inicio</a></li>
                                <li><a href="#ourresort" class="scroll">Nuestro hotel</a></li>
                                <li><a href="#footer" class="scroll">Sobre Nosotros</a></li>
                                <li><a href="{{ url('/login') }}" >Iniciar Sesión</a></li>
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
                    <img src="images/log.png" class="img-responsive" alt="" />
                </div>
                <div class="banner-info">
                    <p>Disfrute de la estupenda tranquilidad y paz de este lugar sombreado por árboles rodeado de montañas donde el tiempo se detiene. ¡Escoja facilidad, armonía y bienestar sobre el ritmo agitado del estilo de vida actual!</p>
                </div>
        </div>
    </div>
<!-- header -->
<!-- ENCHANTMENT  -->
    <div class="ENCHANTMENT" id="ourresort">
            <div class="col-md-6 ENCHANTMENT-left">
                <img src="images/5.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 ENCHANTMENT-right">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="slider-info">
                                        <img src="images/logo1.png" class="img-responsive" alt="">
                                        <h3>ENCANTO Y ESPLENDOR</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque justo ac velit facilisis convallis vel id nisi. Morbi hendrerit ac tellus eu luctus. Vestibulum ullamcorper elit eu eleifend posuere. Proin imperdiet nisl eu est vulputate, vel tincidunt lacus pretium.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="slider-info">
                                        <img src="images/logo1.png" class="img-responsive" alt="">
                                        <h3>ENCHANTMENT AND SPLENDOUR</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque justo ac velit facilisis convallis vel id nisi. Morbi hendrerit ac tellus eu luctus. Vestibulum ullamcorper elit eu eleifend posuere. Proin imperdiet nisl eu est vulputate, vel tincidunt lacus pretium.</p>
                                    </div>
                                </li>
                                <li>    
                                    <div class="slider-info">
                                        <img src="images/logo1.png" class="img-responsive" alt="">
                                        <h3>ENCHANTMENT AND SPLENDOUR</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque justo ac velit facilisis convallis vel id nisi. Morbi hendrerit ac tellus eu luctus. Vestibulum ullamcorper elit eu eleifend posuere. Proin imperdiet nisl eu est vulputate, vel tincidunt lacus pretium.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                        <!-- FlexSlider -->
                              <script defer src="js/jquery.flexslider.js"></script>
                              <script type="text/javascript">
                                $(function(){
                                  SyntaxHighlighter.all();
                                });
                                $(window).load(function(){
                                  $('.flexslider').flexslider({
                                    animation: "slide",
                                    start: function(slider){
                                      $('body').removeClass('loading');
                                    }
                                  });
                                });
                              </script>
                        <!-- FlexSlider -->
    <!-- slider -->
            </div>
            <div class="clearfix"> </div>
    </div>
<!-- ENCHANTMENT  -->
<!-- wonder -->     
    <div class="wonder" id="">
        <div class="col-md-2 wonder-left">
            <img src="images/2.jpg" class="img-responsive" alt="">
        </div>  
        <div class="col-md-4 wonder-mid">
            <img src="images/logo1.png" class="img-responsive" alt="">
            <h5>ALOJAMIENTO</h5>
            <h3>EMOCIONES Y MARAVILLAS</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque justo ac velit facilisis </p>
        </div>  
        <div class="col-md-6 wonder-right">
            <img src="images/bed2.jpg" class="img-responsive" alt="">
        </div>  
            <div class="clearfix"> </div>
    </div>      
<!-- wonder -->

<!-- guests -->
    <div class="guests" >
        <div class="container">
            <img src="images/logo5.png" class="img-responsive" alt="">
            <h3>SEA NUESTROS INVITADOS</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque justo ac velit facilisis convallis vel id </p>
        </div>
    </div>
<!-- guests -->
<!-- footer -->
    <div class="footer" id="footer">
        <div class="col-md-6 footer-left">
        <img src="images/4.jpg" class="img-responsive" alt="">
            <div class="col-md-6 footer-left1">
                <img src="images/logo5.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 footer-left2">
                <ul>
                    <li>Unicorns of Resort</li>
                    <li>Cádiz (Spain)</li>
                    <li>PO Box 68789</li>
                    <li>Street 445 </p></li>
                </ul>
                <p>+911234567895</p>
                <h6><a href="#">info@rooms.com</h6></a>
            </div>
                <div class="clearfix"> </div>
                    <div class="footer-left3">
                        <ul>
                            <li><a href="#"><i class="fb"></i></a></li>
                            <li><a href="#"><i class="twt"></i></a></li>
                            <li><a href="#"><i class="goop"></i></a></li>
                            <li><a href="#"><i class="in"></i></a></li>
                            <li><a href="#"><i class="do"></i></a></li>
                            <li><a href="#"><i class="drib"></i></a></li>
                            <li><a href="#"><i class="tet"></i></a></li>
                                <div class="clearfix"> </div>
                        </ul>
                    </div>
        </div>
        <div class="col-md-6 footer-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et varius turpis. Donec enim sapien, sollicitudin quis volutpat nec, sagittis eget ex. Pellentesque in accumsan orci.-<span>Ian Solo-</span></p>
            <div class="col-md-6 footer-right1">
                <img src="images/fo.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 footer-right2">
                <img src="images/un.png" class="img-responsive" alt="">
            </div>
                <div class="clearfix"> </div>
            <h6>Copyrights © 2015 Riviera All rights reserved | Template by</h6>
        </div>
            <div class="clearfix"> </div>
    </div>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
<!-- footer -->
</body>
</html>
