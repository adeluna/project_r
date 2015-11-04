<?php

$futurence = array('erick','joel','marcos','andrea','jorge','yo','lili');

$app->get_response('html','inicio.php',array('view'=>'inicio', 'menu'=>'inicio','personas' => $futurence));

$view = 'inicio';
$menu = 'menu';
$personas = $futurence;

//$app->get_response('html','inicio.php',compact('view','menu','personas'));


?>