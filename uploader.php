<?php
require_once('libs/wideimage/WideImage.php');
// Destination folder for downloaded files
$upload_folder = './img/uploads';

// If the browser supports sendAsBinary () can use the array $ _FILES
if(count($_FILES)>0) {
		
	if( move_uploaded_file( $_FILES['upload']['tmp_name'] , $upload_folder.'/'.$_FILES['upload']['name'] ) ) {
		$logo = WideImage::load($upload_folder.'/'.$_FILES['upload']['name']);
		$logo_resized = $logo->resize(200, 200);
		$base = WideImage::load('square.png');
		$content = $base->merge($logo_resized, 'center', 'center', 100);
		$filename = $_FILES['upload']['name'];
		$filename = substr($filename, 0, -3)."png"; 
		$content->saveToFile($upload_folder.'/'.$filename);
		$content->saveToFile($upload_folder.'/'.$_FILES['upload']['name']);
		echo 'done';
	}
	exit();
} else if(isset($_GET['up'])) {
	// If the browser does not support sendAsBinary ()
	if(isset($_GET['base64'])) {
		$content = base64_decode(file_get_contents('php://input'));
	} else {
		$content = file_get_contents('php://input');
	}

	$headers = getallheaders();
	$headers = array_change_key_case($headers, CASE_UPPER);
//$content = base64_encode($content);
$logo = WideImage::load($content);
$logo_resized = $logo->resize(200, 200);
$base = WideImage::load('square.png');
$content = $base->merge($logo_resized, 'center', 'center', 100);

	if(file_put_contents($upload_folder.'/'.$headers['UP-FILENAME'], $content)) {
		echo 'done';
	}
	exit();
}
?>