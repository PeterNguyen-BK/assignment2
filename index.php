<?php
session_start();
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once "./src/core/App.php";
require_once "./src/core/Controller.php";
require_once "./src/core/Config.php";
$myApp = new App();
?>