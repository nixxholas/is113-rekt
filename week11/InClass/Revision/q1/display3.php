<?php
    require_once "Model/Pen.php";
    require_once "Model/PencilCase.php";

    $pen_arr = [ new Pen ("Highlighter", "Green"),
                 new Pen ("Pilot Pen", "Red")
               ];

    $pencilcase = new PencilCase("Kitty",$pen_arr);

    $pen_arr =  ;

    echo "Do I have a Red Pen ? <br>";

    $found =   ;
    foreach($pen_arr as $pen){
        if (    == "Red")
            $found = true;
    }

    if ($found)
        echo "YES";
    else 
        echo "NO";

?>