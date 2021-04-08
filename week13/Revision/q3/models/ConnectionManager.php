<?php

class ConnectionManager {

  public function getConnection() {
    $servername = 'localhost';
    $dbname = 'week13q3';
    $username = 'root';
    $password = '';
    $port = 3306;
    $url  = "mysql:host=$servername;dbname=$dbname;port=$port";

    
    return new PDO($url, $username, $password);
  }

}

?>