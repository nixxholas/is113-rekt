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
    if (isset($_POST["person"])) {
        $person = $_POST["person"];
        echo "<h1>" . $messages[$person] . "</h1></br>";
        echo "<img src=$person.jpg>";
    } else {
        echo "<h1>You must select a person!</h1>";
    }
?>
</body>
</html>