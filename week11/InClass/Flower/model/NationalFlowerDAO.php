<?php
require_once "common.php";

class NationalFlowerDAO
{
    private $connectionManager;

    public function __construct()
    {
        $this->connectionManager = new ConnectionManager();
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

        return $result;
    }

    // To get a list of countries from the database
    // Return : an indexed array of string (country name) 
    public function retrieveCountryList()
    {
        $result = [];
        // $item  = an NationalFlower object 
        foreach ($this->retrieveAll() as $item) {
            $result[] = $item->getCountry();  // a string
        }

        return $result;
    }

    // To retrieve the national flower for a country
    // Return : a string (name of flower)
    // E.g  input parameter = AUSTRIA
    //      return a string =  EDELWEISS
    public function getFlowerByCountry($country)
    {
        // $item  = an NationalFlower object
        foreach ($this->retrieveAll() as $item) {
            if ($item->getCountry() == $country) {
                $result = $item->getFlower();
            }
        }
        return $result; // string
    }

    // To retrieve the list of NationalFlowers objects that have flowers
    // that are similar to what is in the input paramenter
    // Return :an indexed array of NationalFlower objects
    // input parameter : $str e.g ROSE

    public function getCountryWithSimilarFlowers($str)
    {
        $result = [];

        foreach ($this->retrieveAll() as $item) {

            if (strpos($item->getFlower(), $str) !== false) {
                $result[] = $item;
            }
        }

        return $result;

    }


}

?>

