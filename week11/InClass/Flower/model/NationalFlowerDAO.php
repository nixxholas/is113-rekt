<?php
require_once "common.php";

class NationalFlowerDAO
{
    private $connectionManager;

    public function __construct()
    {
        $this->connectionManager = new ConnectionManager();
    }

    public function checkNationalFlowersExist($country, $flower) {
        $sql = "select * from NATIONAL_FLOWER where country = :country AND flower = :flower";
        $stmt = $this->connectionManager->getConnection()->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindParam(":country", $country, PDO::PARAM_STR);
        $stmt->bindParam(":flower", $flower, PDO::PARAM_STR);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            if ($row['country'] == $country && $row['flower'] == $flower) {
                $stmt->closeCursor();
                return true;
            }
        }
        $stmt->closeCursor();

        return false;
    }

    public function createNationalFlower($country, $flower) {
        $sql = "insert into NATIONAL_FLOWER value (:country, :flower)";
        $stmt = $this->connectionManager->getConnection()->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindParam(":country", $country, PDO::PARAM_STR);
        $stmt->bindParam(":flower", $flower, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function DeleteNationalFlower($country, $flower) {
        $sql = "delete from NATIONAL_FLOWER where country = :country AND flower = :flower";
        $stmt = $this->connectionManager->getConnection()->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindParam(":country", $country, PDO::PARAM_STR);
        $stmt->bindParam(":flower", $flower, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return true;
    }

    // Return : an indexed array of NationalFlower objects 
    public function retrieveAll()
    {
        $sql = "select * from NATIONAL_FLOWER";
        $stmt = $this->connectionManager->getConnection()->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        $result = [];

        while ($row = $stmt->fetch()) {
            array_push($result, new NationalFlower($row['country'], $row['flower']));
        }

        $stmt->closeCursor();

        return $result;
    }

    // To get a list of countries from the database
    // Return : an indexed array of string (country name) 
    public function retrieveCountryList()
    {
        $sql = "select distinct(country) from NATIONAL_FLOWER";
        $stmt = $this->connectionManager->getConnection()->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        $result = [];
        // $item  = an NationalFlower object 
        while ($row = $stmt->fetch()) {
            $result[] = $row['country'];  // a string
        }

        $stmt->closeCursor();

        return $result;
    }

    // To retrieve the national flower for a country
    // Return : a string (name of flower)
    // E.g  input parameter = AUSTRIA
    //      return a string =  EDELWEISS
    public function getFlowerByCountry($country)
    {
        $sql = "select * from NATIONAL_FLOWER where country = :country";
        $stmt = $this->connectionManager->getConnection()->prepare($sql);
        $stmt->bindParam(':country', $country, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        // $item  = an NationalFlower object
        while ($row = $stmt->fetch()) {
            $flower = new NationalFlower($row['country'], $row['flower']);
            if ($flower->getCountry() == $country) {
                return $flower->getFlower();
            }
        }

        $stmt->closeCursor();

        return null;
    }

    // To retrieve the list of NationalFlowers objects that have flowers
    // that are similar to what is in the input paramenter
    // Return :an indexed array of NationalFlower objects
    // input parameter : $str e.g ROSE
    public function getCountryWithSimilarFlowers($str)
    {
        $sql = "select * from NATIONAL_FLOWER where flower LIKE :flower";
        $stmt = $this->connectionManager->getConnection()->prepare($sql);
        $str = "%" . $str . "%";
        $stmt->bindParam(':flower', $str, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        $result = [];
        // $item  = an NationalFlower object
        while ($row = $stmt->fetch()) {
            $result[] = new NationalFlower($row['country'], $row['flower']);
        }

        $stmt->closeCursor();

        return $result;
    }

    public function UpdateNationalFlower($country, $flower) {
        $sql = "UPDATE NATIONAL_FLOWER set flower = :flower WHERE country = :country";
        $stmt = $this->connectionManager->getConnection()->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindParam(":country", $country, PDO::PARAM_STR);
        $stmt->bindParam(":flower", $flower, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return true;
    }
}

?>

