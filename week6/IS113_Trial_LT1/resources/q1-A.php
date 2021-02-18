<?php
/* 
    Name:  
    Email: 
*/
    function is_divisible_by($num, $n) {
        return (($num % $n == 0) == 1) ? 'YES' : 'NO';
    }

    if (isset($_GET["divisor"])) {
        $divisor = $_GET["divisor"];
        echo "<ul>";
        if (isset($_GET["num1"])) {
            $num1 = $_GET["num1"];
            $num1divisible = is_divisible_by($num1, $divisor);
            echo "<li>$num1 is divisible by $divisor: $num1divisible </li>";
        }

        if (isset($_GET["num2"])) {
            $num2 = $_GET["num2"];
            $num2divisible = is_divisible_by($num2, $divisor);
            echo "<li>$num2 is divisible by $divisor: $num2divisible </li>";
        }

        if (isset($_GET["num3"])) {
            $num3 = $_GET["num3"];
            $num3divisible = is_divisible_by($num3, $divisor);
            echo "<li>$num3 is divisible by $divisor: $num3divisible </li>";
        }
        echo "</ul>";
    }
?>
