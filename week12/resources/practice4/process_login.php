<?php
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );
    $username = $_POST["username"];
    $password = $_POST["password"];
    $dao = new UserDAO();
    $user = $dao->retrieve($username);
    $success = false;
    if($user != null){
        $hashed = $user->getHashedPassword();
        $success = password_verify($password,$hashed); 
        if($success){
            echo "Successful Login";
        }
    }
    if (!$success){
        echo "Failed Login";
    }
?>
