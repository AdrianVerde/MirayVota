<?php
require_once('./headers.php');
require_once('./navs.php');
require_once('./contents.php');
require_once('./footers.php');
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$myv_host = URLBASE;

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
	case "details":
		//Complete registration
		reg_header();
        break;
	case "logout":
		//Log Out
		//Just if someday we plan to let users log in
        break;
	case "admin":
		//Admin
        echo "Admin Panel";
        break;
	default:
       echo "algo raro y extraño ha ocurrido...";
		}}else{
		nav_index();}
		}

//El contenido se muestra con la función content() que llama contenidos ubicados en "contents.php"
function content(){
global $critical_error, $critical_error_alert;
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
	case "details":
		//Complete registration
		details_content();
        break;
	case "logout":
		//Log Out
		//Just if someday we plan to let users log in
        break;
	case "admin":
		//Admin
        echo "Admin Panel";
        break;
	default:
       echo "algo raro y extraño ha ocurrido...";
		}}else{
		content_index();
		}
}

function footer(){
global $critical_error, $critical_error_alert;
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
	case "details":
		//Complete registration
		details_content();
        break;
	case "logout":
		//Log Out
		//Just if someday we plan to let users log in
        break;
	case "admin":
		//Admin
        echo "Admin Panel";
        break;
	default:
       echo "algo raro y extraño ha ocurrido...";
		}}else{
		footer_index();
		}
}
?>
<!DOCTYPE html>
<html class="no-js">

    <head>
	<?php get_header();?>
    </head>
    <body>


<?php nav(); ?>
<?php content(); ?>
<?php footer(); ?>

    </body>
</html>
