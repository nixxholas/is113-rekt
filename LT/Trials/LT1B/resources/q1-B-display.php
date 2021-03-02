<?php
/* 
    Name:  
    Email: 
*/

$messages = [
    "trump"   => "Make America Great Again",
    "clinton" => "More Women in Office",
    "kim"     => "Nukes Fly High and Far",
    "moon"    => "One Korea One People"
];

?>
<!DOCTYPE html>
<html>
<body>
<?php
    if (isset($_POST["selected"])) {
        $selected = $_POST["selected"];

        if (count($selected) > 0) {
            echo "<table border='1'>";
            echo "<thead>";
            echo "<th>Photo</th>";
            echo "<th>Message</th>";
            echo "</thead>";
            foreach ($selected as $person) {
                echo "<tr>";
                echo "<td><img src=$person.jpg></td>";
                echo "<td><h1>" . $messages[$person] . "</h1></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else
            echo "<h1>You must select at least one person!</h1>";
    } else {
        echo "<h1>You must select at least one person!</h1>";
    }
?>
</body>
</html>