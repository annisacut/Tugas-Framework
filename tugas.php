<!-- nama : Cut Annisa Putri
nim : G.231.21.0193 -->

<?php
class Product {
protected $name;
protected $price;
protected $discount;

public function __construct($price, $name, $discount) {
        $this->price = $price;
        $this->name = $name;
        $this->discount = $discount;
    }


}

class CDMusic extends Product {
    private $artist;
    private $genre;
    
     public function __construct($price, $name, $discount, $artist, $genre) {
        parent::__construct($price, $name, $discount);
        $this->artist = $artist;
        $this->genre = $genre;
    }


    public function addPrice() {
        echo $this->price + ($this->price * 0.1);
        
    }

    public function addDiscount() {
       echo $this->discount + ($this->discount * 0.05);
    }

}

class CDRack extends Product {
    private $capacity;
    private $model;
    
    public function __construct($capacity, $model, $price, $name, $discount) {
       parent::__construct($price, $name, $discount);
        $this->model = $model;
        $this->capacity = $capacity;
    }

    public function addPrice() {
         echo $this->price + ($this->price * 0.15);
        
    }

}

// $cdMusic = new CDMusic(50000, "Name", 5, "Artist-name", "Genre-name");
$cdRack = new CDRack("Capacity-Rack", "Model-Rack", 50000, "Name-Rack", 5);
// $cdMusic->addDiscount()
$cdRack -> addPrice()



?>