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
                <h1> Welcome, <?php echo $user->getFullname() ?> </h1>
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

    <h1> Service requests </h1>

    <?php

    $airconDao = new AirconDAO();
    $requestDao = new RequestDAO();
    $requests = $requestDao->getAll();

    // Add code here or elsewhere in this file
    $aircons = $airconDao->getAll();
    echo "
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Aircon ID</th>
                <th>Location</th>
                <th>Request Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>";

        foreach ($requests as $request) {
            $aircon = $airconDao->getAircon($request->getAirconId());
            $req_status = $request->getStatus();
            echo "<tr>";
            echo "<td>{$request->getId()}</td>";
            echo "<td>{$aircon->getId()}</td>";
            echo "<td>{$aircon->getLocation()}</td>";
            echo "<td>{$request->getRequestDate()}</td>";
            echo "<td>$req_status</td>";
            if ($req_status == "pending") {
                echo "<td><a href='update_request_status.php?id={$request->getId()}'>Accept this request</a></td>";
            } else {
                echo "<td></td>";
            }
            echo "</tr>";
        }
        echo "</table>";

    // Add code here or elsewhere in this file


    ?>

</center>
</body>
</html>