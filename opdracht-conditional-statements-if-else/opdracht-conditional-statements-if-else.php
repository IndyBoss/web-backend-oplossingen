<?php
    
    $jaartal = "1900";
    $result = "geen geldig jaartal";

    if ($jaartal % 4 == 0) {
        if ($jaartal % 100 == 0) {
            if ($jaartal % 400 == 0) {
                $result = $jaartal . " is een schrikkeljaar.";
            }
            else {
                $result = $jaartal . " is geen schrikkeljaar.";
            }
        }
        else {
            $result = $jaartal . " is een schrikkeljaar.";
        }
    }
    else {
        $result = $jaartal . " is geen schrikkeljaar.";
    }

    
    
?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht if else: deel 1</h1>

            <ul>
                <li>
                    <?php echo $result ?>
                </li>
            </ul>



            <?php
                $seconden = 221108521;
                $minuten = $seconden/60;
                $uren = $minuten/60;
                $dagen = $uren/24;
                    
                $weken = $dagen/7;
                $maanden = $dagen/31;
                $jaren = $dagen/365;
            ?>
                <h1 class="extra">Opdracht if else: deel 2</h1>

                <ul>
                    <li>Maak een PHP-script dat achterhaalt hoeveel volledige jaren, maanden, weken, dagen, uren, minuten en seconden er in een gegeven aantal seconden zit (bv. 221108521). Hoeft niet met if-statement.</li>

                    <li>
                        Ga er van uit dat een maand 31 dagen kent en een jaar 365 dagen. Het resultaat ziet er ongeveer als volgt uit:

                        <div class="facade-minimal" data-url="http://www.app.local/index.php">

                            <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>

                            <p>in 221108521 seconden</p>

                            <ul>
                                <li>
                                    <?php echo round($minuten,0) . " minuten" ?>
                                </li>
                                <li>
                                    <?php echo round($uren,0) . " uren" ?>
                                </li>
                                <li>
                                    <?php echo round($dagen,0) . " dagen" ?>
                                </li>
                                <li>
                                    <?php echo round($weken,0) . " weken" ?>
                                </li>
                                <li>
                                    <?php echo round($maanden,0) . " maanden" ?>
                                </li>
                                <li>
                                    <?php echo round($jaren,0) . " jaar" ?>
                                </li>
                            </ul>
                        </div>

                    </li>
                </ul>

        </section>

    </body>

    </html>
