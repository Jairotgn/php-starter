<?php
// ****************************************
// Router logic by htacces and mod rewrite
// ****************************************

//Default frontpage
$page = 'home';

//Global text variables like metadata and title
$langJson = file_get_contents('./lang.json', true);
DEFINE('LANG', json_decode($langJson, true));


//Get the route from url
if (isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];

    //Filter page variable. Prevent Local and Remote File Inclusion
    $page = filter_var($page, FILTER_SANITIZE_URL);
}

//Start router logic
if($page && file_exists("pages/$page.php")) {
    //Page exists

    //GET THE LANF OF THE CURRENT PAGE
    DEFINE('LANGPAGE', LANG[$page]);
    
} else {
    //Page not found
    header("HTTP/1.0 404 Not Found");
    exit;
}

//Route contact form
if (isset($_GET['sendcontact'])) {
    sendContactEmail($_POST);
}

//Send notification email contact form
function sendContactEmail($data) {
    if ($data['email'] && $data['phone'] && $data['message']) {
        $message = "{$data['email']}  {$data['phone']} {$data['message']}";
        mail('notify@me.com', 'New Contact Message', $message);
    }
}