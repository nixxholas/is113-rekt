<html><body>
    <form method="post" action="summary.php">
        Age: <input type="text" name="age"/>
        <?php
            echo "<input type='hidden' name='name' 
                        value='". $_POST['name'] . "'/>";
        ?>
        <input type="submit" value="Next"/>
    </form>
</body></html>
