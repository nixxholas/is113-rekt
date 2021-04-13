<?php
    require_once 'common.php';
 
    // Add code here or elsewhere in this file
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
                        header('location:client_view.php');
                        exit;
                    } else if ($user->getRole() == "manager") {
                        header('location:manager_view.php');
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