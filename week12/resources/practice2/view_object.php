<?php
    
    // either this
    $src = $_GET["src"];
    $width = $_GET["width"];
    echo "<img src='$src' width='$width' />";

    // or this
    // echo "<img src='{$_GET['src']}' width='{$_GET['width']}'/>";


?>
