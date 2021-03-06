<?php

/** Name: Dallas Sloan
 *  Date Jan 6, 2019
 *  index.php
 * Chicken in class follow along
 */

//require auto-load file
require ("vendor/autoload.php");
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Create an instance of the base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function(){
    $view = new Template();
    echo $view->render('views/all-about-chickens.html');
    echo "<h1>Hello World</h1>";
});

//Run fat free
$f3->run();
