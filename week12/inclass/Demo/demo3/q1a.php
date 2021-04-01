<?php

    # this example is to show how variables as passed from one
    # page to another

    session_start();

    $secret = "ABC";
    $username = "S000";
    $name= "John Tan";

?>

<html>
<body>

    <h3> Welcome to Page 1 </h3>

    <form>
        <input type="submit" name="go" value="Go to Page 2">
    </form>

    <?php
    
        if (isset($_GET["go"])){
            $_SESSION["username"] = $username;
            $_SESSION["name"] = $name;
            header("location:q1b.php");
            exit;
        }

    ?>


</body>
</html>