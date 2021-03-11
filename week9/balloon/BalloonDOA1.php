<?php

// this class is a simulation of retrieval of records from some storage (e.g. database).
class BalloonDOA {

    public  function getBallonsOnSale() {
        $sql = 'SELECT * FROM balloon';
        
        $connMgr = new ConnectionManager();          
        $conn = $connMgr->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = [];

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch()) {
            //new Balloon("Red","S",2,"oxygen","Red S Oxygen"),
            $result[] = new Balloon($row['color'], $row['size'], $row['price'], 
                        $row['gas'], $row["descr"]);
        }

        $stmt->closeCursor();
        $conn = null;

        return $result;
    }

}
