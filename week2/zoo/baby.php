<h1>Details of New Baby Animal</h1>

<?php
    $name = $_GET['name'];
    echo "Baby Name : " . $name . "</br>";

    $type = $_GET['type'];
    echo "It is a " . $type . "</br>";

    $health_stats = $_GET['healthcheck'];
    echo "Health Status : </br>";
    if (sizeof($health_stats) > 0) {
        echo '<ul>';
        for ($i = 0; $i < sizeof($health_stats); $i++) {
            echo '<li>' . $health_stats[$i] . '</li>';
        }
        echo '</ul>';
    }
    echo '</br>';

    $room = $_GET['room'];
    echo "It is in Nursery Room " . $room . "</br>";
    switch($room) {
        case 1:
            echo "<h1>*** Welcome to Room 1 ***</h1>";
            break;
        case 2:
            echo "<h1>---- Happy Birthday ----</h1>";
            break;
        case 3:
            echo "<h1>++++++ Stay Cute !!!! +++++++</h1>";
            break;
        default:
            echo "<h1>SALAH LA BRO</h1>";
            break;
    }
    ?>