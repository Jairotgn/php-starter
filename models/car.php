<?php

// A example Cars model

class Car extends Database {

    // Database table name
    public static $table = 'cars';

    // Database map variables
    public $id;
    public $name;
    public $brand;
    public $photo;
    public $price;

    // SQL example list cars table
    public function getCars() {
        $result = $this->mysqli->query("SELECT * FROM ".self::$table." LIMIT 4");
        $data   = $this->getData($result);
        return $data;
    }
}