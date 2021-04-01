<?php

class TaskDAO {

   
    public function retrieveAll() {
        // SQL : select * from tasks;

        // Step 1 : Connect to database
        $dsn = "mysql:host=localhost;dbname=week12revision;port=3306";
        $pdo = new PDO($dsn, "root", ""); 

        // Step 2: Prepare PDO statement object 
        $sql = 'select * from tasks';
        $stmt = $pdo->prepare($sql); //PDOStatement
      
        // Step 3: Specify the return data format
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // Step 4: Prepare the SQL statement
        //         which include replace the placeholder with variables

        // Step 5: Send the query to the server
        $stmt->execute();
            
        // Step 6: Process the data - retrieve result row by row
        $result = [];
        while($row = $stmt->fetch()) {
            $result[] = new Task ($row['week_day'], $row['task']);
            }

        /// Step  7 : free up resources
        $stmt->closeCursor();
        $pdo = null;

        return $result;

    }


    public function retrieveTask($week) {
     

    }


}