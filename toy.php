<?php 
require_once __DIR__ . "/product.php";

class animalToy extends Product {
    public $idToy;
    public $typeToy;
    public $colorToy;

    public function __construct($_idname, $_description, $_gr, $_price, $_idToy, $_typeToy, $_colorToy)
    {
        parent::__construct($_idname, $_description, $_gr, $_price);
        $this->idToy = $_idToy;
        $this->typeToy = $_typeToy;
        $this->colorToy = $_colorToy;
    }

    public function productInfo() {
        return "$this->idname | $this->description | $this->gr | $this->price | $this->idToy | $this->typeToy | $this->colorToy";
    }
}
