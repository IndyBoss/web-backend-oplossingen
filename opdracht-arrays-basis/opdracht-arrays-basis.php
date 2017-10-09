<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht arrays basis</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-opdracht">

    <section class="body">
        <?php

            $dieren = array('kat' , 'hond' , 'vis' , 'paard' , 'varken' , 'vogel' , 'gazelle' , 'wolf' , 'koala' , 'vos');
            $dieren2[0] = 'kat';
            $dieren2[1] = 'hond';
            $dieren2[2] = 'vis';
            $dieren2[3] = 'paard';
            $dieren2[4] = 'varken';
            $dieren2[5] = 'vogel';
            $dieren2[6] = 'gazelle';
            $dieren2[7] = 'wolf';
            $dieren2[8] = 'koala';
            $dieren2[9] = 'vos';

            $voertuigen = array('landvoertuigen' => array('Vespa', 'fiets'), 'watervoertuigen' => array('driemaster', 'surfplank'), 'luchtvoertuigen' => array('luchtballon'));

        ?>
            <h1>Opdracht arrays basis: deel 1</h1>

            <ul>

                <li>
                    <?php echo var_dump($voertuigen) ?>
                </li>

                <li>
                    <p>Wanneer je een <code>var_dump</code> van deze array doet, ziet het resultaat er ongeveer als volgt uit:</p>

                    <ul class="array-notation pre">
                        <li>
                            [ 'landvoertuigen' ] =>
                            <ul>
                                <li>[ 0 ] => 'Vespa'</li>
                                <li>[ 1 ] => 'fiets'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'watervoertuigen' ] =>
                            <ul>
                                <li>[ 0 ] => 'surfplank'</li>
                                <li>[ 1 ] => 'vlot'</li>
                                <li>[ 2 ] => 'schoener'</li>
                                <li>[ 3 ] => 'driemaster'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'luchtvoertuigen' ] =>
                            <ul>
                                <li>[ 0 ] => 'luchtballon'</li>
                                <li>[ 1 ] => 'helicopter'</li>
                                <li>[ 2 ] => 'B52'</li>
                            </ul>
                        </li>
                    </ul>

                </li>

            </ul>

            <?php /*$getallen=a rray(1,2,3,4,5); foreach ($getallen) { }*/ ?>
                <!--<h1 class="extra">Opdracht arrays basis: deel 2</h1>

                <ul>
                    <li>
                        <?php /*echo $getallen*/ ?>
                    </li>

                    <li>
                        <?php /*echo array_product($getallen)*/ ?>
                    </li>

                    <li>Druk de oneven getallen af (controle in script, niet zelf selecteren welke je afdrukt)</li>

                    <li>Maak een tweede array waarin je de getallen 5, 4, 3, 2, 1 in plaatst</li>

                    <li>Tel de getallen uit beide arrays met dezelfde index met elkaar op</li>
                </ul>-->

    </section>

</body>

</html>
