<!DOCTYPE html>
<html>
    <body>

        <?php

            // Search for a particular book from the Book table and display it.

        
            // Step 1 : Connect to database
 
            // create an interface btwn PHP and db
 
            
            // Step 2: Prepare PDO statement object 
            $isbn13 = "1234567890123";
            $sql = "select * from book where isbn13 = :isbn13";
 
            


            // Step 3: Specify the return data format
            // This is an associative array
            

            // Step 4: Prepare the SQL statement
            //         which include replace the placeholder with variables


            // Step 5: Send the query to the server
            
            
            // Step 6: Process the data - retrieve result row by row
            


            /// Step  7 : free up resources
            
            


            
        ?>
</body>
</html>



