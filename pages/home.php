<?php

//Get cars from database
$carObj  = new Car();
$cars    = $carObj->getCars();

?>
<header class="bg-secondary text-white">
    <div class="container py-5 text-center">
        <h1>PHP Starter Kit</h1>
        <p class="fst-italic">php native: simple and robust</p>
    </div>
</header>
<main class="container my-5">
    <div class="row">
        <?php
        foreach ($cars as $car) { ?>
        <div class='col-md-3'>
            <div class='blog'>
                <h3> <?=$car->name.' '.$car->brand?></h3> 
                <img src="./images/car.jpg" class="img-fluid">
                <p class="fst-italic text-end"> <?=number_format($car->price, 0, '.') ?> €</p> 
            </div>
        </div>
        <?php }?>
    </div>
</main>