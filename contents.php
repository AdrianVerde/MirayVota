<?php
function content_index(){
global $myv_host;
echo <<< EOT
<div class="container">
<center>
<!--  Carousel - consult the Twitter Bootstrap docs at
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="this-carousel-id" class="carousel slide carousel-fade presentation" style="max-width:555px;"><!-- class of slide for animation -->
  <div class="carousel-inner">
<div class="item active"><!-- class of active since it's the first item -->
      <img src="{$myv_host}img/p/mirayvota_Page_01.jpg" alt="" />
      <!-- <div class="carousel-caption">
        <p>Caption text here</p>
      </div> -->
    </div>
EOT;
for ($i = 2; $i <= 14; $i++) {
echo "<div class=\"item\">
      <img src=\"{$myv_host}img/p/mirayvota_Page_".substr("00" . $i, -2).".jpg\" alt=\"\" />
    </div>";
	}
echo <<< EOT
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->
</center>

        </div> <!-- /container -->
EOT;
}
function content_partidos(){
global $myv_host;
echo <<< EOT
<div class="container">
<div class="span12">
<div class="row">
  
  <div class="span1 aparty""><img src="{$myv_host}img/logos/psoe-200x200.png" /></div>
  <div class="span1 aparty"><img src="{$myv_host}img/logos/pp-200x200.png" /></div>
  <div class="span1 aparty"><img src="{$myv_host}img/logos/iu-200x200.png" /></div>
  <div class="span1 aparty"><img src="{$myv_host}img/logos/upyd-200x200.png" /></div>
</div>
<br />
	<div class="row">
	<div class="span1 aparty"><img src="{$myv_host}img/logos/upyd-200x200.png" /></div>
	<div class="span1 aparty"><img src="{$myv_host}img/logos/iu-200x200.png" /></div>
	<div class="span1 aparty"><img src="{$myv_host}img/logos/pp-200x200.png" /></div>
	<div class="span1 aparty"><img src="{$myv_host}img/logos/psoe-200x200.png" /></div>  
</div>

</div>
</div>
        </div> <!-- /container -->
EOT;
}
function content_promesas(){
global $myv_host;
echo <<< EOT
<div class="container">

<table class="table table-striped table-condensed">
	  <thead>
      <tr>
          <th>Partido</th>
          <th>Promesa</th>
          <th>Anunciada</th>
          <th>Estado</th>                                          
      </tr>
  </thead>   
  <tbody>
    <tr>
        <td>PP</td>
        <td>No subir el IVA</td>
        <td>2011/05/06</td>
        <td><span class="label label-important">Incumplida</span>
        </td>                                       
    </tr>
    <tr>
        <td>PSOE</td>
        <td>Permitir el aborto</td>
        <td>2009/07/09</td>
        <td><span class="label label-warning" rel="tooltip" title="Sólo si lo autoriza pikachu">Pendiente</span>
        </td>                                         
    </tr>
	<tr>
        <td>IU</td>
        <td>Legalizar la Marihuana</td>
        <td>2005/07/09</td>
        <td><span class="label label-success" rel="tooltip" title="They ♥ weed">Cumplida</span>
        </td>                                         
    </tr>  
	<tr>
        <td>UPyD</td>
        <td>Presidir españa</td>
        <td>2011/07/09</td>
        <td><span class="label label-warning" rel="tooltip" title="Sin éxito">Lo intentaron...</span>
        </td>                                         
    </tr>
  </tbody>
</table>

        </div> <!-- /container -->
EOT;
}

/* <legend><center><img src="{$myv_host}img/ojoysobre.png" /></center></legend> */
function content_about(){
global $myv_host;
echo <<< EOT
<div class="container">

<div id="about" class="row">
    <div class="span6">
      <center><img src="{$myv_host}img/ojoysobre.png" /></center>
      Según la mecánica cuántica, un material será transparente a cierta longitud de onda cuando en su esquema de niveles de energía no haya ninguna diferencia de energía que corresponda con esa longitud de onda. Así, el aire y el vidrio son transparentes, porque en sus esquemas de niveles de energía (o bandas de energía, respectivamente) no cabe ninguna diferencia de energía del orden de la luz visible. Sin embargo, sí que pueden absorber, por ejemplo, parte de la radiación infrarroja (las moléculas de agua y de dióxido de carbono absorben en el infrarrojo) o del ultravioleta (el vidrio bloquea parte del espectro ultravioleta).
    </div>
    <div class="span6">
        <center><img src="{$myv_host}img/pizarra.png" /></center>
			En matemáticas, lógica, ciencias de la computación y disciplinas relacionadas, un algoritmo (del griego y latín, dixit algorithmus y este a su vez del matemático persa Al-Juarismi1 ) es un conjunto preescrito de instrucciones o reglas bien definidas, ordenadas y finitas que permite realizar una actividad mediante pasos sucesivos que no generen dudas a quien deba realizar dicha actividad.2 Dados un estado inicial y una entrada, siguiendo los pasos sucesivos se llega a un estado final y se obtiene una solución. Los algoritmos son el objeto de estudio de la algoritmia.
        </div>
    </div>
</div>
        </div> <!-- /container -->
EOT;
}

function content_typical(){
/* global $myv_host; */
echo <<< EOT
<div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1>Hello, world!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
            </div>

            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
               </div>
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
            </div>

        </div> <!-- /container -->
EOT;
}
?>