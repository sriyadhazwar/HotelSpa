<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Unicorns Of PHP</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/tcal.css" type="text/css" rel="stylesheet" media="all" />
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
	<div class="bannerlimpieza">
		<div class="container">
				<div class="head-nav">
						<span class="menu"> </span>
							<ul class="cl-effect-7">
								<li><a href="./servicios" >Volver</a></li>
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
			 <h1>Servicio de Limpieza</h1>
	 		<p style="font-size: 20px"> En nuestro de hotel, contamos con un servicio de limpieza que puede solicitar en el momento que usted desee, solo diganos su habitación y su habitación estará perfecta en todo momento para su descanso.</p>
		<form method="POST" role="form"> 
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group formCalen col-md-2" style="margin-left:20%">
		<div class="clearfix">
			<div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true"></div>
		<h4> Escriba su habitación:  </h4>
		<input type="text" name="habit" class="form-control" value="" />
		<h4>Tipo de limpieza: </h4>
		</div>
		<select class="lista" name="tipolimp">
			<option value="Completa">Limpieza Completa</option>
			<option value="Baños">Limpieza Baños</option>
			<option value="Sabanas">Sabanas limpias</option>
			<option value="Toallas">Toallas</option>
		</select>
		<button type="" class="btn btn-default btnlimpieza" name="btnlimpiar">Solicitar limpieza</button>
	</div>
</form>
	</div>
</div>

</body>
</html>