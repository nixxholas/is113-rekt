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
		<h1>Statistics</h1>
        <?php
            $respDao = new ResponseDAO();
            # == Part C (Compute Statistics): ENTER CODE HERE == 
            $responses = $respDao->retrieveAll();

            echo "<table border='1'>";
            echo "<tr><th># Responses</th><td>" . sizeof($responses) . "</td></tr>";
            $twoHourCount = 0;
            $fifteenWeekCount = 0;
            foreach ($responses as $response) {
                if ($response->getPreferredClassLength() == 2) {
                    $twoHourCount += 1;
                }
                if ($response->getPreferredSemLength() == 15) {
                    $fifteenWeekCount += 1;
                }
            }
            echo "<tr><th># 2 Hours</th><td>$twoHourCount</td></tr>";
            echo "<tr><th>% 15 Weeks</th><td>" . round($fifteenWeekCount/sizeof($responses) * 100, 2) .  "%</td></tr>";
            echo "</table>";
            # ====
		?>
	</body>
</html>