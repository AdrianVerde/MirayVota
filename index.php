<?php
require_once('./headers.php');
require_once('./navs.php');
require_once('./contents.php');
require_once('./footers.php');
$cpe_host="http://mirayvota.com/";

function get_header(){
//lol at the name of the function xD
if(isset($_GET['a'])){
switch ($_GET['a']) {
    case "partidos":
		//Login page
		header_partidos();
        break;
	case "promesas":
		//registry page
		header_promesas();
        break;
	case "programas":
		//registry page
		header_programas();
        break;
	case "graficas":
		//registry page
		header_graficas();
        break;
	case "about":
		//registry page
		header_about();
        break;
	case "casting":
		//Casting definer for permalinks
		if(isset($_GET['b'])){echo "Casting en cuestión";}else{$_GET['b'] = null;};
        break;
	case "details":
		//Complete registration
		reg_header();
        break;
	case "logout":
		//Log Out
		/* setcookie("id", "x", 1);
		setcookie("sexyhash", "hashyeah", 1); */
        break;
	case 3:
		//Admin
        echo "Hola Admin";
        break;
	default:
       echo "algo raro y extraño ha ocurrido...";
		}}else{
		/* get_index_header(); */}
}
		
function nav(){
//lol at the name of the function xD
if(isset($_GET['a'])){
switch ($_GET['a']) {
    case "partidos":
		//Login page
		nav_partidos();
        break;
	case "promesas":
		//registry page
		nav_promesas();
        break;
	case "programas":
		//registry page
		nav_programas();
        break;
	case "graficas":
		//registry page
		nav_graficas();
        break;
	case "about":
		//registry page
		nav_about();
        break;
	case "casting":
		//Casting definer for permalinks
		if(isset($_GET['b'])){echo "Casting en cuestión";}else{$_GET['b'] = null;};
        break;
	case "details":
		//Complete registration
		reg_header();
        break;
	case "logout":
		//Log Out
		/* setcookie("id", "x", 1);
		setcookie("sexyhash", "hashyeah", 1); */
        break;
	case 3:
		//Admin
        echo "Hola Admin";
        break;
	default:
       echo "algo raro y extraño ha ocurrido...";
		}}else{
		/* get_index_header(); */}
		}

//El contenido se muestra con la función content() que llama contenidos ubicados en "contents.php"
function content(){
global $critical_error, $critical_error_alert;
if(isset($_GET['a'])){
switch ($_GET['a']) {
    case "partidos":
		//Normal User
		content_partidos();
        break;
	case "promesas":
		//Moderator
		content_promesas();
        break;
	case "programas":
		//registry page
		content_programas();
        break;
	case "graficas":
		//registry page
		content_graficas();
        break;
	case "about":
		//registry page
		content_about();
        break;
	case "casting":
		//Moderator
		if(isset($_GET['b'])){echo "Casting en cuestión";}else{$_GET['b'] = null;};
        break;
	case "details":
		//Complete registration
		details_content();
        break;
	case "logout":
		//Log Out
		
        break;
	case 3:
		//Admin
        echo "Hola Admin";
        break;
	default:
       echo "algo raro y extraño ha ocurrido...";
		}}else{
		if (!isset($critical_error)){
		index_scripts_footer();}else{
		echo $critical_error_alert;}
		}
}

function footer(){
global $critical_error, $critical_error_alert;
if(isset($_GET['a'])){
switch ($_GET['a']) {
    case "partidos":
		//Normal User
		footer_partidos();
        break;
	case "promesas":
		//Moderator
		footer_promesas();
        break;
	case "programas":
		//registry page
		footer_programas();
        break;
	case "graficas":
		//registry page
		footer_graficas();
        break;
	case "about":
		//registry page
		footer_about();
        break;
	case "casting":
		//Moderator
		if(isset($_GET['b'])){echo "Casting en cuestión";}else{$_GET['b'] = null;};
        break;
	case "details":
		//Complete registration
		details_content();
        break;
	case "logout":
		//Log Out
		
        break;
	case 3:
		//Admin
        echo "Hola Admin";
        break;
	default:
       echo "algo raro y extraño ha ocurrido...";
		}}else{
		if (!isset($critical_error)){
		index_scripts_footer();}else{
		echo $critical_error_alert;}
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
