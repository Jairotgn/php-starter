<?php
// ****************************************
// Router logic by htacces and mod rewrite
// ****************************************

// Prepare global text variables like metadata, title, nav
$langJson = file_get_contents('./lang.json', true);
DEFINE('LANG', json_decode($langJson, true));

// Get the route from url and htacces
if (isset($_REQUEST['page'])) {
    Config::$page = filter_var($_REQUEST['page'], FILTER_SANITIZE_URL);
}
if (isset($_REQUEST['subpage'])) {
    Config::$subpage = filter_var($_REQUEST['subpage'], FILTER_SANITIZE_URL);
}

// Admin pages
if (Config::$page == 'admin') {

    // Check if user is logged
    if (!$_SESSION['login']) {
        header("Location: /login?error=1");
    }

    // Set default admin subpage
    if (!Config::$subpage) Config::$subpage = 'home';

    // Check if subpage exists
    if (!file_exists("administrator/".Config::$subpage.".php")) {
        launch404();
    }
    
// Blog single page
} else if (Config::$page == 'blog' &&  Config::$subpage) {
    Config::$page = 'blog-single';

// Get lanf of the current page
} else if (Config::$page && array_key_exists(Config::$page, LANG)) {

    // GET THE LANG OF THE CURRENT PAGE
    DEFINE('LANGPAGE', LANG[Config::$page]);
} else if ( Config::$page && file_exists("pages/".Config::$page.".php")) {
   
    // GET THE LANG OF THE CURRENT PAGE
    DEFINE('LANGPAGE', LANG[Config::$page]);
    
} else {
    //Page not found
    launch404();
}

// Global function page not exists
function launch404() {
    header("HTTP/1.0 404 Not Found");
    exit;
}