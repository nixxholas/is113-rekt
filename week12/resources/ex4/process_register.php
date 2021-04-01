<?php
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $dao = new UserDAO();
    $status = $dao->add($username,$hashed);
    if($status){
        echo "Registered successfully";
       
        # Redirect to login.php




    }
    else{
        echo "Failed to register";
    }
?>
