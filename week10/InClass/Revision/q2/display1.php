<?php

  require_once "Restaurant.php";

  $new_rest = new Restaurant ("Fat Cow", "$$$$$", "https://www.fatcow.com.sg/");
  
  echo "Restaurant is : {$new_rest->getName()}";
  echo "<br>";
  echo "Expensive : {$new_rest->getExpensive()}";
  echo "<br>";
  $url = $new_rest->getURL();
  echo "URL is : <a href={$new_rest->getURL()}>{$new_rest->getName()}</a>";

?>
