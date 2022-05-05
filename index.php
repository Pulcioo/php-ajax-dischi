<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>PHP Ajax Dischi</title>
</head>
<body>
    <!-- Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP,
    che stampa direttamente i dischi in pagina:
    al caricamento della pagina ci saranno tutti i dischi. -->

    <!-- Seconda Milestone: Attraverso l’utilizzo di axios: 
    al caricamento della pagina axios chiederà, attraverso una chiamata api, 
    i dischi a php e li stamperà attraverso vue. -->

    
    <?php
        include 'database.php';
    ?>

    <div class="header">
        <img src="img/spotify-logo.png" alt="logo">
    </div>

    <div class="disc-container">
        <?php   foreach($database as $disc){  ?>
        
            <div class="disc">
                <img src="<?php echo $disc["poster"] ?>" alt="">
                <h2> <?php echo $disc["title"]?> </h2>
                <div class="text-bottom">
                    <p> <?php echo $disc["author"]?> </p>
                    <p> <?php echo $disc["year"]?> </p>
                </div>
            </div>  


        <?php   }  ?>
    </div>
</body>
</html>