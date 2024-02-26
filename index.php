<?php

require_once __DIR__ . "/data/database.php"

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>php-oop-2</title>
</head>

<body>
    <header class="bg-success text-white">
        <div class="text-center py-3">
            <h1>Welcome to the best online shop for your animals</h1>
        </div>
    </header>
    <main class="bg-secondary">
        <div class="products-box container py-5">
            <div class="row">
                <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src=<?= $product->img?>
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->name ?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $product->category->name ?></li>
                            <li class="list-group-item"><?= $product->species->name ?></li>
                            <li class="list-group-item"><?= $product->price ?> $</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link text-decoration-none">Add to cart <i
                                    class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>

    </main>

</body>

</html>