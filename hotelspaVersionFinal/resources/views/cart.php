<html lang="es" class="js cufon-active cufon-ready" dir="ltr" slick-uniqueid="1">
    <head>
        <meta charset="UTF-8">
        <title>Restaurante</title>    
                    
        <script src="../js/perfjs.js" type="text/javascript">  </script>
        <script src="../js/cartjs.js" type="text/javascript">  </script>  

        <link href="../css/styleRest.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/styleCart.css" rel="stylesheet" type="text/css" media="all" />        
     
    
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
                            <li id="restaurante" class=" restaurant"  onclick=change('soirtog','soirel')>
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

                            <li id="carta" class=" lacarte active">
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
                            <li id="reserva" class=" evenement">
                                <a href="./reserva">
                                    <span class="txt">
                                        <cufon id="cufon4" class="cufon cufon-canvas cufonMenu" alt="Reserva">
                                            
                                            <canvas id="canva4" class="canvaMenu"></canvas>

                                            <cufontext>Reserva</cufontext>
                                        </cufon>
                                    </span>

                                    <span class="img imgMenu"></span>
                                </a>
                            </li>
                            <li id="contacto" class="contact">
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
                <div id="homepage" class="contentbloc la-carte pager">
        
                    <header class="toppage">
                        <span class="iconpage">La carte</span>
                    </header>
                    <div class="contentpage">
                            
                        <div class="txtcontentpage">
                            
                            <div class="scroller">
                                <div class="scrollercontent">
                                    <span class="scrollerhand"></span>
                                </div>
                            </div>
                            
                            <div class="bloctxtpage titletop cartetitle">
                                <h2 class="bigtitle">
                                    <cufon id="cufon6cart" class="cufon cufon-canvas cufons" alt="La ">
                                        <canvas></canvas>

                                        <cufontext>La </cufontext>
                                    </cufon>

                                    <cufon id="cufon7cart" class="cufon cufon-canvas cufons" alt="Carta">
                                        <canvas></canvas>

                                        <cufontext>Carta</cufontext>
                                    </cufon>
                                </h2>
                            </div>
                            <div class="scrolltxt cartecontent">
                                <div class="scrolltxtabs">
                                    <div class="togcarte">
                                        <ul>
                                            <li class="miditog active" id="miditog" onclick=change('miditog','midiel')>
                                                <span>Menu</span>
                                            </li>
                                            <li class="soirtog" id="soirtog" onclick=change('soirtog','soirel')>
                                                <span>Platos</span>
                                            </li>
                                            <li class="vinstog" id="vinstog" onclick=change('vinstog','vinsel')>
                                                <span>Vinos</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="elementscarte">
                                        <div class="elementcarte midiel" id="midiel">
                                            <div class="topmidi">
                                                <ul>
                                                    <li>
                                                        <span class="label">Entrante uo Plato + Postre</span> 
                                                        <span class="price">16€</span>
                                                    </li>
                                                    <li>
                                                        <span class="label">Entrante + Plato + Postre</span> 
                                                        <span class="price">17,50€</span>
                                                    </li>
                                                    <li>
                                                        <span class="label">Una selección de vinos por copa</span> 
                                                        <span class="price">de 5 à 8€</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="titlecemidi">Ce midi</h3>
                                            <div class="carterelative">
                                                <div class="carteabsolute"></div>
                                            </div>
                                        </div>
                                        <div class="elementcarte soirel" id="soirel">
                                            <div class="topsoir">
                                                <p>
                                                    <span class="titleplat">Entrante + Plato + Postre</span> 
                                                    <span class="price">32€</span>
                                                </p>
                                                <p>
                                                    <span class="titleplat">Entrante uo Plato + Postre</span> 
                                                    <span class="price">28€</span>
                                                </p>
                                            </div>
                                            
                                            <div class="itemmenu listplats itemwithpuce">
                                                <h4 class="dotback">
                                                    <cufon id="cufon8cart" class="cufon cufon-canvas cufons" alt="Los ">
                                                        <canvas></canvas>

                                                        <cufontext>Los </cufontext>
                                                    </cufon>
                                                    <cufon id="cufon9cart" class="cufon cufon-canvas cufons" alt="Entrantes">
                                                        <canvas></canvas>
                                                        <cufontext>Entrantes</cufontext>
                                                    </cufon>
                                                </h4>

                                                <ul>
                                                    <li> Placa de salchichas de la region con mantequilla salada </li>
                                                    <li> Medley espárragos y panceta, huevo cocido y hojas de espinaca</li>
                                                    <li> tarrina Casa de campo con pimiento verde, pimiento guisados </li>
                                                    <li> Monza pesto de hierbas marinadas, tomate seco y brioche </li>
                                                    <li> atún Minuto balsámico, puré de berenjenas y verduras + € 2 </li>
                                                    <li> Ensalada con crujiente de verduras, gambas y cilantro </li>
                                                </ul>                                
                                            </div>
                                    
                                            <div class="itemmenu listplats itemwithpuce">
                                                <h4 class="dotback">
                                                    <cufon id="cufon10cart" class="cufon cufon-canvas cufons" alt="Los ">
                                                        <canvas></canvas>
                                                        <cufontext>Los </cufontext>
                                                    </cufon>

                                                    <cufon id="cufon11cart" class="cufon cufon-canvas cufons" alt="Platos">
                                                        <canvas width="48" height="15"></canvas>
                                                        <cufontext>Platos</cufontext>
                                                    </cufon>
                                                </h4>

                                                <ul>
                                                    <li> Pan-frito con verduras, queso parmesano rallado y cayó setas </li>
                                                    <li> pulpo a la parrilla de Galicia, chorizo ​​y chips de albahaca </li>
                                                    <li> tartar de ternera con curry verde, Charlotte y mezclum </li>
                                                    <li> Pescado del Dia </li>
                                                    <li> cerdo a la plancha, tomates y longanisa </li>
                                                    <li> Carne de vaca Pedazo de 300gr para el New Yorker, lechuga fresca y miel mostaza + 3 € </li>
                                                </ul>                                
                                            </div>
                                    
                                            <div class="itemmenu listplats">
                                                <h4 class="dotback">
                                                    <cufon id="cufon12cart" class="cufon cufon-canvas cufons" alt="Los ">
                                                        <canvas></canvas>

                                                        <cufontext>Los </cufontext>

                                                    </cufon>

                                                    <cufon id="cufon13cart" class="cufon cufon-canvas cufons" alt="Postres">
                                                        <canvas width="74" height="15"></canvas>

                                                        <cufontext>Postres</cufontext>
                                                    </cufon>
                                                </h4>
                                                <ul>
                                                    <li> Tarta manzana, caramelo de mantequilla salada + € 2 </li>
                                                    <li> Caramia casa chantilly de chocolate </li>
                                                    <li> Volcán Ardèchois </li>
                                                    <li> ron Baba, fruta confitada y azotado + € 2 </li>
                                                    <li> Postre del día </li>
                                                    <li> Los quesos añejos </li>
                                                </ul>                                
                                            </div>                                
                                        </div>
                                        <div class="elementcarte vinsel" id="vinsel">
                                            <div class="itemmenu listvin">
                                                <h4 class="dotback">
                                                    <cufon id="cufon14cart" class="cufon cufon-canvas cufons" alt="Vinos ">
                                                        <canvas></canvas>

                                                        <cufontext>Vinos </cufontext>
                                                    </cufon>

                                                    <cufon id="cufon15cart" class="cufon cufon-canvas cufons" alt="Tinto">
                                                        <canvas width="54" height="15"></canvas>
                                                        <cufontext>Tinto</cufontext>
                                                    </cufon>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <p class="titlevin">Bandol-château Sainte Anne</p>
                                                        <p class="anneevin">2009</p>
                                                        <p class="prixvin">45€</p>
                                                        <p class="domainevin">Marquis dutheil de la rochére</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bandol-Domaine Dupuy de Lôme</p>
                                                        <p class="anneevin">2010</p>
                                                        <p class="prixvin">30€</p>
                                                        <p class="domainevin">Famille Cossé et perouse</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bergerac-Château larchère bio</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">27€</p>
                                                        <p class="domainevin">Thierry Baudry</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bordeaux-côtes de bourg-château nodeau</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">28€</p>
                                                        <p class="domainevin">P.H et Ferrer</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bordeaux-côtes de francs-Château le puy</p>
                                                        <p class="anneevin">2010</p>
                                                        <p class="prixvin">32€</p>
                                                        <p class="domainevin">J-P Amoureau</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bordeaux-ile de Patiras</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">27€</p>
                                                        <p class="domainevin">Thierry vielet</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bourgogne-aloxe corton-le suchot</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">69€</p>
                                                        <p class="domainevin">Simon Bize et fils</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bourgogne-Auxey duressey</p>
                                                        <p class="anneevin">2010</p>
                                                        <p class="prixvin">42€</p>
                                                        <p class="domainevin">Pierre Matrot</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bourgogne-cuvée margot</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">30€</p>
                                                        <p class="domainevin">Olivier Leflaive</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bourgogne-Maranges vieilles vignes</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">36€</p>
                                                        <p class="domainevin">Thierry et Pascale matrot</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bourgogne-pernand vergelesses</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">42€</p>
                                                        <p class="domainevin">Domaine Pavelot</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Cahors-Clos marguerite massault</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">32€</p>
                                                        <p class="domainevin">Alain dominique Perrin</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Carignan-vieilles vignes-L’argentier</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">32€</p>
                                                        <p class="domainevin">élisabeth et françois Jourdan </p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Cheverny-val de loire bio</p>
                                                        <p class="anneevin">2013</p>
                                                        <p class="prixvin">28€</p>
                                                        <p class="domainevin">Hervé villemade</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Costières de nîmes non filtré</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">27€</p>
                                                        <p class="domainevin">Domaine de Périlliére</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Costiéres de Nîmes-les terrasses d’Hortense</p>
                                                        <p class="anneevin">2010</p>
                                                        <p class="prixvin">32€</p>
                                                        <p class="domainevin">Domaine Renouard</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Coteaux de l’Ardèche-cuvée Ferdinand</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">25€</p>
                                                        <p class="domainevin">Mas d'Intras</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Coteaux de l’Ardèche-Merlot</p>
                                                        <p class="anneevin">2013</p>
                                                        <p class="prixvin">25€</p>
                                                        <p class="domainevin">Mas d'Intras</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Coteaux de l’Ardèche-trace négre</p>
                                                        <p class="anneevin">2013</p>
                                                        <p class="prixvin">25€</p>
                                                        <p class="domainevin">Mas d'Intras</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Côtes du rhône-cairanne</p>
                                                        <p class="anneevin">2013</p>
                                                        <p class="prixvin">32€</p>
                                                        <p class="domainevin">Domaine Richaud</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Côtes du rhône-La gerbaude</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">28€</p>
                                                        <p class="domainevin">Domaine alary</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Côtes du rhône-lieu dit Clavin</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">37€</p>
                                                        <p class="domainevin">Domaine de la vieille julienne</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Côtes du rhône-Sierra du sud</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">38€</p>
                                                        <p class="domainevin">Domaine Gramenon-Aubery laurent</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Côtes du rhône-Terras Vitis non filtré</p>
                                                        <p class="anneevin">2013</p>
                                                        <p class="prixvin">25€</p>
                                                        <p class="domainevin">cave des vignerons Ardéchois d'estezargues</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Côtes du rhône-Vacqueyras-Cuvée Doucinello</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">38€</p>
                                                        <p class="domainevin">Domaine le sang des cailloux</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Côtes du rouillons-les sorcières</p>
                                                        <p class="anneevin">2013</p>
                                                        <p class="prixvin">32€</p>
                                                        <p class="domainevin">Le clos des fées-hervé Bizeul</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Crozes hermitage-les hauts granites</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">32€</p>
                                                        <p class="domainevin">J.Boutin</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Fleurie</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">42€</p>
                                                        <p class="domainevin">Jean Foillard</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Fougères -Clos fantine</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">32€</p>
                                                        <p class="domainevin">Carole-olivier-corinne Andrieu</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Gigondas Daumen</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">43€</p>
                                                        <p class="domainevin">Jean Paul Daumen</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Morgon</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">30€</p>
                                                        <p class="domainevin">Jean Foillard</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Morgon-côte de py</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">36€</p>
                                                        <p class="domainevin">Jean Foillard</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Rasteau</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">30€</p>
                                                        <p class="domainevin">Domaine Wilfried</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Saint nicolas de Bourgueil-l’espréssion</p>
                                                        <p class="anneevin">2013</p>
                                                        <p class="prixvin">28€</p>
                                                        <p class="domainevin">Joêl Taluau</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Sancerre-Domaine de saint-pierre</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">32€</p>
                                                        <p class="domainevin">Pierre Prieur et fils</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Vin de pays de l’Hérault</p>
                                                        <p class="anneevin">2006</p>
                                                        <p class="prixvin">130€</p>
                                                        <p class="domainevin">La grange des pères</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Vin de pays de l’hérault</p>
                                                        <p class="anneevin">2007</p>
                                                        <p class="prixvin">120€</p>
                                                        <p class="domainevin">la grange des pères</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">vin de pays de l’Hérault</p>
                                                        <p class="anneevin">2008</p>
                                                        <p class="prixvin">110€</p>
                                                        <p class="domainevin">la grange des pères</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Vin de pays de l’Hérault-causse toujours</p>
                                                        <p class="anneevin">2010</p>
                                                        <p class="prixvin">28€</p>
                                                        <p class="domainevin">Domaine Ribiera</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Vin de provende-château simone</p>
                                                        <p class="anneevin">2008</p>
                                                        <p class="prixvin">60€</p>
                                                        <p class="domainevin">Palette-Meyreuil</p>
                                                    </li>
                                                </ul>
                                                <h4 class="dotback">
                                                    <cufon id="cufon16cart" class="cufon cufon-canvas cufons" alt="Vinos ">
                                                        <canvas width="38" height="15"></canvas>

                                                        <cufontext>Vinos </cufontext>
                                                    </cufon>

                                                    <cufon id="cufon17cart" class="cufon cufon-canvas cufons" alt="blancos" >
                                                        <canvas width="51" height="15"></canvas>
                                                        <cufontext>blancos</cufontext>
                                                    </cufon>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <p class="titlevin">Bandol</p>
                                                        <p class="anneevin">2013</p>
                                                        <p class="prixvin">32€</p>
                                                        <p class="domainevin">Domaine dupuy de lôme</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bordeaux-domaine de l’alliance-déclinaison</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">43€</p>
                                                        <p class="domainevin">Valérie et daniel Alibrand</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bourgogne-chardonnay</p>
                                                        <p class="anneevin">2011</p>
                                                        <p class="prixvin">32€</p>
                                                        <p class="domainevin">thierry et  pascale Matrot</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bourgogne-les sétilles</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">34€</p>
                                                        <p class="domainevin">olivier Leflaive</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Bourgogne-meursault-les tillets</p>
                                                        <p class="anneevin">2009</p>
                                                        <p class="prixvin">59€</p>
                                                        <p class="domainevin">Domaine jobard-morey</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">côtes du lot-petites merveilles</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">28€</p>
                                                        <p class="domainevin">Alain Dominique  Perrin</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Petit chablis</p>
                                                        <p class="anneevin">2013</p>
                                                        <p class="prixvin">28€</p>
                                                        <p class="domainevin">gaec de oliveira lecestre</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Sancerre-Domaine de saint-pierre</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">30€</p>
                                                        <p class="domainevin">Pierre prieur et fils</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Sancerre-nuance</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">43€</p>
                                                        <p class="domainevin">Vincent pinard</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">vin de provence-château simone</p>
                                                        <p class="anneevin">2009</p>
                                                        <p class="prixvin">60€</p>
                                                        <p class="domainevin">palette-mareuil</p>
                                                    </li>
                                                </ul>
                                                <h4 class="dotback">
                                                    <cufon id="cufon18cart" class="cufon cufon-canvas cufons" alt="Vinos ">
                                                        <canvas width="38" height="15"></canvas>

                                                        <cufontext>Vinos </cufontext>
                                                    </cufon>

                                                    <cufon id="cufon19cart" class="cufon cufon-canvas cufons" alt="Rosa">
                                                        <canvas width="43" height="15"></canvas>

                                                        <cufontext>Rosa</cufontext>
                                                    </cufon>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <p class="titlevin">Bandol</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">30€</p>
                                                        <p class="domainevin">Domaine dupuy de lôme</p>
                                                    </li>
                                                    <li>
                                                        <p class="titlevin">Chinon</p>
                                                        <p class="anneevin">2012</p>
                                                        <p class="prixvin">28€</p>
                                                        <p class="domainevin">pierre et bertrand couly</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>
                    <footer class="bottompage">
                        <div class="bottomlink">
                            <a href="#">
                                <span class="txtnext">
                                    <cufon id="cufonContacto5" class="cufon cufon-canvas" alt="A ">
                                        <canvas></canvas>

                                        <cufontext>A </cufontext>

                                    </cufon>

                                    <cufon id="cufonContacto6" class="cufon cufon-canvas" alt="Reservas">

                                        <canvas width="88" height="14">
                                            
                                        </canvas>

                                        <cufontext>Reservas</cufontext>
                                    </cufon>

                                </span>

                                <span class="bullenext"></span>
                            </a>
                        </div>
                    </footer>
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
            <li>
                <img id="imagenCart" alt="" src="../images/restaurante.jpg">
            </li>        
        </ul>

    </body>
</html>