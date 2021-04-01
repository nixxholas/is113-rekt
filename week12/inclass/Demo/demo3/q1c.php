<?php
    session_start();

?>


<html>
<body>

    <h3> Welcome to Page 3 </h3>
    <?php
        
        // check if you are the correct user.
        // if you are S000 then ok
        // else redirect to Page 1.

        if ($_SESSION["username"] == "S000")
            echo "<h3> hello " . $_SESSION["name"];
        else{
            header("location:show.php");
        }


    ?>

    <form>

    </form>
</body>
</html>