<?php

    class CourseDAO{

        public function retrieveAll($name) {
        
            // Step 1 : Connect to database
            $conn = new ConnectionManager();
            $pdo = $conn->getConnection();

            // Step 2: Prepare PDO statement object 
            $sql = 'select * from course where stud_name = :name';
            $stmt = $pdo->prepare($sql); //PDOStatement
          
            // Step 3: Specify the return data format
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
            // Step 4: Prepare the SQL statement
            //         which include replace the placeholder with variables
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        
            // Step 5: Send the query to the server
            $stmt->execute();
                
            // Step 6: Process the data - retrieve result row by row
            while ($row = $stmt->fetch()) {
                $result[] = new Course($row['stud_name'], $row['coursename'], $row['score']);
            }
        
            /// Step  7 : free up resources
            $stmt->closeCursor();
            $pdo = null;
    
            return $result;
        }

        public function insertCourse($name, $course, $score) {
        
            // Step 1 : Connect to database
            

            // Step 2: Prepare PDO statement object 
            
            // Step 3: Specify the return data format
            

            // Step 4: Prepare the SQL statement
            //         which include replace the placeholder with variables
           

            // Step 5: Send the query to the server
                
            // Step 6: Process the data - retrieve result row by row
        
            /// Step  7 : free up resources
            
            return $isOK;
    
        }
    }

?>