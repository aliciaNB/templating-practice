<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require vendor/autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class (instantiate Fat-Free)
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function($f3) {
    //Set a F3 variable
    $f3->set('title', 'Practicing with Templates');

    $f3->set('temp', 67);

    $f3->set('radius', 10);

    $fruits = array('apple', 'banana', 'orange');
    $f3->set('fruits', $fruits);

    $urls = array('http://www.google.com', 'http://www.facebook.com', 'http://www.twitter.com');
    $f3->set('urls', $urls);

    $urls2 = array('http://www.google.com' => 'Google', 'http://www.facebook.com' => 'Facebook', 'http://www.twitter.com' => 'Twitter');
    $f3->set('urls2', $urls2);

    $desserts = array('chocolate' => 'Chocolate Mousse', 'vanilla' => 'Vanilla Custard', 'strawberry' => 'Strawberry Shortcake');
    $f3->set('desserts', $desserts);

    $view = new Template();
    echo $view-> render('views/home.html');
});

//Run Fat-free
$f3->run();