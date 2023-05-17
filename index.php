<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>


    <div class="container">
        <h1 class="text-center mb-4">Shop Online for our little friends</h1>
        <div class="row">
            <?php

            include 'classes.php';

            foreach ($products as $product) {
                echo '<div class="col-md-4">';
                echo '<div class="card mt-4 text-center">';
                echo '<img src="' . $product->getImage() . '" class="card-img-top" alt="' . $product->getName() . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product->getTypeof() . '</h5>';
                echo '<p class="card-text">Price: €' . $product->getPrice() . '</p>';
                echo '<p class="card-text">Type: ' . $product->getName() . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>