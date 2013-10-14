<?php
$idevices = "<link rel=\"apple-touch-icon-precomposed\" href=\"touch-icon-iphone.png\" />
<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"touch-icon-ipad.png\" />
<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"touch-icon-iphone-retina.png\" />
<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"touch-icon-ipad-retina.png\" />";
function header_index(){
global $myv_host, $idevices;
require_once("./headers/header_index.php");
}
function header_partidos(){
global $myv_host, $idevices;
require_once("./headers/header_partidos.php");
}
function header_promesas(){
global $myv_host, $idevices;
require_once("./headers/header_promesas.php");
}
function header_about(){
header_partidos();
}

function header_conversor(){
require_once("./headers/header_conversor.php");
}
?>