<?php

include_once __DIR__ . "/Category.php";

class Product extends Category
{
    private $typeof;
    private $price;

    public function __construct($typeof, $category, $price)
    {
        parent::__construct($category->getName(), $category->getImage());

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