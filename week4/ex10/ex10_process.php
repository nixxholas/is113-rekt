<?php
	// In real-life, the following will be retrieved from a database.
	// Mapping of countries to their capital city.
	$capitals = array(
				"Indonesia" => "Jakarta", 
				"Malaysia" => "Kuala Lumpur", 
				"Philippines" => "Manila", 
				"Singapore" => "Singapore", 
				"Thailand" => "Bangkok", 
				"Brunei" => "Bandar Seri Begawan", 
				"Cambodia" => "Phnom Penh", 
				"Laos" => "Vientiane"				
			);
			
	/*
	INSTRUCTIONS
	============
	1.  Do NOT change the code above.
	2. 	Add the following countries and their capitals to the array $capitals.
			Country		Capital
			----------  ------------
			Myanmar		Naypyidaw
			Vietnam		Hanoi
	*/
	
    $capitals["Myanmar"] = "Naypyidaw";
    $capitals["Vietnam"] = "Hanoi";

?>
<html>
<head>
	<style>
		table, th, td {
			border: 1px solid black;
		 }
	</style>
</head>
<body>

	<!--
		INSTRUCTIONS
		============
		3.  For each country-form value submitted, 
			a.  Find the capital city of the country using $capitals.
			b.  Print out the country and its capital as rows in a table.
		4.  If there is no country selected (i.e. user did not check any checkbox), print "No country selected."
	-->
	<?php

    echo '<table>';
    echo '<thead>';
    echo '<td><b>Country</b></td>';
    echo '<td><b>Capital</b></td>';
    echo '</thead>';
    foreach ($capitals as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo '</table></hr>';

    $countries = $_GET["countries"];

    if ($countries == null or sizeof($countries) == 0) {
        echo 'No country selected.';
    }
	?>
	
	
</body>
</html>