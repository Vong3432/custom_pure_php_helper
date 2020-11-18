<?php

require('ConnectionHelper.php');
require('ValidatorHelper.php');

class QueryHelper
{

    private $conn;

    function __construct()
    {
        // TODO 3: Setup a connection to the appropriate database.
        $this->conn = initializeConnect();
    }

    function add($data, $table)
    {
        // TODO 4: Query the database.    
        $query= "INSERT INTO " . $table ." ( " . implode(', ',array_keys($data)) . ") VALUES ('" . implode("', '", array_values($data)) . "')";        
        $result = $this->conn->query($query);

        // TODO 5: Display the feedback back to user.
        if (!$result) dieConnect("Fatal error, data is not inserted.");
        echo "Added successfully";
    }    

    function select($table, $keyword, $val, ...$columns) {
        // TODO 4: Query the database.    
        $query= "SELECT " . implode(', ', ...$columns) ." FROM " . $table ." WHERE $keyword = '$val' ";        
        $results = $this->conn->query($query);
        
        if ($results->num_rows < 1) dieConnect($this->conn->error);                  

        // TODO 5: Display the feedback back to user.
        return $results;
    }

    function __destruct()
    {
        // TODO 6: Disconnecting from the database.
        $this->conn->close();
    }
}
