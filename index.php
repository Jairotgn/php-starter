<?php
//Global Start aplication entry points

//Global text variables like metadata and title
$lang = file_get_contents('./lang.json', true);
$lang = json_decode($lang, true);

//Start router
include 'router.php';

//Get global variables by route
$lang = $lang[$page];

//Start theme
include 'theme/index.php';