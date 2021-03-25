<?php

    spl_autoload_register(
        function($class){
            require_once "$class.php";
        }
    );
    $ret_arr = [];
    
    $dao = new ToyDAO();
    $ret_arr = $dao->getToyforAge(10);

    var_dump($ret_arr);


?>