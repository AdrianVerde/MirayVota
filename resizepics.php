<?php
require_once('libs/wideimage/WideImage.php');
$logo = WideImage::load('pic.jpg');
$logo_resized = $logo->resize(200, 200);
$base = WideImage::load('square.png');
$result = $base->merge($logo_resized, 'center', 'center', 100);
$result->output('png', 5);
/* $resized->saveToFile("small.jpg"); */