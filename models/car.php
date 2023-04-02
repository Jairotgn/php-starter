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
    public static function select($filters = array() ) {

        $mysqli = self::connect();
        $sql    = "SELECT * FROM ".self::$table;
        
        // Add limit
        if (array_key_exists('limit', $filters)) {
            $sql .= " LIMIT ".(int)$filters['limit'];
        }

        $result = $mysqli->query($sql);

        $data   = self::fetch($result);
        return $data;
    }


}