<!-- add your code here -->

<?php 
    session_start();

    if (isset($_POST["name"]))
        $_SESSION["name"] = $_POST["name"];
?>

<html>
    <body>
        <form method="post" action="session3.php">
            Age: <input type="text" name="age"/>
            <input type="submit" value="Next"/>
        </form>
    </body>
    <?php
        if (isset($_POST["Next"])) {
            $_SESSION["age"] = $_POST["age"];
            header("Location:session3.php");
            exit;
        }
    ?>
</html>
