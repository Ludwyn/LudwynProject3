<?php


?>
<!DOCTYPE html>
<html>
<head>

<title>Aplicacion Jquery Mobile</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="stylesheet"href="css/jquery.mobile-1.4.5.css" />
<script type="text/javascript"src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript"src="js/jquery.mobile-1.4.5.js"></script>
</head>
<body>
<div data-role="page" id="pagina1">
<div data-role="header">Paises Latinoamericanos</div>
<div data-role="content"><ul data-role="listview">
<li><a href="#wperu"><img src="Imagenes/peru.png" /><h3>Perú</h3> <p>Perú es una pais</p></a> </li>
<li><a href="#wbrasil"><img src="Imagenes/brazil.png" /> <h3>Brasil</h3> <p>Brasil es un pais</p></a></li>
<li><a href="#wargentina"><img src="Imagenes/argentina.png" /> <h3>Argentina</h3><p>Argentina es un pais</p></a></li>
</ul></div>
<div data-role="footer">Paises Latinoamericanos</div>
<a href="salir.php">Salir</a>
</div>

<div data-role="page" id="wperu">
<div data-role="header">Perú</div>
<div data-role="content"><p>El Perú (en quechua y en aimara: Piruw), oficialmente la República del Perú, es un país soberano del oeste de América del Sur. El océano Pacífico bordea su costa y limita con Ecuador y Colombia al norte, Brasil al este, y Bolivia y Chile al sureste. Su territorio se compone de diversos paisajes: los valles, las mesetas y las altas cumbres de los Andes se despliegan al oeste hacia la costa desértica y al este hacia la Amazonia. Es uno de los países con mayor diversidad biológica y mayores recursos minerales del mundo.</p> <a href="#pagina1" data-transition="flip">Atras</a></div>
<div data-role="footer">Perú</div>
<img src="Imagenes/peru.png" />
</div>

<div data-role="page" id="wbrasil">
<div data-role="header">Brasil</div>
<div data-role="content"><p>Brasil, oficialmente República Federativa de Brasil (en portugués: República Federativa do Brasil), es un país soberano de América del Sur que comprende la mitad oriental del subcontinente y algunos grupos de pequeñas islas en el océano Atlántico.</p> <a href="#pagina1" data-transition="flip">Atras</a></div>
<div data-role="footer">Brasil</div>
<img src="Imagenes/brazil.png" />
</div>

<div data-role="page" id="wargentina">
<div data-role="header">Argentina</div>
<div data-role="content"><p>La República Argentina, conocida simplemente como Argentina,n 1​ es un país soberano de América del Sur, ubicado en el extremo sur y sudeste de dicho subcontinente. Adopta la forma de gobierno republicana, representativa y federal.</p><a href="#pagina1" data-transition="flip">Atras</a></div>
<div data-role="footer">Argentina</div>
<img src="Imagenes/argentina.png" /> 
</div>



</body>
</html>