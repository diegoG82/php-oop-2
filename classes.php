<?php

// Creo la classe categoria
class Category
{
    private $name;
    private $image;

    public function __construct($name, $image)
    {
        $this->name = $name;
        $this->image = $image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImage()
    {
        return $this->image;
    }
}


// Creo la classe prodotto in estensione a category
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

// Creo le categorie cane e gatto
$categoryCats = new Category("Cats", "./img/cat.png");
$categoryDogs = new Category("Dogs", "./img/dog.png");

// Creo i prodotti per cane e gatto
$product1 = new Product("Cats Food", $categoryCats, 10);
$product2 = new Product("Dogs Food", $categoryDogs, 20);
$product3 = new Product("Cats Couch", $categoryCats, 30);

// Array dei prodotti
$products = [$product1, $product2, $product3];

