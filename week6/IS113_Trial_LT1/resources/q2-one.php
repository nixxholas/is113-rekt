<?php
/* 
    Name:  
    Email: 
*/
?>
<html>
<body>
<?php
if (isset($_POST["send"]) && isset($_POST["fruit"])){
    $fruits = $_POST["fruit"];

    echo "<h1>You selected " . count($fruits) . (count($fruits) == 1 ? " fruit" : " fruits") . "</h1>";

    echo "<table border='1'>";
    foreach ($fruits as $fruit) {
        echo "<tr><td><img src=$fruit.jpg /></td></tr>";
    }
    echo "</table>";
} else {
    echo "<h1>Please select a fruit</h1>";
}

?>
    <form method='post' action='q2-one.php'>
        <input type="checkbox" value="apple" name="fruit[]">Apple
        <input type="checkbox" value="orange" name="fruit[]">Orange
        <input type="checkbox" value="pear" name="fruit[]">Pear
        <br>
        <input type='submit' name='send'>
    </form>
</body>
</html>