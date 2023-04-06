<?php
// Manage blogs

// Get a list of blogs
$cars = Car::select();
?>

<div class="container my-5">
    <h1 class="mb-5">Manage blogs</h1>
    <table class="table trable-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cars as $car) : ?>
            <tr>
                <td><?=$car->id?></td>
                <td><?=$car->name?></td>
                <td><?=$car->brand?></td>
                <td><?=$car->price?></td>
                <td>
                    <a href="/admin/blogs/edit/<?=$car->id ?>" class="btn btn-primary">Edit</a>
                    <a href="/admin/blogs/delete/<?=$car->id ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
</div>