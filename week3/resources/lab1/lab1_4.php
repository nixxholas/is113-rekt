<?php
    $a = 11;
    $b = 21;
    $c = 31;
    $d = 41;
    echo "before rotation: a = $a, b = $b, c = $c, d = $d <br/>";
 
    # Write code here

    # save $d as $e for now
    $e = $d;

    $d = $c;
    $c = $b;
    $b = $a;
    $a = $e;

    # End of code
    
    echo "after rotation: a = $a, b = $b, c = $c, d = $d";   
?>  
