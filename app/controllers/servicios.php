<?php

$servicio = $route->r[1];

$app->get_response('html','servicios.php',compact('servicio'));

?>