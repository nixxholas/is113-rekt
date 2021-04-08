<?php

    //date_default_timezone_set('Asia/Singapore');

    spl_autoload_register(
        function ($class){
            require_once  "models/$class.php";
        }
    );

    require_once 'ConnectionManager.php';

?>
