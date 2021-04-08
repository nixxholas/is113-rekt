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

            # == Part B (Display student name and preferences): ENTER CODE HERE ==

            # ===
            
            # == Part B (Add a new response to the database and display status): ENTER CODE HERE ==
            
            # ====
  
        ?>

</body>
</html>