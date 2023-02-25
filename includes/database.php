<?php
// Database config class
class Database
{
    // Put your database config in this file
    public $mysqli;
    public $host     = 'localhost';
    public $user     = 'root';
    public $dbname   = 'php-starter';
    public $password = '';

    //Database constructor
    public function __construct() {

         //Prepare database connection
        $this->mysqli = new mysqli($this->host, $this->user, $this->password, $this->dbname);

        // Check connection
        if ($this->mysqli->connect_errno) {
            die('Database connection error '.$this->mysqli->connect_error);
        }
    }

    // SQL example list cars table
    public function getCars() {
        $result = $this->mysqli->query("SELECT * FROM cars LIMIT 4");
        $data   = $this->fetch_object($result);
        return $data;
    }

    // fetch object array 
    public function fetch_object($result) {
        $return = array();
        while ($obj = $result->fetch_object()) {
            $return[] = $obj;
        }
        return $return;
    }
}