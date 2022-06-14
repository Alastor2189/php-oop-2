<?php
class Product {
    public $idname;
    public $description;
    public $gr;
    public $price;

    function __construct($_idname, $_description, $_gr, $_price)
    {
        $this->idname = $_idname;
        $this->description = $_description;
        $this->gr = $_gr;
        $this->price = $_price;
    }

    public function productInfo() {
        return "$this->idname | $this->description | $this->gr | $this->price";
    }
}
