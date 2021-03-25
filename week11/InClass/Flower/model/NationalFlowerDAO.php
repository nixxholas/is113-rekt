<?php

class NationalFlowerDAO {

    private $flowers;

    public function __construct() {
    
        // assume that there is only 1 national flower per country
        $this->flowers = array(
                new NationalFlower('AUSTRALIA', 'YELLOW WATTLE'),
                new NationalFlower('AUSTRIA', 'EDELWEISS'),
                new NationalFlower('BAHAMAS', 'YELLOW ELDER'),
                new NationalFlower('BELGIUM','RED POPPY'),
                new NationalFlower('BELIZE', 'BLACK ORCHID'),
                new NationalFlower('BHUTAN', 'BLUE POPPY'),
                new NationalFlower('BOHEMIA', 'THYME'),
                new NationalFlower('BRAZIL', 'CATTLEYA ORCHID'),
                new NationalFlower('CANADA', 'MAPLE LEAF'),
                new NationalFlower('CHINA', 'PLUM BLOSSOM'),
                new NationalFlower('COLUMBIA', 'CATTLEYA TRIANAE'),
                new NationalFlower('DENMARK', 'MARGUERITE DAISY'),
                new NationalFlower('ECUADOR', 'ROSE'),
                new NationalFlower('ETHIOPIA', 'CALLA LILY'),
                new NationalFlower('FRANCE', 'IRIS'),
                new NationalFlower('GERMANY', 'CORNFLOWER'),
                new NationalFlower('HOLLAND', 'TULIP'),
                new NationalFlower('HONG KONG', 'ORCHID BAUHINIA'),
                new NationalFlower('ITALY', 'LILY'),
                new NationalFlower('JAPAN', 'CHERRY BLOSSOM '),
                new NationalFlower('KYRGYZSTAN', 'TULIP'),
                new NationalFlower('LUXEMBOURG', 'ROSE'),
                new NationalFlower('MALDIVES', 'PINK ROSE'),
                new NationalFlower('POLAND', 'CORN POPPY'),
                new NationalFlower('RUSSIA', 'CAMOMILE'),
                new NationalFlower('SCOTLAND', 'THISTLE'),
                new NationalFlower('SINGAPORE', 'VANDA MISS JOAQUIM ORCHID'),
                new NationalFlower('SPAIN', 'RED CARNATION'),
                new NationalFlower('SWITZERLAND', 'EDELWEISS'),
                new NationalFlower('TURKEY', 'TULIP'),
                new NationalFlower('UKRAINE', 'SUNFLOWER'),
                new NationalFlower('UNITED STATES', 'ROSE')
        );
    
    }

    // Return : an indexed array of NationalFlower objects 
    public function retrieveAll() {
      return $this->flowers;

      // we will replace this with SQL statement to interact with database ... next week
        
    }

    // To get a list of countries from the database
    // Return : an indexed array of string (country name) 
    public function retrieveCountryList(){
       
        $result = [];
        // $item  = an NationalFlower object 
        foreach ($this->flowers as $item){
           $result[] = $item->getCountry();  // a string
        }
    
       return $result;
    }

    // To retrieve the national flower for a country
    // Return : a string (name of flower)
    // E.g  input parameter = AUSTRIA
    //      return a string =  EDELWEISS
    public function getFlowerByCountry($country){
        
       // $item  = an NationalFlower object  
       foreach($this->flowers as $item){
           if ($item->getCountry() == $country){
               $result =   $item->getFlower();
           }   
       }
       return $result; // string
    }
    
    // To retrieve the list of NationalFlowers objects that have flowers
    // that are similar to what is in the input paramenter
    // Return :an indexed array of NationalFlower objects
    // input parameter : $str e.g ROSE

    public function getCountryWithSimilarFlowers($str){
    
        // indexed array of objects
        // objects - NationalFlower Objects

        $result = [];
        
        foreach ($this->flowers as $item){

            if ( strpos($item->getFlower(), $str) !== false ){
                $result[] = $item;    
            }
        }
        
        return $result;

    }


}

?>

