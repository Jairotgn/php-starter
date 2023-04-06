<?php
// Configuration
include 'config.php';

//includes
include 'includes/database.php';

//Autoload models
spl_autoload_register(function ($class_name) {
    include 'models/'.$class_name . '.php';
});

// Start session for login and administrator dashboard
session_start();

//Start router
include 'router.php';

//Start theme
include 'theme/index.php';