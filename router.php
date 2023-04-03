<?php
// ****************************************
// Router logic by htacces and mod rewrite
// ****************************************

//Default frontpage
$page = 'home';

//Get the post data
$post = (object)$_POST;

// Prepare global text variables like metadata, title, nav
$langJson = file_get_contents('./lang.json', true);
DEFINE('LANG', json_decode($langJson, true));

// Get the route from url and htacces
// Filter page variable. Prevent Local and Remote File Inclusion
if (isset($_REQUEST['page'])) {
    $page    = filter_var($_REQUEST['page'], FILTER_SANITIZE_URL);
}
if (isset($_REQUEST['subpage'])) {
    $subpage = filter_var($_REQUEST['subpage'], FILTER_SANITIZE_URL);
}


// Login logic
if ($page == "login" && isset($post->user) && isset($post->password)) {
    if (Config::$user == $post->user && Config::$password == md5($post->password)) {
        $_SESSION['login'] = true;
        header("Location: /admin");
    } else {
        header("Location: /login?error=1");
    }
}


// Blog single page
if ($page == 'blog' && $subpage) {
    $page = 'blog-single';

// GET THE LANG OF THE CURRENT PAGE
}else if ($page && file_exists("pages/$page.php")) {
    //Page exists

    //GET THE LANF OF THE CURRENT PAGE
    DEFINE('LANGPAGE', LANG[$page]);
    
} else {
    //Page not found
    header("HTTP/1.0 404 Not Found");
    exit;
}