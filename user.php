<?php
class User
{
    public $name;
    public $surname;
    public $mail;
    public $telephone;
    public $paycard;
    public $registered;

    function __construct($_name, $_surname, $_telephone, $_mail, $_registered)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->telephone = $_telephone;
        $this->mail = $_mail;
        $this->registered = $_registered;
    }
}
