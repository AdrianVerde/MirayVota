<?php
require_once('libs/ImageEditor.php');
$editor = new ImageEditor('pic.jpg');
$editor->fixResize(200, 200);
$editor->show();