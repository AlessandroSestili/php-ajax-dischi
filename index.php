<?php


include __DIR__ . '/partials/template/header.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="dist/app.css">

    <title>PHP-AJAX-DISCHI</title>
</head>

<body>
    <div class="discs_wrapper">

        <?php

        foreach ($listaDischi as $currentItem) {
            // var_dump($currentItem);
        ?>
            <div class="discs">

                <img src="<?php echo $currentItem["poster"] ?>" alt="dischi">

                <h5>
                    <?php echo $currentItem["title"] ?>
                </h5>

                <p>
                    <?php echo $currentItem["author"] ?>
                </p>
                <p>
                    <?php echo $currentItem["genre"] ?>
                </p>

                <p>
                    <?php echo $currentItem["year"] ?>
                </p>
            </div>

        <?php
        }
        ?>
    </div>
</body>

</html>