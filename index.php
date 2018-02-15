<?php

// Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');
// Require database connection file
require_once('models/db-functions.php');

// Create an instance of the Base Class
$f3 = Base::instance();

// Set debug level 0 = off, 3 = max level
$f3->set('DEBUG', 3);

// Connect to the database
$dbh = connect();

// Define a default route
$f3->route('GET /', function($f3) {

    // load a template
    $template = new Template();
    echo $template->render('views/all-students.html');


});

// Run Fat-Free
$f3->run();
