<?php

    session_start();

?>

<html>
<body>

    <h3> Welcome to Page 2 </h3>

    <?php

        echo "Username : " . $_SESSION["username"] . "<br>";
        echo "Name : " . $_SESSION["name"] . "<br>";
    
        
    ?>

    <form>
        <input type="submit" name="logout" value="Logout">
    </form>


    <?php
        if (isset($_GET["logout"])){
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();
            echo "Bye Bye ... ";
        }

    ?>

</body>
</html>