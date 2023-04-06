<?php
// Get current page
$page    = Config::$page;
$subpage = Config::$subpage;

if ($page == 'admin' ) {
  $inc = "administrator/$subpage.php";
} else { 
  $inc = "pages/$page.php";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <?php 
    if ($page == 'admin'){
      include $inc;
    } else {
      include $inc;
    }
    ?>
    <?php include 'footer.php'; ?>
  </body>
</html>