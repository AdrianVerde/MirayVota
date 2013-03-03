<?php
function header_index(){
echo <<< EOT
		<meta charset="utf-8">

		<title>Mira & Vota</title>
		<link rel="stylesheet" href="{$myv_host}css/kontext.css">
		<link rel="stylesheet" href="{$myv_host}css/demo.css">
EOT;
}
function header_partidos(){
echo <<< EOT
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
EOT;
}
?>