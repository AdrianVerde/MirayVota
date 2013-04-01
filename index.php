<?php
require_once('db/db-functions.php');

require_once('./headers.php');
require_once('./navs.php');
require_once('./contents.php');
require_once('./footers.php');

header('Content-Type: text/html; charset=UTF-8');

$myv_host = URLBASE;
$static_host = STATIC_HOST;

function get_header(){
if(isset($_GET['a'])){
switch ($_GET['a']) {
    case "partidos":
		//Lista de partidos ordenada por número de votos de forma predeterminada
		header_partidos();
        break;
	case "promesas":
		//Lista de promesas (topics)
		header_promesas();
        break;
	case "programas":
		//Lista de programas electorales
		header_programas();
        break;
	case "graficas":
		//Gráficas comparativas, herramienta inspirada en Google Trends
		header_graficas();
        break;
	case "about":
		//Información sobre los algoritmos que utilizamos para determinar los valores de las variables
		header_about();
        break;
	case "buscar":
		//Herramienta de búsqueda
		if(isset($_GET['b'])){echo "Query de búsqueda";}else{$_GET['b'] = null;};
        break;
	case "logout":
		//Log Out
		//Just if someday we plan to let users log in
        break;
	case "admin":
		//Admin
        echo "Admin Panel";
        break;
	case "conversor":
		//Conversor de imágenes
        header_conversor();
        break;
	default:
       echo "404... lol";
		}}else{
		header_index();}
}

function nav(){
if(isset($_GET['a'])){
switch ($_GET['a']) {
    case "partidos":
		//Lista de partidos ordenada por número de votos de forma predeterminada
		nav_partidos();
        break;
	case "promesas":
		//Lista de promesas (topics)
		nav_promesas();
        break;
	case "programas":
		//Lista de programas electorales
		nav_programas();
        break;
	case "graficas":
		//Gráficas comparativas, herramienta inspirada en Google Trends
		nav_graficas();
        break;
	case "about":
		//Información sobre los algoritmos que utilizamos para determinar los valores de las variables
		nav_about();
        break;
	case "buscar":
		//Herramienta de búsqueda
		if(isset($_GET['b'])){echo "Query de búsqueda";}else{$_GET['b'] = null;};
        break;
	case "logout":
		//Log Out
		//Just if someday we plan to let users log in
        break;
	case "admin":
		//Admin
        echo "Admin Panel";
        break;
	case "conversor":
		//Conversor de imágenes
        nav_conversor();
		break;
	default:
       echo "algo raro y extraño ha ocurrido en el selector de nav...";
		}}else{
		nav_index();}
		}

//El contenido se muestra con la función content() que llama contenidos ubicados en "contents.php"
function content(){
global $banana;
if(isset($_GET['a'])){
switch ($_GET['a']) {
    case "partidos":
		//Lista de partidos ordenada por número de votos de forma predeterminada
		content_partidos();
        break;
	case "promesas":
		//Lista de promesas (topics)
		content_promesas();
        break;
	case "programas":
		//Lista de programas electorales
		content_programas();
        break;
	case "graficas":
		//Gráficas comparativas, herramienta inspirada en Google Trends
		content_graficas();
        break;
	case "about":
		//Información sobre los algoritmos que utilizamos para determinar los valores de las variables
		content_about();
        break;
	case "buscar":
		//Herramienta de búsqueda
		if(isset($_GET['b'])){echo "Query de búsqueda";}else{$_GET['b'] = null;};
        break;
	case "logout":
		//Log Out
		//Just if someday we plan to let users log in
        break;
	case "admin":
		//Admin
        echo "Admin Panel";
        break;
	case "conversor":
		//Conversor de imágenes
        content_conversor();
		break;
	default:
       echo "algo raro y extraño ha ocurrido en el selector de content...";
		}}else{
		content_index();
		}
}

function footer(){
global $adrian_is_sexy;
if(isset($_GET['a'])){
switch ($_GET['a']) {
    case "partidos":
		//Lista de partidos ordenada por número de votos de forma predeterminada
		footer_partidos();
        break;
	case "promesas":
		//Lista de promesas (topics)
		footer_promesas();
        break;
	case "programas":
		//Lista de programas electorales
		footer_programas();
        break;
	case "graficas":
		//Gráficas comparativas, herramienta inspirada en Google Trends
		footer_graficas();
        break;
	case "about":
		//Información sobre los algoritmos que utilizamos para determinar los valores de las variables
		footer_about();
        break;
	case "buscar":
		//Herramienta de búsqueda
		if(isset($_GET['b'])){echo "Query de búsqueda";}else{$_GET['b'] = null;};
        break;
	case "logout":
		//Log Out
		//Just if someday we plan to let users log in
        break;
	case "admin":
		//Admin
        echo "Admin Panel";
        break;
	case "conversor":
		//Conversor de imágenes
        footer_conversor();
		break;
	default:
       echo "algo raro y extraño ha ocurrido en el selector de footer...";
		}}else{
		footer_index();
		}
}
function just_in_case(){
if(isset($_GET['a'])){
switch ($_GET['a']) {
	case "conversor":
		//Conversor de imágenes
        echo "<body onload=\"new uploader('drop', 'status', '/uploader.php', 'list');\">";
	default:
       echo "<body>";
		}}else{
		echo "<body>";
		}
}

?>
<!DOCTYPE html>
<html class="no-js">

    <head>
	<?php get_header();?>
    </head>
	<?php just_in_case(); //<-- I hate this function! ?>
	
<?php nav(); ?>
<?php content(); ?>
<?php footer(); ?>

    </body>
</html>
