<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht string extra functions</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-opdracht">

    <section class="body">

        <?php
            $fruit = 'kokosnoot';
            $karakters = strlen($fruit);

            $positie = strpos($fruit, 'o') + 1;
        ?>
            <h1>Opdracht string extra functions: deel 1</h1>

            <ul>
                <li>
                    <?php echo $fruit . " telt: " . $karakters . " karakters." ?>
                </li>
                <li>
                    <?php echo "Positie van de eerste 'o' is " . $positie ?>
                </li>
            </ul>

            <?php
                $fruit = 'ananas';
                $karakters = strlen($fruit);
                    
                $reverse = strrev($fruit);

                $positie = $karakters - strpos($reverse, 'a');
                    
                $FRUIT = strtoupper($fruit);
                    
            ?>
                <h1>Opdracht string extra functions: deel 2</h1>

                <ul>
                    <li>
                        <?php echo "Positie van de laatste 'a' is " . $positie ?>
                    </li>
                    <li>
                        <?php echo $fruit . " in hoofdletters wordt: " . $FRUIT ?>
                    </li>
                </ul>


                <?php
                $lettertje = 'e';
                $cijfertje = 3;
                $langsteWoord = 'zandzeepsodemineralenwatersteenstralen';
            ?>
                    <h1>Opdracht string extra functions: deel 3</h1>

                    <ul>
                        <li>
                            <?php echo "Langste woord met vervangen '" . $lettertje . "' in '" . $cijfertje . "' is " . str_replace($lettertje, $cijfertje, $langsteWoord) ?>
                        </li>
                    </ul>

    </section>

</body>

</html>
