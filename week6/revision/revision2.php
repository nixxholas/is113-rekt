<?php
    $restaurants = [
                    "Fat Cow" => ["$$$$$", "Drinks", "Fine Dining","https://www.fatcow.com.sg/"],
                    "The Line" => ["$$$", "Buffet", "Kids Friendly","http://www.shangri-la.com/singapore/shangrila/dining/restaurants/the-line/"],
                    "The White Rabbit" => ["$$$","Modern","Romantic","https://www.thewhiterabbit.com.sg/"],
                    "McDonalds" => ["$","Burgers","Kids Friendly","https://www.mcdonalds.com.sg/"]
                  ];

?>

<!DOCTYPE html>
<html>
<body>
    
    
    <h1> Restaurant </h1>
    
    <form method="POST">
        Pick a restaurant: <br/>
        <?php

            // YOUR CODE GOES HERE
            


        ?>
        <br>
        <input type="submit" name="click">
        <br>
        <br>           
    </form>

    <?php

        //var_dump($_POST);
        
        // YOUR CODE GOES HERE
        if (isset($_POST["click"])){
            
          





            
        }
        
        


    ?>


</body>
</html>