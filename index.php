<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body>


    <div class="container">
        <h1 class="text-center mb-4 mt-4">Shop Online for our little Friends</h1>
        <div class="row">
            <?php

            // include_once __DIR__ . '/classes.php';
            include_once __DIR__ . "/Models/Product.php";
            include_once __DIR__ . "/Models/Category.php";

            // Creo le categorie cane e gatto
            $categoryCats = new Category("Cats", "./img/cat.png");
            $categoryDogs = new Category("Dogs", "./img/dog.png");

            // Creo i prodotti per cane e gatto
            $product1 = new Product("Cats Food", $categoryCats, 10);
            $product2 = new Product("Dogs Food", $categoryDogs, 20);
            $product3 = new Product("Cats Couch", $categoryCats, 30);
            $product4 = new Product("Cats Ball", $categoryCats, 10);
            $product5 = new Product("Dogs Game", $categoryDogs, 20);
            $product6 = new Product("Cats Game", $categoryCats, 30);

            // Array dei prodotti
            $products = [$product1, $product2, $product3, $product4, $product5, $product6];


            // Ciclo foreach per visualizzare le card
            foreach ($products as $product) {
                echo '<div class="col-md-4">';
                echo '<div class="card mt-4 text-center">';
                echo '<img src="' . $product->getImage() . '" class="card-img-top mt-2" alt="' . $product->getName() . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product->getTypeof() . '</h5>';
                echo '<p class="card-text">Price: €' . $product->getPrice() . '</p>';
                echo '<p class="card-text">Type of goods: ' . $product->getName() . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            
            ?>
        </div>
    </div>
</body>

</html>