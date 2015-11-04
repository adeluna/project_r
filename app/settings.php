<?php

$app = new giga();
$helper = new helper();
$route = new routes();
$db = new db();

$app->name = 'pr';
$app->base_url = 'http://localhost/project_r/';

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


//-basic
$app->set_css('basic',array('http://fonts.googleapis.com/css?family=Open+Sans:300','app_style.css'));
$app->set_js('basic',array('jquery.js','app.js'));
//---

//--picker
$app->set_css('datepicker',array('jquery.datetimepicker.css'));
$app->set_js('datepicker',array('datetimepicker/jquery.datetimepicker.js'));
//---

$app->add_module('noticias');



?>