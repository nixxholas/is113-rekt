<?php

    // use this as a test file to testout your DAO.

    require_once "model/NationalFlower.php";  // class template - NationalFlower.
    
    require_once "model/NationalFlowerDAO.php";
    

    // 1. create a National Flower object - country = KOREA, flower = flower1

    //$flower = new NationalFlower("KOREA", "flower1");

    //var_dump($flower);
    
    // 2. create an object from NationalFlowerDAO class.
    // What will it return 

    //$nationalflowerdao = new NationalFlowerDAO();

    //var_dump($nationalflowerdao);


    $flower1 = new NationalFlower("Singapore", "Singapore Orchid");

    $city = $flower1->getFlower();

    echo $flower1->getFlower();

    echo "<br/>";

    echo "{$flower1->getFlower()}";


    


    
?>