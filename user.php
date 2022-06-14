<?php
class User
{
    public $name;
    public $surname;
    public $mail;
    public $telephone;
    public $deadlinepaycard;
    public $registered;
    public $shopCart = [];

    function __construct($_name, $_surname, $_telephone, $_mail, $_registered)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->telephone = $_telephone;
        $this->mail = $_mail;
        $this->registered = $_registered;
    }

    function addShopCart($_shopCart)
    {
        $this->shopCart[] = $_shopCart;
    }



    function finalPrice($registered)
    {
        $final_price = 0;
        foreach ($this->shopCart as $item) {
            $final_price += $item->price;
        }
        if ($registered === "true") {
            return $final_price - ($final_price * 0.20);
        } else {
            return $final_price;
        }
    }

    function autorize()
    {
        return !$this->deadlinepaycard;
    }
}
