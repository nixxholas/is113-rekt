<?php

class ConnectionManager {
    private PDO $pdo;

    public function __construct() {
        $servername = 'localhost';
        $dbname = 'week11flower';
        $username = 'root';
        $password = '';
        $port = 3306;
        $url = "mysql:host=$servername;dbname=$dbname;port=$port";
        $this->pdo = new PDO($url, $username, $password);
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}

?>