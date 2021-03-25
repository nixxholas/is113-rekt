<?php
    spl_autoload_register(
        function($class){
            require_once "Model/$class.php";
        }
    );

    $pen1 = new Pen ("Gel Pen", "Blue");
    $pen2 = new Pen ("Frixion Pen", "Red");
    
    $pencilcase = new PencilCase("Disney",[$pen1, $pen2]);

    echo "I have a " . $pencilcase->getTheme() . " pencil case. <br>";

    $pen_arr = $pencilcase->getPens();

    echo "With pens : <br>";
    foreach($pen_arr as $pen){
        echo "{$pen->getType()}" . " - " . $pen->getColor();
        echo "<br>";
    }

?>