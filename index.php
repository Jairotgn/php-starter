<?php
// Configuration
include 'config.php';

// Includes and Libraries
include 'includes/database.php';

// Prepare global text variables like metadata, title, nav
$langJson = file_get_contents('./lang.json', true);
DEFINE('LANG', json_decode($langJson, true));

//Autoload models
spl_autoload_register(function ($class_name) {
    include 'models/'.$class_name . '.php';
});

// Start session for login and administrator dashboard
session_start();

//Start router
include 'routes.php';
