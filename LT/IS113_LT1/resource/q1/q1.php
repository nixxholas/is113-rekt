<!--
    Name:
    Email:
-->
<!DOCTYPE html>
<html>
<head>
    <title>Q1</title>
</head>
<body>
 

<?php

   // Add Code Here
    if (isset($_GET["name"]) && isset($_GET["email"]) && $_GET["preferred_tracks"]) {
        $name = $_GET["name"];
        $email = $_GET["email"];
        $pref_tracks = $_GET["preferred_tracks"];

        if (count($pref_tracks) <= 0) {
            echo "No track selected";
        } else {
            echo "<table border='1'>";
            echo "<thead><th>Name</th><th>Email</th><th>Preferred Tracks</th></thead>";
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$email</td>";
            echo "<td><ul>";
            foreach ($pref_tracks as $pref_track) {
                echo "<li>$pref_track</li>";
            }
            echo "</ul></td>";
            echo "</tr>";
            echo "</table>";
        }
    }

    if (!isset($_GET["name"])) {
        echo "Please enter a valid name!";
    }

    if (!isset($_GET["email"])) {
        echo "Please enter a valid email!";
    }

    if (!isset($_GET["preferred_tracks"])) {
        echo "No track selected";
    }
?>

  
</body>
</html>