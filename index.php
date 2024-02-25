<?php

    require_once __DIR__.'/classes/Category.php';
    require_once __DIR__.'/classes/Product.php';


    $CatCategory = new Category('🐈');
    $DogCategory = new Category('🐕');

    $ProductTest = new Product(
        'Product Test', 
        'Description of Product Test', 
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.arcaplanet.it%2Ftrixie-tiragraffi-livia-rosa-antico%2Fp&psig=AOvVaw2AEiA83Rkd6It3S2NIByA5&ust=1708987525587000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCNC47uTIx4QDFQAAAAAdAAAAABAH', 
        29.90, 
        '001', 
        10, 
        $CatCategory
    );
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>

    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center ">
                        ARCAPLANET
                    </h1>
                </div>
            </div>
        </div>

    </header>

    <main>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Products</h2>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div src="" class="card-image-top">
                                Immagine
                            </div>

                            <h3>
                                <?php echo $ProductTest->name;?>
                            </h3>

                            <ul>
                                <li>
                                    $ <?php echo $ProductTest->price;?>
                                </li>
                                <li>
                                    Availability: <?php echo $ProductTest->availability;?>
                                </li>
                                <li>
                                   Category: <?php echo $ProductTest->category->name;?>
                                </li>
                                <li>
                                    Sku: <?php echo $ProductTest->sku;?>
                                </li>
                            </ul>

                            <p>
                                Description: <?php echo $ProductTest->description;?>
                            </p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

    </main>


</body>
</html>