<?php

// Get current page
$page = "pages/".self::$currentPage.".php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <?php include $page; ?>
    <?php include 'footer.php'; ?>
  </body>
</html>