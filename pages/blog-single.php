<?php
//Get one blog
$blogs = Blog::select(array('url'=>$subpage));
if (!count($blogs)) die('404 not found');
$blog  = $blogs[0];
?>
<header class="bg-secondary text-white">
    <div class="container py-5">
        <h1 class="text-center"><?=$blog->title ?></h1>
    </div>
</header>
<main class="container my-5">
    <p> <?=$blog->dateInsert ?></p>
    <p> <?=$blog->text ?></p>
</main>