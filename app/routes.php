<?php

$route->set_route('GET','inicio','');
$route->set_route('GET','inicio','inicio');

$route->set_route('GET','course','curso');
$route->set_route('GET','clase_1','curso/(^clase_[0-9]+$)');

$route->set_route('GET','temas','temas/(^[0-9a-zA-Z]+$)');


$route->set_route('GET','servicios','servicios/s_1');
$route->set_route('GET','servicios','servicios/s_2');
$route->set_route('GET','servicios','servicios/s_3');



?>