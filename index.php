<?php
/*
 * James Motherwell
 * 5/11/2024
 * 328/pets/index.php
 */

// Turn on error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once "vendor/autoload.php";

// Create an F3 (Fat-Free Framework) object
$f3 = Base::instance();

$f3->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/home.html');
});

// Run Fat-Free
$f3->run();