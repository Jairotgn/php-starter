<?php
//Get the blogs
$blogs = Blog::select(array('limit' => 3));
?>
<header class="bg-secondary text-white">
    <div class="container py-5">
        <h1 class="text-center">Blog Page</h1>
    </div>
</header>
<main class="container my-5">
    <div class="row">
        <?php foreach ($blogs as $blog) { ?>
        <div class="md-12">
            <h2> <?=$blog->title ?></h2>
            <p> <?=$blog->text ?></p>
            <p> <a href="./blog/<?=$blog->url ?>">Read more</a></p>
        </div>
        <?php } ?>
    </div>
</main>