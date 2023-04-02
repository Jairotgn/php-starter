<?php

// A simple ORM Model-Database

class Database
{
    // Main db object
    public  $mysqli;
  
    // Database class constructor
    public function __construct($data = null) {

        // Connect to database
        self::connect();

        // GET one row from database by id
        if (is_numeric($data)) {
            $this->selectOne($data);

        // PREPARE new object
        } else if (is_array($data)) {
           
        }		 
    }

    // Connect to database
    public static function connect($return = true) {
        
         // Prepare database config
         $mysqli = new mysqli(Config::$dbhost, Config::$dbuser, Config::$dbpassword, Config::$dbname);

         // Check database connection
         if ( $mysqli->connect_errno) {
             die('Database connection error '. $mysqli->connect_error);
         }
        
         return $mysqli;
    }

    // Get one row by id
    public function selectOne($id) {
		$className   = get_called_class();
		$table       = $className::$table; 
        $resultQuery = $this->mysqli->query("SELECT * FROM $table WHERE id = ".(int)$id);
        $data        = self::fetch($resultQuery);   
        
        if ($data[0]->id){
            $this->loadVarsArray($data);
        }
	}

    // Fetch base object from database

    public static function fetch($resultQuery) {
        $return = array();
        while ($obj = $resultQuery->fetch_object()) {
            $return[] = $obj;
        }
        return $return;
    }

    // Convert base object to php class

    public function loadVarsArray($data = NULL) {

		$className  = get_called_class();
		$vars 		= array_keys(get_class_vars($className));

		if (count($data)){
			foreach ($data as $name=>$value) {	
				if (in_array($name, $vars)) {
					$this->$name = $value;
				}
			}
		}	
	}
}