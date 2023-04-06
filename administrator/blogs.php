<?php
// Manage blogs

// Get a list of blogs
$blogs = Blog::select();
?>

<div class="container my-5">
    <h1 class="mb-5">Manage blogs</h1>
    <table class="table trable-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogs as $blog) : ?>
            <tr>
                <td><?= $blog->id ?></td>
                <td><?= $blog->title ?></td>
                <td><?= $blog->dateInsert ?></td>
                <td>
                    <a href="/admin/blogs/edit/<?= $blog->id ?>" class="btn btn-primary">Edit</a>
                    <a href="/admin/blogs/delete/<?= $blog->id ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
</div>