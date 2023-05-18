<?php

include_once __DIR__ . "/Category.php";
// include_once __DIR__ . "/Toy.php";

class Product extends Category
{
    private $typeof;
    private $price;

    public function __construct($typeof, $category, $price)
    {
        parent::__construct($category->getName(), $category->getImage());

        if($price <=0){
            throw new Exception("il prezzo deve essere maggiore di Zero");
        }


        $this->typeof = $typeof;
        $this->price = $price;
    }

    public function getTypeof()
    {
        return $this->typeof;
    }

    public function getPrice()
    {
        return $this->price;
    }

}

?>