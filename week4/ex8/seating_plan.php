<?php
	// In real-life, the following will be retrieved from a database
	$seating_plan = 
		array(
			array( "amy", "alex", "alfred" ),
			array( "betty" ),
			array( "cat", "cindy", "catherine", "connie", "celest" ), 
			array( "dan", "derrick", "donnie", "dickson", "duke", "donald" ),
			array( "ellen", "eleen" ),
			array( "faye", "fred", "flint" ),
			array( "george" )
		);
?>
<!DOCTYPE html>
<html>
<body>
	<h4>Seating plan</h4>

	<?php
		/*
		INSTRUCTIONS
		============
		1.  For each row in 2D-array $seating_plan, 
			a.  Print row number (starting from 1) followed by a colon 
				and all the names in row separated by a space
			b.	Print each row on a separate line.
		
		Expected output:
		--- output: start ---
		Row 1: amy alex alfred 
		Row 2: betty 
		Row 3: cat cindy catherine connie celest 
		Row 4: dan derrick donnie dickson duke donald 
		Row 5: ellen eleen 
		Row 6: faye fred flint 
		Row 7: george 
		--- output: end ---
		*/
        $row_num = 1;
		foreach ($seating_plan as $row) {
		    $line_res = "";

		    foreach ($row as $person) {
		        $line_res .= $person . " ";
            }

            echo "Row $row_num: $line_res <br>";
		    $row_num++;
        }
	?>
	
</body>
</html>