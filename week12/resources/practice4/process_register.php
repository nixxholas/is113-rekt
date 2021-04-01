<?php
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed = password_hash($password, PASSWORD_DEFAULT);
var_dump($hashed);
    $dao = new UserDAO();
    $status = $dao->add($username,$hashed);
    if($status){
        echo "Registered successfully";
    }
    else{
        echo "Failed to register";
    }
?>
