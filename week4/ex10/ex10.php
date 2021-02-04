<?php
    // In real-life, the following will be retrieved from a database.
    // List of countries.
    $countries = array("Indonesia", "Malaysia", "Philippines", "Singapore", 
                "Thailand", "Brunei", "Cambodia", "Laos");
            
    /*
    INSTRUCTIONS
    ============
    1.  Do NOT change the code above.
    2. 	Add "Myanmar", "Vietnam" to the array $countries.
    */
   
    array_push($countries, "Myanmar", "Vietnam")
?>
<html>
<body>
    <form action="ex10_process.php">
        Select:<br/>
        <?php
        /*
        INSTRUCTIONS
        ============
        3.  For each country in array $countries, display a checkbox for the country.
        4.	Display 5 countries / checkboxes per 1 line.
        */

        if ($countries != null && sizeof($countries) > 0) {
            $count = 1;
            foreach ($countries as $country) {
                echo "<input type='checkbox' name='countries[]'> $country </input>";
                if ($count % 5 == 0)
                    echo '<br>';
                $count++;
            }
        }

        
        ?>
        
        <br/>
        <input type="submit" /><br/>
    </form>
</body>
</html>