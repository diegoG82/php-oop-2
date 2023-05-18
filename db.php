<?php
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";

// Creo le categorie cane e gatto
$categoryCats = new Category("Cats", "./img/cat.png");
$categoryDogs = new Category("Dogs", "./img/dog.png");

// Array dei prodotti
$products = [];

try {
    // Creo i prodotti per cane e gatto
    $product1 = new Product("Cats Food", $categoryCats, 10);
    $product2 = new Product("Dogs Food", $categoryDogs, 20);
    $product3 = new Product("Cats Couch", $categoryCats, 30);
    $product4 = new Product("Cats Ball", $categoryCats, 10);
    $product5 = new Product("Dogs Game", $categoryDogs, 20);
    $product6 = new Product("Cats Game", $categoryCats, 20);

    // Aggiungo i prodotti all'array
    $products = [$product1, $product2, $product3, $product4, $product5, $product6];
    // Inserisco il catch in caso di errore
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}

?>


