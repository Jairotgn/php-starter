<?php

// A simple Router
class Router
{
    // Save the current page
    public static $currentPage = '';

    public static function get($pattern) {

        // GET current URI
        $uri = $_SERVER['REQUEST_URI'];

        // Get url get params
        $params = explode('/', $uri);

        // Default home page
        if (empty($params[1])) {
            self::$currentPage = 'home';
        
        // Page exist
        } else if ($pattern && $uri == $pattern) {
            self::$currentPage = $params[1];
        } 
        
        // Load Theme
        if (self::$currentPage) {
            include 'theme/index.php';
            exit;
        }
    }
    // Global function page not exists
    public static function launch404() {
        header("HTTP/1.0 404 Not Found");
        exit;
    }
}