<!DOCTYPE html>
<?php
    require_once 'common.php';
?>
<html>
    <body>
        <?php
            ### Add code here or elsewhere in this file
            echo "<table border='1'>";
            echo "<thead><th>Stall Name</th><th>Count of Sales</th></thead>";
            $stallDao = new StallDAO();
            $stalls = $stallDao->getStalls();
            foreach ($stalls as $stall) {
                echo "<tr>";
                echo "<td>{$stall->getName()}</td>";
                $total_sales = sizeof($stall->getSales());
                echo "<td>$total_sales</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>