<?php
    spl_autoload_register(
        function($class){
            require_once "Model/$class.php";
        }
    );

    $pen_arr = [ new Pen ("Marker", "Green"),
                 new Pen ("Ballpoint", "Red")];

    $pencilcase = new PencilCase("disney",$pen_arr);

    echo "One of the pens is : " . $pencilcase->getPens()[1]->getColor();

   
?>