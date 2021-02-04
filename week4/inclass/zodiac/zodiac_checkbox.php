<?php
        // https://www.infoplease.com/culture-entertainment/mythology-folklore/chinese-zodiac

       // do not change the content of the Array

        $zodiacs_traits = [
                           "Rat" => ["quick-witted", "smart", "charming", "persuasive"],
                           "Ox" => ["patient", "kind", "stubborn", "conservative"],
                           "Tiger" => ["authoritative", "emotional", "courageous", "intense"],
                           "Rabbit" => ["popular", "compassionate", "sincere"],
                           "Dragon" => ["energetic", "fearless", "warm-hearted", "charismatic"],
                           "Snake" => ["charming", "gregarious", "introverted", "generous",  "smart"],
                           "Horse" => ["energetic", "independent", "impatient",  "enjoy traveling"],
                           "Goat" => ["mild-mannered", "shy", "kind",  "peace-loving"],
                           "Monkey" => ["fun", "energetic", "active"],
                           "Rooster" => ["independent", "practical", "hard-working", "observant"],
                           "Dog" => ["patient", "diligent", "generous", "faithful", "kind"],
                           "Pig" => ["loving", "tolerant", "honest", "appreciative of luxury"]
                           ];
                            
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Zodiac </title>
    </head>

    <body>
        <hr>
        <h3>Zodiac </h3>

        <form method="post">
            Choose your zodiac: <br>
            <?php

                // YOUR CODE GOES HERE
                if ($zodiacs_traits != null && sizeof($zodiacs_traits) > 0) {
                    foreach ($zodiacs_traits as $zodiac => $traits) {
                        echo "<input type='checkbox' name='zodiacs[]' value=$zodiac>$zodiac</input><br>";
                    }
                }

            ?>

            <br>
            <input type="submit">
            <br><br>
        </form>


        <?php
            echo "<h3> Results </h3>";

             // YOUR CODE GOES HERE

            if (isset($_POST["zodiacs"])) {
                $selected_zodiacs = $_POST["zodiacs"];

                if ($selected_zodiacs == null || sizeof($selected_zodiacs) <= 0) {
                    echo "No selection made.";
                } else {
                    if ($zodiacs_traits != null && sizeof($zodiacs_traits) > 0) {
                        foreach ($zodiacs_traits as $zodiac => $traits) {
                            foreach ($selected_zodiacs as $selected_zodiac) {
                                if ($selected_zodiac == $zodiac) {
                                    echo "Traits for $selected_zodiac:<br>";
                                    echo "<table border='1px'>";
                                    if ($traits != null && sizeof($traits) > 0) {
                                        foreach ($traits as $trait) {
                                            echo "<tr><td>$trait</td></tr>";
                                        }
                                    }
                                    echo "</table><br>";
                                }
                            }
                        }
                    }
                }
            }
            
        ?>


     
        
    </body>
</html>