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
    ?>
    </center>
</body>
</html>