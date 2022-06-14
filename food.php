<?php
require_once __DIR__ . "/product.php";


class food extends Product
{
    public $animal;
    public $deadline;

    function __construct($_idname, $_description, $_gr, $_price, $_animal, $_deadline)
    {
        parent::__construct($_idname, $_description, $_gr, $_price);
        $this->animal = $_animal;
        $this->deadline = $_deadline;
    }

    public function productInfo()
    {
        return "$this->idname | $this->description | $this->gr | $this->price | $this->animal | $this->deadline";
    }
}
