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

            foreach ($restaurants as $restaurant => $restaurant_info) {
                echo "<input type='radio' name='restaurant' value=$restaurant>$restaurant</input>&nbsp";
                echo "<a href=$restaurant_info[3]>link</a>";
                echo "</br>";
            }

        ?>
        <br>
        <input type="submit" name="click">
        <br>
        <br>           
    </form>

    <?php

        //var_dump($_POST);
        
        // YOUR CODE GOES HERE
        if (isset($_POST["click"]) && isset($_POST["restaurant"])){
            
          $selected_restaurant = $_POST["restaurant"];

          echo "Restaurant selected: $selected_restaurant</br>";

          if (array_key_exists($selected_restaurant, $restaurants)) {
              $restaurant_data = $restaurants[$selected_restaurant];

              if (substr_count($restaurant_data[0], '$') > 1) {
                  echo "+++ EXPENSIVE +++";
              } else {
                  echo "*** cheap ... ***";
              }
          }

            
        }
        
        


    ?>


</body>
</html>