<?php
    require_once "autoload.php";
    $dao = new PersonDAO();
    $result = $dao->retrieveAll();
?>
<html>
    <head>
        <style>
            table,th,td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <table>
        <tr> 
            <th>Name</th> 
            <th>Gender</th> 
            <th>Age</th> 
        </tr>
        <?php
        foreach($result as $person){
            echo "<tr>";
            echo "<td>" . $person->getName() . "</td>";
            echo "<td>" . $person->getGender() . "</td>";
            echo "<td>" . $person->getAge() . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </body> 
</html>