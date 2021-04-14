<!--
    Name: Nicholas Chen Han Wei
    Email: hwchen.2020
-->
<?php
    require_once 'common.php';
 
    // Add code here or elsewhere in this file
    if (isset($_POST["logout"])) {
        session_start();
        unset($_SESSION["username"]);
        session_unset();
        session_destroy();

        //TODO: can inform logout here
    }
?>

<html>
<body>
    <center>
    <img src="./images/lunar.jpg" width="200">
    <form action="login.php" method="post">
        <table border ="1">
        <tr>
            <th>Username</th>
            <td> <input name="username" value = '' /> </td>
        </tr>
        <tr>
            <th>Password</th>
            <td> <input type="password" name="password" /> </td>
        </tr>
        </table>
        <br/>
        <input type="submit" value="Login" name = "login"/>
        <br/>
    </form>
    
    <?php 
        // Add code here or elsewhere in this file
        if (isset($_POST["login"]) && isset($_POST["username"]) && isset($_POST["password"])) {
            $userDao = new UserDAO();
            $username = $_POST["username"];

            $user = $userDao->get($username);

            if ($user != null) {
                $password = $_POST["password"];
                if ($password == $user->getPassword()) {
                    // Authenticated, redirect
                    if ($user->getRole() == "client") {
                        session_start();
                        $_SESSION["username"] = $username;
                        header('location:client_view.php');
                        exit;
                    } else if ($user->getRole() == "manager") {
                        header('location:manager_view.php');
                        session_start();
                        $_SESSION["username"] = $username;
                        exit;
                    } else {
                        echo "Invalid Role.";
                    }
                } else {
                    echo "Password is not valid!";
                }
            } else {
                echo "Username does not exist!";
            }
        }
    ?>
    </center>
</body>
</html>