<?php
class Book{
    
    private $title;
    private $isbn13;
    private $price;
    
    public function __construct($title,$isbn13,$price){
        $this->title = $title;
        $this->isbn13 = $isbn13;
        $this->price = $price;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getISBN13(){
        return $this->isbn13;
    }
    
    public function getPrice(){
        return $this->price;
    }
}
?>
