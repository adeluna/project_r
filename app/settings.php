<?php

$app = new giga();
$helper = new helper();
$route = new routes();
$db = new db();

$app->name = 'pr';
$app->base_url = 'http://localhost/project_r/';
//$app->base_url = 'http://www.escamillasweb.com/nuevo/';

$app->public_route = 'public/';

$app->view_auto_load = false;

$db->db_app = 'mysql';
$db->db_name = 'project_r';
$db->db_host = 'localhost';
$db->db_user = 'root';
$db->db_pass = 'jesus';
$db->db_active = true;
$db->db_connect();

date_default_timezone_set('America/Mexico_City');


$app->set_js('main',array(
	'https://maps.googleapis.com/maps/api/js?key=AIzaSyCPchDFkS-JieDgSQSVCakmzPZwRx-e9gg&sensor=true',
	'core/angular/angular.min.js',
	'http://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-animate.js',
	'http://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-sanitize.js',
	'core/angular-translate/angular-translate.min.js',
	'core/angular-cookies/angular-cookies.min.js',
	'core/angular-translate-storage-cookie/angular-translate-storage-cookie.min.js',
	'app.js'));
$app->set_js('ini',array('home/testController.js'));


$app->set_css('basic',array('app.css'));

//$app->set_css('fonts',array('http://fonts.googleapis.com/css?family=Open+Sans:300'));

$app->add_module('auto_load');


?>