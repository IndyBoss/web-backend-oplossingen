<?php
	$Naam = "Bosschem";
	$Voornaam = "Indy";

    $volledigeNaam = $Voornaam . " " . $Naam;
?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht string concatenate</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht:</h1>
            <ul>
                <li>
                    <?php echo $volledigeNaam ?>
                </li>
                <li>
                    <?php echo "Lengte: " . strlen($volledigeNaam) ?>
                </li>
            </ul>

        </section>

    </body>

    </html>
