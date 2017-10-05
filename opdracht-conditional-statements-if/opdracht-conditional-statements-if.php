<?php

    $dag = "deze dag is onbekend";
	$getal 	= 1;
          
    ( $getal == 1 ) ? $dag = 'maandag' : $dag; 
      
    ( $getal == 2 ) ? $dag = 'dinsdag' : $dag; 
      
    ( $getal == 3 ) ? $dag = 'woensdag' : $dag;
      
    ( $getal == 4 ) ? $dag = 'donderdag' : $dag; 
      
    ( $getal == 5 ) ? $dag = 'vrijdag' : $dag; 
      
    ( $getal == 6 ) ? $dag = 'zaterdag' : $dag;
      
    ( $getal == 7 ) ? $dag = 'zondag' : $dag;
?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht conditional statements</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht conditional statements: deel 1</h1>

            <ul>
                <li>
                    <?php echo "Dag " . $getal . " van de week is " . $dag ?>
                </li>
            </ul>

            <h1 class="extra">Opdracht conditional statements: deel 2</h1>

            <?php
                $hoofdletters = strtoupper($dag);
                $hoofdlettersBehalveA = str_replace('A', 'a', $hoofdletters);
                    
                $karakters = strlen($dag);
                $reverse = strrev($dag);
                $positie = $karakters - strpos($reverse, 'a');
                    
                $hoofdlettersBehalveLaatsteA = substr_replace($hoofdletters, 'a' ,($positie-1), 1);
            ?>


                <ul>
                    <li>
                        <?php echo "Dag " . $getal . " van de week is " . $hoofdletters ?>
                    </li>
                    <li>
                        <?php echo "Dag " . $getal . " van de week is " . $hoofdlettersBehalveA  ?>
                    </li>
                    <li>
                        <?php echo "Dag " . $getal . " van de week is " . $hoofdlettersBehalveLaatsteA ?>
                    </li>
                </ul>

        </section>

    </body>

    </html>
