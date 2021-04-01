<?php 
    session_start(); 
?>

<html>
    <body>
        <form method="post" action="summary-session.php">
            Age: <input type="text" name="age"/>
            <?php
                $_SESSION['name'] = $_POST['name'];
            ?>
            <input type="submit" value="Next"/>
    </form>
</body>
</html>
