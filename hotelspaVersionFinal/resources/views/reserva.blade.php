<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Restaurante</title>
       <!--  <link href="http://gmpg.org/xfn/11" rel="profile"> -->
        <link href="../css/styleRest.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/styleRestaurant.css" rel="stylesheet" type="text/css" media="all" />

        <script src="../js/perfjs.js" type="text/javascript">  </script>
        <script src="../js/cartjs.js" type="text/javascript">  </script>  
        <script src="../js/order.js" type="text/javascript">  </script>  
    </head>

    <body class="home blog init " onload="reajustar()">
        <div id="webdiv">
            <div id="contentwebdiv">        

                <header id="banner" role="banner">
                    <h1 id="logo">
                        <a href="../servicios">Au Petit Panisse</a>
                    </h1>
                    <nav role="navigation">
                        <ul id="main-menu">
                            <li id="restaurante" class=" restaurant">
                                <a href="../restaurante">
                                    <span class="txt">
                                        <cufon id="cufon1" class="cufon cufon-canvas cufonMenu" alt="Restaurante">
                                            <canvas id="canva1" class="canvaMenu"></canvas>

                                            <cufontext>Restaurante</cufontext>
                                        </cufon>
                                    </span>

                                    <span class="img imgMenu"></span>
                                </a>
                            </li>

                            <li id="carta" class=" lacarte">
                                <a href="./carta">
                                    <span class="txt">
                                        <cufon id="cufon2" class="cufon cufon-canvas cufonMenu" alt="La ">
                                            <canvas id="canva2" class="canvaMenu"></canvas>
                                            
                                            <cufontext>La </cufontext>
                                        </cufon>

                                        <cufon id="cufon3" class="cufon cufon-canvas cufonMenu" alt="carta">
                                            <canvas id="canva3" class="canvaMenu"></canvas>

                                            <cufontext>carta</cufontext>

                                        </cufon>
                                    </span>

                                    <span class="img imgMenu"></span>
                                </a>
                            </li>
                            <li id="reserva" class=" evenement active">
                                <a>
                                    <span class="txt">
                                        <cufon id="cufon4" class="cufon cufon-canvas cufonMenu" alt="Reserva">
                                            
                                            <canvas id="canva4" class="canvaMenu"></canvas>

                                            <cufontext>Reserva</cufontext>
                                        </cufon>
                                    </span>

                                    <span class="img imgMenu"></span>
                                </a>
                            </li>
                            <li id="contacto" class="contact ">
                                <a href="./contacto">
                                    <span class="txt">
                                        <cufon id="cufon5" class="cufon cufon-canvas cufonMenu" alt="Contacto">

                                            <canvas id="canva5" class="canvaMenu"></canvas>

                                            <cufontext>Contacto</cufontext>
                                        </cufon>
                                    </span>

                                    <span class="img imgMenu"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </header>

                <div id="homepage" class="contentbloc contact pager">
        
                    <header class="toppage">
                        <span class="iconpage">Contacto</span>
                    </header>

                    <div class="contentpage">                
                        <div class="txtcontentpage">
                            <div class="scroller">
                                <div id="scrollercontent1" class="scrollercontent">
                                    <span id="scrollerhand1" class="scrollerhand"></span>
                                </div>
                            </div>

                            <div class="bloctxtpage contactbloc titletop">
                                <h2 class="bigtitle">
                                    <cufon id="cufonContacto1" class="cufon cufon-canvas" alt="Contacto">
                                        <canvas></canvas>
                                        <cufontext>Contacto</cufontext>
                                    </cufon>
                                </h2>
                            </div>
            
                            <div class="scrolltxt">
                                <div class="scrolltxtabs">
                                    <article class="post post-single">
                                        <div class="bloctxtpage contactbloc">
                                            <form id="formReserva" action="demo_form.asp" method="get">
                                                <p>Entrantes</p>

                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Entrante : Placa salchichas con mantequilla salada 10€" > Placa salchichas con mantequilla salada
                                                    </div>
                                                    <div class="col-xs-3">10€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Entrante : Espárragos y panceta, huevo cocido y hojas de espinaca 12€" > Espárragos y panceta, huevo cocido y hojas de espinaca
                                                    </div>
                                                    <div class="col-xs-3">12€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Entrante : tarrina con pimiento verde, pimiento guisados 11€" > tarrina con pimiento verde, pimiento guisados
                                                    </div>
                                                    <div class="col-xs-3">11€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Entrante : Monza de hierbas marinadas, tomate seco y brioche 8€" > Monza de hierbas marinadas, tomate seco y brioche
                                                    </div>
                                                    <div class="col-xs-3">8€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Entrante : atún balsámico, puré de berenjenas y verduras 13€" > atún balsámico, puré de berenjenas y verduras
                                                    </div>
                                                    <div class="col-xs-3">13€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Entrante : Ensalada con crujiente de verduras, gambas y cilantro 10€" > Ensalada con crujiente de verduras, gambas y cilantro
                                                    </div>
                                                    <div class="col-xs-3">10€</div>
                                                </div>
                                                <hr>
                                                </br>
                                                <p>Platos</p>
                                                </br>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Plato : Pan-frito con verduras, queso parmesano rallado y cayó setas 17€" > Pan-frito con verduras, queso parmesano rallado y cayó setas
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Plato : pulpo a la parrilla de Galicia, chorizo ​​y chips de albahaca 17€" > pulpo a la parrilla de Galicia, chorizo ​​y chips de albahaca
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Plato : tartar de ternera con curry verde, Charlotte y mezclum 17€" > tartar de ternera con curry verde, Charlotte y mezclum
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Plato : Pescado del Dia 17€" > Pescado del Dia
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Plato : cerdo a la plancha, tomates y longanisa 17€" > cerdo a la plancha, tomates y longanisa
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Plato : Carne de vaca Pedazo de 300gr para el New Yorker, lechuga fresca y miel mostaza 17€" > Carne de vaca Pedazo de 300gr para el New Yorker, lechuga fresca y miel mostaza
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>                                                    
                                                <hr>


                                                </br>
                                                <p>Postres</p>
                                                </br>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Postre : Tarta manzana, caramelo de mantequilla salada 17€" > Tarta manzana, caramelo de mantequilla salada
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Postre : Caramia casa chantilly de chocolate 17€" > Caramia casa chantilly de chocolate
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Postre : Volcán Ardèchois 17€" > Volcán Ardèchois
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Postre : ron Baba, fruta confitada y azotado 17€" > ron Baba, fruta confitada y azotado
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Postre : Postre del día 17€" > Postre del día
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Postre : Los quesos añejos 17€" > Los quesos añejos
                                                    </div>
                                                    <div class="col-xs-3">17€</div>
                                                </div>
                                                <hr>
                                                </br>
                                                <p>Vinos</p>
                                                </br>                                               
                                                <p>Riojas</p>
                                                </br>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Bandol-château Sainte Anne 45€" > Bandol-château Sainte Anne
                                                    </div>
                                                    <div class="col-xs-3">45€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Bandol-Domaine Dupuy de Lôme 30€" > Bandol-Domaine Dupuy de Lôme
                                                    </div>
                                                    <div class="col-xs-3">30€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Bergerac-Château larchère bio 27€" > Bergerac-Château larchère bio
                                                    </div>
                                                    <div class="col-xs-3">27€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Bordeaux-côtes de bourg-château nodeau 28€" > Bordeaux-côtes de bourg-château nodeau
                                                    </div>
                                                    <div class="col-xs-3">28€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Bordeaux-côtes de francs-Château le puy 32€" > Bordeaux-côtes de francs-Château le puy
                                                    </div>
                                                    <div class="col-xs-3">32€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Bordeaux-ile de Patiras 27€" > Bordeaux-ile de Patiras
                                                    </div>
                                                    <div class="col-xs-3">27€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Bourgogne-aloxe corton-le suchot 69€" > Bourgogne-aloxe corton-le suchot
                                                    </div>
                                                    <div class="col-xs-3">69€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Bourgogne-Auxey duressey 42€" > Bourgogne-Auxey duressey
                                                    </div>
                                                    <div class="col-xs-3">42€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Bourgogne-cuvée margot 30€" > Bourgogne-cuvée margot
                                                    </div>
                                                    <div class="col-xs-3">30€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Bourgogne-Maranges vieilles vignes 36€" > Bourgogne-Maranges vieilles vignes
                                                    </div>
                                                    <div class="col-xs-3">36€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Bourgogne-pernand vergelesses 42€" > Bourgogne-pernand vergelesses
                                                    </div>
                                                    <div class="col-xs-3">42€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Cahors-Clos marguerite massault 32€" > Cahors-Clos marguerite massault
                                                    </div>
                                                    <div class="col-xs-3">32€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Carignan-vieilles vignes-L’argentier 32€" > Carignan-vieilles vignes-L’argentier
                                                    </div>
                                                    <div class="col-xs-3">32€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Cheverny-val de loire bio 28€" > Cheverny-val de loire bio
                                                    </div>
                                                    <div class="col-xs-3">28€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Costières de nîmes non filtré 27€" > Costières de nîmes non filtré
                                                    </div>
                                                    <div class="col-xs-3">27€</div>
                                                </div>                                                
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Costiéres de Nîmes-les terrasses d’Hortense 32€" > Costiéres de Nîmes-les terrasses d’Hortense
                                                    </div>
                                                    <div class="col-xs-3">32€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Coteaux de l’Ardèche-cuvée Ferdinand 25€" > Coteaux de l’Ardèche-cuvée Ferdinand
                                                    </div>
                                                    <div class="col-xs-3">25€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Coteaux de l’Ardèche-Merlot 25€" > Coteaux de l’Ardèche-Merlot
                                                    </div>
                                                    <div class="col-xs-3">25€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Coteaux de l’Ardèche-trace négre 25€" > Coteaux de l’Ardèche-trace négre
                                                    </div>
                                                    <div class="col-xs-3">25€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Côtes du rhône-cairanne 32€" > Côtes du rhône-cairanne
                                                    </div>
                                                    <div class="col-xs-3">32€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Côtes du rhône-La gerbaude 28€" > Côtes du rhône-La gerbaude
                                                    </div>
                                                    <div class="col-xs-3">28€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Côtes du rhône-lieu dit Clavin 37€" > Côtes du rhône-lieu dit Clavin
                                                    </div>
                                                    <div class="col-xs-3">37€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Côtes du rhône-Sierra du sud 38€" > Côtes du rhône-Sierra du sud
                                                    </div>
                                                    <div class="col-xs-3">38€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Côtes du rhône-Terras Vitis non filtré 25€" > Côtes du rhône-Terras Vitis non filtré
                                                    </div>
                                                    <div class="col-xs-3">25€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Côtes du rhône-Vacqueyras-Cuvée Doucinello 38€" > Côtes du rhône-Vacqueyras-Cuvée Doucinello
                                                    </div>
                                                    <div class="col-xs-3">38€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Côtes du rouillons-les sorcières 32€" > Côtes du rouillons-les sorcières
                                                    </div>
                                                    <div class="col-xs-3">32€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Crozes hermitage-les hauts granites 32€" > Crozes hermitage-les hauts granites
                                                    </div>
                                                    <div class="col-xs-3">32€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Fleurie 42€" > Fleurie
                                                    </div>
                                                    <div class="col-xs-3">42€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Fougères -Clos fantine 32€" > Fougères -Clos fantine
                                                    </div>
                                                    <div class="col-xs-3">32€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Gigondas Daumen 43€" > Gigondas Daumen
                                                    </div>
                                                    <div class="col-xs-3">43€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Morgon 30€" > Morgon
                                                    </div>
                                                    <div class="col-xs-3">30€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Morgon-côte de py 36€" > Morgon-côte de py
                                                    </div>
                                                    <div class="col-xs-3">36€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Rasteau 30€" > Rasteau
                                                    </div>
                                                    <div class="col-xs-3">30€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Saint nicolas de Bourgueil-l’espréssion 28€" > Saint nicolas de Bourgueil-l’espréssion
                                                    </div>
                                                    <div class="col-xs-3">28€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Sancerre-Domaine de saint-pierre 32€" > Sancerre-Domaine de saint-pierre
                                                    </div>
                                                    <div class="col-xs-3">32€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Vin de pays de l’Hérault 130€" > Vin de pays de l’Hérault
                                                    </div>
                                                    <div class="col-xs-3">130€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Vin de pays de l’Hérault-causse toujours 28€" > Vin de pays de l’Hérault-causse toujours
                                                    </div>
                                                    <div class="col-xs-3">28€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rioja : Vin de provende-château simone 60€" > Vin de provende-château simone
                                                    </div>
                                                    <div class="col-xs-3">60€</div>
                                                </div>
                                                <hr>

                                                </br>
                                                <p>Blancos</p>
                                                </br>

                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Blanco : Bandol 32€" > Bandol
                                                    </div>
                                                    <div class="col-xs-3">32€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Blanco : Bordeaux-domaine de l’alliance-déclinaison 43€" > Bordeaux-domaine de l’alliance-déclinaison
                                                    </div>
                                                    <div class="col-xs-3">43€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Blanco : Bourgogne-chardonnay 32€" > Bourgogne-chardonnay
                                                    </div>
                                                    <div class="col-xs-3">32€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Blanco : Bourgogne-les sétilles 34€" > Bourgogne-les sétilles
                                                    </div>
                                                    <div class="col-xs-3">34€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Blanco : Bourgogne-meursault-les tillets 59€" > Bourgogne-meursault-les tillets
                                                    </div>
                                                    <div class="col-xs-3">59€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Blanco : côtes du lot-petites merveilles 28€" > côtes du lot-petites merveilles
                                                    </div>
                                                    <div class="col-xs-3">28€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Blanco : Petit chablis 28€" > Petit chablis
                                                    </div>
                                                    <div class="col-xs-3">28€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Blanco : Sancerre-Domaine de saint-pierre 30€" > Sancerre-Domaine de saint-pierre
                                                    </div>
                                                    <div class="col-xs-3">30€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Blanco : Sancerre-nuance 43€" > Sancerre-nuance
                                                    </div>
                                                    <div class="col-xs-3">43€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Blanco : vin de provence-château simone 60€" > vin de provence-château simone
                                                    </div>
                                                    <div class="col-xs-3">60€</div>
                                                </div>
                                                <hr>
                                                </br>
                                                <p>Rosados</p>
                                                </br>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rosado : Bandol 30€" > Bandol
                                                    </div>
                                                    <div class="col-xs-3">30€</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <input type="checkbox" class="elementoPedido" name="dinner" value="Vino Rosado : Chinon 27€" > Chinon
                                                    </div>
                                                    <div class="col-xs-3">27€</div>
                                                </div>
                                                <hr>
                                            </form>                                               
                                        </div>
                                        <div class="post-content">                                           
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="bottompage">
                        <div class="bottomlink">
                            <a id="realizarPedido" data-toggle="modal" href="#" onclick="carrito()">
                                <span class="txtnext">
                                    <cufon id="cufonContacto5" class="cufon cufon-canvas" alt="Realizar ">
                                        <canvas></canvas>

                                        <cufontext>Realizar </cufontext>

                                    </cufon>

                                    <cufon id="cufonContacto6" class="cufon cufon-canvas" alt="Pedido">

                                        <canvas></canvas>

                                        <cufontext>Pedido</cufontext>
                                    </cufon>

                                </span>

                                <span class="bullenext"></span>
                            </a>
                        </div>
                    </footer>
                </div>








                <div id="homepage" class="modalCarrito contentbloc contact pager">
                    <form method="POST" role="form">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div>                
                            <h1 id="elegantshadow">Pedido</h1>
                            <p id="selecteds">Seleccionados : </p>
                            <textarea readonly name="pedido" id="estilotextarea"></textarea>
                        </div>
                        <div>
                            <h4 id="habit" align="center">Habitación: </h4>
                            <input type="text" name="habit" class="form-control" id="estilotextarea2">
                        </div>
                        <div class="btn-group" id="contenedorConvirmacion">
                            <button class="btn btn-danger" data-dismiss="modal" onclick="closeModal()"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                            <button type="submit" name="btnRestaurant" class="btn btn-primary">
                                <span class="glyphicon glyphicon-check"></span>Confirmar</button>
                        </div>

                    </form>
                </div>
























                <footer id="footer">
                    <p class="siteby">
                        <span class="copyright">Copyright &copy; 2017 . Grupo Visual</span> | 
                        <span id="lien_colorz">
                            <i>Site by</i> 
                            <a title="Colorz . Communication Interactive &amp; Créative" href="http://www.colorz.fr/" class="noasync" target="_blank">Matm</a>
                        </span>
                    </p>
                    <div class="followus">
                        <p class="labelfollow">Suivez-nous</p>
                        <ul>
                            <li class="twitter">
                                <a target="_blank" class="noasync" href="http://twitter.com">Twitter</a>
                            </li>
                            <li class="facebook">
                                <a target="_blank" class="noasync" href="http://www.facebook.com">Facebook</a>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>






        <ul class="bgslides">
                <li><img alt="" src="../images/restaurante.jpg"></li>    
        </ul>    


    </body>
</html>