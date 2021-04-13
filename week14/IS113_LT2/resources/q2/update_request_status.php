<?php

require_once 'common.php';   // DO NOT MODIFY THIS LINE

if( isset($_GET['id']) ) {   // DO NOT MODIFY THIS LINE
    
    $id = $_GET['id'];       // DO NOT MODIFY THIS LINE

    // Update the corresponding request in requests database table
    // Your code goes here
    $requestDao = new RequestDAO();
    $requestDao->updateStatus($id, "accepted");

    $request = $requestDao->getRequest($id);

    // Update the corresponding aircon in aircons database table
    // Your code goes here
    $airconDao = new AirconDAO();
//    $aircon = $airconDao->getAircon($request->getAirconId());
    $airconDao->updateLastRequestStatus($request->getAirconId(), "accepted");

    // Forward the user back to manager_view.php
    // Your code goes here
    header("location:manager_view.php");
    exit;
}

?>