<?php
/* 
    Name: Nicholas Chen Han Wei
    Email: hwchen.2020@sis.smu.edu.sg
*/
?>
<html>
<body>
    <?php
        if (isset($_POST["fruit"])) {
            $fruits = $_POST["fruit"];

            foreach ($fruits as $fruit) {
                echo "<img src=$fruit.jpg /></br>";
            }
        } else {
            echo "<h1>Please select a fruit</h1>";
        }
    ?>
</body>
</html>