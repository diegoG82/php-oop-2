

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

            require __DIR__ . "/db.php";
            include_once __DIR__ . "/Models/Product.php";
            include_once __DIR__ . "/Models/Category.php";

            foreach ($products as $product) {
                echo '<div class="col-md-4">';
                echo '<div class="card mt-4 text-center">';
                echo '<img src="' . $product->getImage() . '" class="card-img-top mt-2" alt="' . $product->getName() . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product->getTypeof() . '</h5>';
                echo '<p class="card-text">Type of goods: ' . $product->getName() . '</p>';

                try {
                    if ($product->getPrice() <= 0) {
                        throw new Exception("Il prezzo deve essere maggiore di zero");
                    }

                    echo '<p class="card-text">Price: €' . $product->getPrice() . '</p>';
                } catch (Exception $e) {
                    echo '<p class="card-text text-danger ">Price: Error - ' . $e->getMessage() . '</p>';
                }

                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>