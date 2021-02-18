<?php
/* 
    Name:  
    Email: 
*/
    function is_divisible_by($num, $n) {
        return (($num % $n == 0) == 1) ? 'YES' : 'NO';
    }

    if (isset($_GET["numbers"]) && isset($_GET["divisor"])) {
        $divisor = $_GET["divisor"];
        $numbers = explode(',', $_GET["numbers"]);

        foreach ($numbers as $number) {
            $numDivisible = is_divisible_by($number, $divisor);
            echo "<li>$number is divisible by $divisor: $numDivisible </li>";
        }
    }
?>