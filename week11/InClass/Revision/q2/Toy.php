<?php
class Toy {
	private $type;
	private $forAge;

	public function __construct($xtype, $forAge){
    	      $this->type = $xtype;
    	      $this->forAge = $forAge;
	}
	
    public function getType(){
        return $this->type;
    }

    public function getForAge(){
        return $this->forAge;
    }


}
?>
