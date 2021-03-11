<?php
        // do not change the content
        
        $zodiacs = ["Rat", "Ox", "Tiger", "Rabbit", "Dragon","Snake",
                    "Horse","Goat","Monkey","Rooster", "Dog", "Pig"];

        $zodiacs_traits = ["Rat" => "quick-witted, smart, charming, persuasive",
                    "Ox" => "patient, kind, stubborn, conservative",
                    "Tiger" => "authoritative, emotional, courageous, intense",
                    "Rabbit" => "popular, compassionate, sincere",
                    "Dragon" => "energetic, fearless, warm-hearted, charismatic",
                    "Snake" => "charming, gregarious, introverted, generous,  smart",
                    "Horse" => "energetic, independent, impatient,  enjoy traveling",
                    "Goat" => "mild-mannered, shy, kind,  peace-loving",
                    "Monkey" => "fun, energetic, active",
                    "Rooster" => "independent, practical, hard-working, observant",
                    "Dog" => "patient, diligent, generous, faithful, kind",
                    "Pig" => "loving, tolerant, honest, appreciative of luxury"];                    
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
                if ($zodiacs != null && sizeof($zodiacs) > 0) {
                    foreach ($zodiacs as $zodiac) {
                        echo "<input type='radio' name='zodiac' value=\"$zodiac\">$zodiac</input><br>";
                    }
                }

            ?>
            <br>
            <input type="submit">
            <br><br>
        </form>

        <?php

             // YOUR CODE GOES HERE

            if (isset($_POST["zodiac"])) {
                $selected_zodiac = $_POST["zodiac"];

                if ($selected_zodiac != null) {
                    echo "Traits for $selected_zodiac: ";

                    if ($zodiacs != null && sizeof($zodiacs) > 0) {
                        foreach ($zodiacs_traits as $zodiac => $traits) {
                            if ($selected_zodiac == $zodiac)
                                echo $traits;
                        }
                    }
                }
            }
             
            
        ?>

     
        
    </body>
</html>