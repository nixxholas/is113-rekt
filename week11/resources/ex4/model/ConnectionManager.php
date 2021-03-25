<?php
class ConnectionManager {

  /*public function getConnection() {
    // store the ini file outside of www folder
    $conf = parse_ini_file($_SERVER["DOCUMENT_ROOT"] . "/../private/database.ini"); 
    //print_r($conf);
    $dsn="mysql:host={$conf['host']};dbname={$conf['dbname']}";    
    return new PDO($dsn,$conf['username'],$conf['password']);  
  }*/

  public function getConnection() {
    $dsn = "mysql:host=localhost;dbname=week11";
    $pdo = new PDO($dsn, "root", ""); 
    return $pdo;
}
 
}
?>