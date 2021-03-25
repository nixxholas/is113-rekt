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
            $age = $_GET["age"];

            if ($age > 0) {
                $toyDao = new ToyDAO();

                $toyResult = [];
                foreach ($toyDao->getAllToys() as $toy) {
                    if ($toy->getForAge() <= $age)
                        array_push($toyResult, $toy);
                }

                if (sizeof($toyResult) == 0) {
                    echo "No toys for age $age.";
                } else {
                    echo "Toys suitable for age : $age";
                    echo "<ul>";
                    foreach ($toyResult as $toy) {
                        echo "<li>{$toy->getType()}</li>";
                    }
                    echo "</ul>";
                }
            }
        }

    ?>
</body>
</html>