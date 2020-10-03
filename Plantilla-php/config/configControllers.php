<?php
define ('BASE_DIR', "http://localhost/Plantilla-php/");
define ('CONTROLLERS_DIR', "controllers/");
define ('DEFAULT_CONTROLLER', "Home");
define ('DEFAULT_ACTION', "showHome");
define ('DB_USER', "root");
define ('DB_HOST', "127.0.0.1");
define ('DB_PASSWORD', "");
define ('DB_NAME', "db_datos");

$txt = "hey";
$database = new MySqlConnection(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$database->connect();