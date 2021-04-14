<!--
    Name: Nicholas Chen Han Wei
    Email: hwchen.2020
-->
<html>
<body>

    <?php
        require_once 'common.php';
        
        // Add code here or elsewhere in this file
        session_start();

        $username = $_SESSION["username"];
        $user = null;

        if ($username != null) {
            $userDao = new UserDAO();
            $user = $userDao->get($username);
        }
    ?>

    <center>

    <table>
        <tr>
            <td>
                <img src="<?php echo "images/$username.png" ?>" width="200">
            </td>
            <td>
                <h1>    Welcome, <?php echo $user->getFullname() ?> </h1>
            </td>
        </tr>
        <tr>
            <td align="center">
                <form action="login.php" method="POST">
                    <input type="submit" value="Logout" name="logout"/>
                </form>
            </td>
        </tr>  
    </table>

    <h1> Your aircons</h1>

    <?php

        // Add code here or elsewhere in this file
        $airconDao = new AirconDAO();
        $aircons = $airconDao->getAll();
        echo "
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Date of Last Request</th>
                <th>Status of Last Request</th>
            </tr>";
        foreach ($aircons as $aircon) {
            if ($aircon->getUsername() == $username) {
                echo "<tr>";
                echo "<td>{$aircon->getId()}</td>";
                echo "<td>{$aircon->getName()}</td>";
                echo "<td>{$aircon->getLocation()}</td>";
                echo "<td>{$aircon->getLastRqDate()}</td>";
                echo "<td>{$aircon->getLastRqStatus()}</td>";
                echo "</tr>";
            }
        }
        echo "</table>";

        // Add code here or elsewhere in this file
        
    ?>

    </center>
    
</body>
</html>