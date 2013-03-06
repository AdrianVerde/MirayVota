<?php
function header_index(){
global $myv_host;
echo <<< EOT
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="{$myv_host}css/bootstrap.min.css">
        <style>
            body {
                padding-top: 10px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="{$myv_host}css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="{$myv_host}css/main.css">

        <script src="{$myv_host}js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
EOT;
}
function header_partidos(){
global $myv_host;
echo <<< EOT
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="{$myv_host}css/bootstrap.min.css">
        <style>
            body {
                padding-top: 5px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="{$myv_host}css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="{$myv_host}css/main.css">

        <script src="{$myv_host}js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
EOT;
}
?>