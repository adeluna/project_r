<?php

$auto_load = new giga();
$auto_load->name = 'auto_load';
$auto_load->base_route = 'auto_load';

$app->set_global('helper',$helper);
$app->set_global('route',$route);

$app->set_global('title','Futurence');
$app->set_global('description','Futurence');
$app->set_global('keywords','Telecomunicaciones, Sistemas, Sitios web, soluciones a la medida');

require('modules/auto_load/app/controllers/functions.php');

?>