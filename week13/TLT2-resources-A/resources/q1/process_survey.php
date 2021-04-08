<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';

?>

<!DOCTYPE html>
<html>
    <body>

		<img src="images/sis.png">

		<h1>Survey: Summary</h1>

        <?php
            
            # Ensure that survey must always be taken from the beginning
            if (!isset($_POST['page2'])) {
                header("Location: survey1.php");
                exit;
            }
            #===
            echo "You entered: </br></br>";

            $name = '';
            if (isset($_SESSION["name"])) {
                $name = $_SESSION["name"];
            }
            $class_length = $_POST["class_length"];
            $sem_length = $_POST["sem_length"];

            # == Part B (Display student name and preferences): ENTER CODE HERE ==
            echo "<table border='1'>";
            echo "<tr><th>Name</th><td>$name</td></tr>";
            echo "<tr><th>Class Length</th><td>$class_length</td></tr>";
            echo "<tr><th>Semester Length</th><td>$sem_length</td></tr>";
            echo "</table></br>";
            # ===
            
            # == Part B (Add a new response to the database and display status): ENTER CODE HERE ==
            $respDao = new ResponseDAO();
            $addRes = $respDao->addResponse($name, $class_length, $sem_length);
            if ($addRes) {
                echo "<strong>Response saved successfully</strong>";
            } else {
                echo "<strong>Response was not saved successfully</strong>";
            }
            # ====
  
        ?>

</body>
</html>