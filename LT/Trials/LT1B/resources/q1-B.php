<?php
/* 
    Name:  
    Email: 
*/

$people = [
    "trump"    => 'Donald Trump',
    "clinton"  => 'Hillary Clinton',
    "kim"      => 'Kim Jong Un',
    "moon"     => 'Moon Jae In'
];

?>
<!DOCTYPE html>
<html>
<body>
    <form method='post' action='q1-B-display.php'>

        <table border='1'>
            <tr>
                <th>Person</th>
            </tr>
            <?php
                if (count($people) > 0) {
                    foreach ($people as $person => $fName) {
                        echo "<tr><td><label><input type='checkbox' name='selected[]' value=$person>$fName</label></td></tr>";
                    }
                }
            ?>
            <tr>
                <td>
                    <input type='submit'>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>