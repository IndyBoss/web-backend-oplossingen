<?php
    $getal = 33;
    $min = 0;
    $max = 0;

    if ($getal <= 10) 
    {
        $min = 0;
        $max = 10;
    } 
    elseif ($getal <= 20) 
    {
        $min = 10;
        $max = 20;
    } 
    elseif ($getal <= 30) 
    {
        $min = 20;
        $max = 30;
    }
    elseif ($getal <= 40) 
    {
        $min = 30;
        $max = 40;
    } 
    elseif ($getal <= 50) 
    {
        $min = 40;
        $max = 50;
    }
    elseif ($getal <= 60) 
    {
        $min = 50;
        $max = 60;
    }
    elseif ($getal <= 70) 
    {
        $min = 60;
        $max = 70;
    }
    elseif ($getal <= 80) 
    {
        $min = 70;
        $max = 80;
    }
    elseif ($getal <= 90) 
    {
        $min = 80;
        $max = 90;
    }
    else 
    {
        $min = 90;
        $max = 100;
    }


    $text = "Het getal " . $getal . " ligt tussen " . $min . " en " . $max;
    $omgekeerd = strrev($text);

?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else if</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht if else if: deel 1</h1>

            <ul>
                <li>
                    <?php echo $text ?>
                </li>
                <li>
                    <?php echo $omgekeerd ?>
                </li>
            </ul>

        </section>

    </body>

    </html>
