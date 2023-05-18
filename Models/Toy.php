<?php

include_once __DIR__ . "/Category.php";
include_once __DIR__ . "/Product.php";




class Toy extends Product
{
    private $genre;

    public function __construct($typeof, $category, $price, $genre)
    {
        parent::__construct($typeof, $category, $price);
        $this->genre = $genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}


?>