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
              




            ?>

            <br>
            <input type="submit">
            <br><br>
        </form>


        <?php
            echo "<h3> Results </h3>";

             // YOUR CODE GOES HERE

           
                 
            
        ?>


     
        
    </body>
</html>