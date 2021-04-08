<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/ResponseDAO.php';

?>

<!DOCTYPE html>
<html>
	<body>
		<img src="images/sis.png">
		<h1>Stored Responses</h1>
		<table border='1'>
            <thead>
                <th>Name</th>
                <th>Preferred Class Length (in hours)</th>
                <th>Preferred Sem Length (in weeks)</th>
            </thead>
        <?php
            # == Part A (Display Stored Responses): ENTER CODE HERE == 
            $respDao = new ResponseDAO();

            foreach ($respDao->retrieveAll() as $resp) {
                echo "<tr>";
                echo "<td>" . $resp->getName() . "</td>";
                echo "<td>" . $resp->getPreferredClassLength() . "</td>";
                echo "<td>" . $resp->getPreferredSemLength() . "</td>";
                echo "</tr>";
            }
            # ====
		?>
		</table>
	</body>
</html>