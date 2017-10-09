<?php

    $dieren = array('kat' , 'hond' , 'vis' , 'paard' , 'varken' , 'vogel' , 'gazelle' , 'wolf' , 'koala' , 'vos');
    $count = count($dieren);
    $teZoekenDier = "wolf";
    $gesorteerd = $dieren;
    sort($gesorteerd);
    $zoogdieren = array('wolf', 'varken', 'aap');
    $dierenLijst = array_merge($dieren, $zoogdieren);
    $getallen = array(8, 7, 8, 7, 3, 2, 1, 2, 4);
    $uniek = array_unique($getallen);
    $gesorteerdeGetallen = $uniek;
    rsort($gesorteerdeGetallen);
        
    if (in_array($teZoekenDier, $dieren)) 
    {
        $result = $teZoekenDier . " zit in de array.";
    }
    else 
    {
        $result = $teZoekenDier . " zit niet in de array.";
    }

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht array functies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht array functies: deel 1</h1>

            <ul>
                <li>
                    <?php echo "Er zitten " . $count . " dieren in de array." ?>
                </li>

                <li>
                    <?php echo $result ?>
                </li>

            </ul>

            <h1 class="extra">Opdracht array functies: deel 2</h1>

            <ul>
                <li>
                    <?php echo var_dump($gesorteerd) ?>
                </li>

                <li>
                    <?php echo var_dump($dierenLijst) ?>
                </li>
            </ul>


            <h1 class="extra">Opdracht array functies: deel 3</h1>

            <ul>
                <li>
                    <?php echo var_dump($uniek) ?>
                </li>

                <li>
                    <?php echo var_dump($gesorteerdeGetallen) ?>
                </li>

            </ul>

        </section>

    </body>

    </html>
