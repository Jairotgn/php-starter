<?php

// A simple ORM Model-Database

class Database
{
    //Main db object
    public  $mysqli;
  
    // Database constructor
    public function __construct($data = null) {

        // Prepare database config
        $this->mysqli = new mysqli(Config::$host, Config::$user, Config::$password, Config::$dbname);

        // Check database connection
        if ($this->mysqli->connect_errno) {
            die('Database connection error '.$this->mysqli->connect_error);
        }

        // GET one row from database by id
        if (is_numeric($data)) {
            $this->selectOne($data);

        // NEW object for save later
        } else if (is_array($data)) {
           
        }		 
    }

    // Get one row by id
    public function selectOne($id) {
		$className   = get_called_class();
		$table       = $className::$table; 
        $resultQuery = $this->mysqli->query("SELECT * FROM $table WHERE id = ".(int)$id);
        $data        = $this->getData($resultQuery);   
        
        if ($data[0]->id){
            $this->loadVarsArray($data);
        }
	}

    // Fetch base object from database

    public function getData($resultQuery) {
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

        print_r($vars); exit;

		if (count($data)){
			foreach ($data as $name=>$value) {	
				if (in_array($name, $vars)) {
					$this->$name = $value;
				}
			}
		}	
	}
}