<html>
<?php
    session_start();
?>
    <body>
        <form method="post" action="session2.php">
            Name: <input type="text" name="name"/>
            <input type="submit" value="Next"/>
        </form>
    </body>
<?php
    if (isset($_POST["Next"])) {
        $_SESSION["name"] = $_POST["name"];
        header("Location:session2.php");
        exit;
    }
?>
</html>
