<?php

// A Blog Model

class Blog extends Database {

    // Database table name
    public static $table = 'blog';

    // Database map variables
    public $id;
    public $title;
    public $text;
    public $dateInsert;

    // SQL example list cars table
    public static function select($filters = array() ) {

        $mysqli = self::connect();
        $sql    = "SELECT * FROM ".self::$table;
        

        // Add limit
        if (array_key_exists('url', $filters)) {
            $filters['url'] = $mysqli->real_escape_string($filters['url']);
            $sql .= " WHERE url = '".$filters['url']."'";
        }


        // Add limit
        if (array_key_exists('limit', $filters)) {
            $sql .= " LIMIT ".(int)$filters['limit'];
        }

        

        $result = $mysqli->query($sql);

        $data   = self::fetch($result);
        return $data;
    }


}