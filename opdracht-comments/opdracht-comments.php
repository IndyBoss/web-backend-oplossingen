<?php
	
	$Naam = "Bosschem";
	$Voornaam = "Indy";

    $Mail = "indy.bosschem@student.kdg.be"
?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht comments</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Commentaar:</h1>
            <ul>
                <li>
                    <?php echo $Voornaam . " " . $Naam ?>
                </li>
                <li>
                    <?php echo $Mail ?>
                </li>
            </ul>

        </section>

    </body>

    </html>
