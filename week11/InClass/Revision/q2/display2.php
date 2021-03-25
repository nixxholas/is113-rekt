<?php
    spl_autoload_register(
        function($class){
            require_once "$class.php";
        }
    );


?>

<html>
<body>
    <form>
        For Age: <input type="number" name="age">
        <input type="submit" name="find" value="find">
    </form>


    <?php
    
        //var_dump($_GET);

        if (isset($_GET["find"])){
            
            // YOUR CODES GOES HERE






        }

    ?>
</body>
</html>