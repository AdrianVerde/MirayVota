<?php
function nav_index(){
global $myv_host;
echo <<< EOT
				<center>				
                    <a class="myvlogo" href="{$myv_host}">Mira & Vota</a>
				</center>
EOT;
}
function nav_partidos(){
global $myv_host;
echo <<< EOT
				<center>				
                <a class="myvlogo" href="{$myv_host}">Mira & Vota</a>
				</center>
EOT;
}
function nav_promesas(){
global $myv_host;
echo <<< EOT
				<center>				
                    <a class="myvlogo" href="{$myv_host}">Mira & Vota</a>
				</center>
				<div class="container">
<div id="about" class="row">
    <div class="span6">
      <ul class="nav nav-tabs">
				<li class="toplinks"><a class="piclinktop sanidadpic" href="{$myv_host}partidos">Sanidad</a></li>
				<li class="toplinks"><a class="piclinktop educacionpic" href="{$myv_host}promesas">Educación</a></li>
				<li class="last toplinks"><a class="piclinktop exteriorpic" href="{$myv_host}about">About</a></li>
				</ul>
				<ul class="nav nav-tabs secondrow">
				<li class="toplinks"><a class="piclinktop empleopic" href="{$myv_host}partidos">Sanidad</a></li>
				<li class="toplinks"><a class="piclinktop sociedadpic" href="{$myv_host}promesas">Educación</a></li>
				<li class="last toplinks"><a class="piclinktop economiapic" href="{$myv_host}about">About</a></li>
				</ul>
    </div>
    <div class="span6">
        <ul class="nav nav-tabs">
				<li class="topfilter"><a class="" href="{$myv_host}partidos">Cumplidas</a></li>
				<li class="topfilter"><a class="" href="{$myv_host}promesas">Incumplidas</a></li>
				<li class="topfilter"><a class="" href="{$myv_host}promesas">Por fecha</a></li>
				<li class="last topfilter"><a class="" href="{$myv_host}about">Por relevancia</a></li>
				</ul>
				<ul class="nav nav-tabs">
				<li class="last toplinks searchfilter">Palabras clave <input class="input-big search-query focused" id="search" type="text" placeholder="hospitales..." name="search">
				<button type="submit" class="btn btn-inverse">Search</button></li>
				</ul>
        </div>
    </div>
</div>
        </div> <!-- /container -->
EOT;
}
function nav_about(){
global $myv_host;
echo <<< EOT
				<center>				
                    <a class="myvlogo" href="{$myv_host}">Mira & Vota</a>
				</center>
EOT;
}
?>