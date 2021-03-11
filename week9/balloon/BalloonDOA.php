<?php

// this class is a simulation of retrieval of records from some storage (e.g. database).
class BalloonDOA {
    private $balloons;

    public function __construct() {
        $this->balloons = [
                new Balloon("Red","S",2,"oxygen","Red S Oxygen"),
                new Balloon("Red","S",3,"helium","Red S Helium"),
                new Balloon("Red","M",4,"oxygen","Red M Oxygen"),
                new Balloon("Red","M",5,"helium","Red M Helium"),
                new Balloon("Red","L",6,"oxygen","Red L Oxygen"),
                new Balloon("Red","L",7,"helium","Red L Helium"),
                new Balloon("Gold","S",3,"oxygen","Gold S Oxygen"),
                new Balloon("Gold","S",4,"helium","Gold S Helium"),
                new Balloon("Gold","M",5,"oxygen","Gold M Oxygen"),
                new Balloon("Gold","M",6,"helium","Gold M Helium"),
                new Balloon("Gold","L",7,"oxygen","Gold L Oxygen"),
                new Balloon("Gold","L",8,"helium","Gold L Helium"),
                new Balloon("Green","S",4,"oxygen","Green S Oxygen"),
                new Balloon("Green","S",5,"helium","Green S Helium"),
                new Balloon("Green","M",6,"oxygen","Green M Oxygen"),
                new Balloon("Green","M",7,"helium","Green M Helium"),
                new Balloon("Green","L",8,"oxygen","Green L Oxygen"),
                new Balloon("Green","L",9,"helium","Green L Helium")
            ];
    }

   public function getBallonsOnSale() {
       return $this->balloons;
   }
}
