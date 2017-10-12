<?php
    $artikels['titel'] = array("Voor miljoenen aan goud en zilver in Zwitsers afvalwater", "Twee bevallingen op parkeerplaats Burger King in één weekend", "Tourgids gilt het uit als glazen brug op ruim 1.000 meter hoogte onder hem begint te barsten" );

    $artikels['inhoud'] = array(
                                "Het Zwitserse afvalwater is waardevoller dan de geur doet vermoeden. Jaarlijks bevat het afvalwater voor 3 miljoen Zwitserse frank (2,6 miljoen euro) aan goud en zilver. Dat becijferden de vorsers van wateronderzoeksinstituut Eawag.</br></br> Volgens de studie, die vandaag werd voorgesteld, zit er in de Zwitserse waterzuiveringsinstallaties jaarlijks 43 kilogram goud en 3 ton zilver, elk goed voor zowat anderhalf miljoen frank.</br></br>Veel goud is afkomstig uit de goudraffinaderijen in het zuidelijke kanton Ticino - Zwitserland is een van de belangrijkste goudverwerkende landen. “In sommige plaatsen in Ticino is de concentratie van goud in het slib zo hoog dat het de moeite zou kunnen zijn om het te recycleren”, zegt Eawag. Een groot deel van het zilver is dan weer afkomstig van de chemische en de farmaceutische industrie.</br></br>Ook is Zwitserland een belangrijke draaischijf in de grondstoffenhandel. Goud vertegenwoordigde meer dan een kwart van de Zwitserse export vorig jaar",
                                
                                "Een ongewoon toeval op een parkeerplaats van de Burger King in New Jersey. Weliswaar een dag na elkaar, maar twee vrouwen bevielen daar van hun baby. Dezelfde agenten assisteerden bij de bevalling, zo schrijven Amerikaanse media.</br></br>
                                De politie werd vrijdag om 19.30 uur opgeroepen naar het Burger King-restaurant dat op een paar minuten rijden van het ziekenhuis ligt. Een man en vrouw waren op weg naar het St. Claire’s ziekenhuis, maar moesten uitwijken naar de parkeerplaats vanwege een enorme file. Vanaf daar belde de vader in spe naar de alarmlijn 911.</br></br>
                                Detective Scott Tobin vertelt aan News 4 New York: “De vader vertelde ons dat zijn eerste en tweede kind vrij rap kwamen, dus dat ze daarom niet genoeg tijd hadden om naar het ziekenhuis te gaan.” En hij bleek gelijk te hebben. Nog geen tien minuten later zag een jongetje het levenslicht.</br></br>
                                De volgende avond werd Tobin weer opgeroepen naar dezelfde locatie. Weer lag een vrouw op het punt te bevallen. “Mijn collega en ik waren bezig met het papierwerk van de avond ervoor, toen een agent ons opriep. Ik zei dat het echt geen grapje was, maar we moeten weer!”</br></br>
                                Navelstreng</br></br>
                                Baby Braydon was er al bijna toen het politieduo arriveerde. “Ik moest de navelstreng doorknippen, want die zat om zijn nek. Pas toen we zeker wisten dat alles oké was, konden we ze begeleiden naar het ziekenhuis.”</br></br>
                                Pedro Cruz werkte beide avonden bij de betreffende Burger King. “Toen ik het vuilnis naar buiten bracht, zag ik de verlichting. Ik grapte toen nog: vast weer een baby. Een klant kwam binnen en die zei inderdaad: Yeah, er is een baby op komst!”
                                De baby’s zijn allebei gezond en maken het goed. Braydon ligt nog tot woensdag ter observatie in het ziekenhuis.", 
                            
                                "Een Chinese tourgids lijkt de schrik van zijn leven beleefd te hebben toen hij op een glazen brug op meer dan 1.000 meter hoogte plots het glas onder zijn voeten zag barsten. Op beelden is te zien hoe de man zich op handen en voeten in veiligheid probeert te brengen.</br></br> Maar niets was wat het leek. De barstende brug is immers een nieuwe attractie in het oostelijke Taihanggebergte. Met behulp van sensoren en special effects lijkt het of het glas aan het einde van de brug begint te breken als een toerist erover wandelt. Dat moet “het bezoek aan de brug nog spannender maken”, zo klinkt het. Maar bij bezoekers die zich van geen kwaad bewust zijn, veroorzaakt het ook paniek. Zo blijkt toch in een filmpje dat afgelopen weekend viraal ging in China.</br></br>De brug ligt in de Hebei Provincie en is 266 meter lang en 2 meter breed. Ze is gebouwd op een hoogte van 1.180 meter boven de zeespiegel, langsheen een berg.De overheid van Oost Taihang heeft zich al officieel verontschuldigd op zijn WeChat-kanaal voor het incident. Volgens haar hebben de ontwerpers versplinterd glas in een van de lagen van de brug gestoken, zodat het lijkt alsof het glas breekt als je erover stapt. Het maakt zelfs een brekend geluid. De overheid zegt dat het haar “erg spijt dat mensen bang werden”, maar gaat er toch niets aan doen. In de hoop dat meer mensen de brug zullen willen bezoeken om het speciale effect te ervaren.");

    $artikels['afbeelding'] = array("img/1.jpg","img/2.jpg","img/3.jpg");
        
    $artikels['afbeeldingBeschrijving'] = array("Miljoenen aan goud", "Burger king", "Glazen brug");
    
    $artikels['datum'] = array("10 oktober 2017", "09 oktober 2017", "09 oktober 2017");
    
    $artikels['id'] = array('0','1','2');
?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht get</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht get: deel 1</h1>

            <style>
                .articles {
                    width: 100%;
                }
                
                .multiple {
                    float: left;
                    width: 288px;
                    margin: 16px;
                    padding: 16px;
                    box-sizing: border-box;
                    background-color: #EEEEEE;
                }
                
                .multiple:nth-child(3n+1) {
                    margin-left: 0px;
                }
                
                .multiple:nth-child(3n) {
                    margin-right: 0px;
                }
                
                .single img {
                    float: right;
                    margin-left: 16px;
                }
                
                .multiple h1 {
                    margin: 0;
                    font-size: 18px;
                }
                
                .read-more {
                    text-align: right;
                }
                
                .read-more:after {
                    padding-left: 6px;
                    content: ">";
                }

            </style>

            <h1>De krant van vandaag</h1>

            <section class="articles">

                <?php 
    
                        $len = count($artikels['titel']);

                        if ( isset ( $_GET['id'] ) )
                        {
                            $id = $_GET['id'];
                            if (in_array($id, $artikels['id'])) {

                                echo "<article class='single'>";
                                    echo "<h1>" . $artikels['titel'][$id] . "</h1>";
                                    echo "<p>" . $artikels['datum'][$id] . "</p>";
                                    echo "<img src='" . $artikels['afbeelding'][$id] . "' alt='" . $artikels['afbeeldingBeschrijving'][$id] . "'>";
                                    echo "<p>" . $artikels['inhoud'][$id] . "</p>";
                                    echo "<p><a href=opdracht-get.php>< terug</a></p>";
                                echo "</article>";
                             } else { echo "<article class='single'><h1>Artikel met id:" . $id . " bestaat niet."; }
                            
                        } else {
                                $id = 0;
                                for ( $i=0; $i < $len; $i++ )
                                {
                                    echo "<article class='multiple'>";
                                        echo "<h1>" . $artikels['titel'][$id] . "</id>";
                                        echo "<p>" . $artikels['datum'][$id] . "</p>";
                                        echo "<img src='" . $artikels['afbeelding'][$id] . "' alt='" . $artikels['afbeeldingBeschrijving'][$id] . "'>";
                                        echo "<p>" . substr($artikels['inhoud'][$id],0, 50) . "...</p>";
                                        echo "<p class='read-more'><a href=opdracht-get.php?id=" . $id . ">Lees meer</a></p>";
                                    echo "</article>";
                                    $id++;
                                }
                        }
                                
                    ?>

            </section>

            <li>
                <h2>Stap 3: artikeldata door PHP uitlezen</h2>
                <ul>
                    <li>Gebruik nu de <code>$artikels</code> array om op dynamische manier de inhoud voor elk artikel in de HTML-structuur te gieten die je daarnet hebt aangemaakt
                        <ul>
                            <li>Werk in je HTML met een <code>foreach</code> <span class="tip">Gebruik de shorthand-notatie</span></li>
                            <li>In deze <code>foreach</code> zet je de inhoud (titel, inhoud, datum, image-src) op de juiste plaats.</li>
                            <li>Toon in plaats van de volledige inhoud, enkel de eerste 50 karakters, gevolgd door een ellipsis: ...</li>
                            <li>Onder de inhoud komt een link 'lees meer'
                                <ul>
                                    <li>het <code>a</code> element heeft als <code>href</code> value <code>"index.php?id=0"</code></li>
                                    <li>Waarbij de <code>id</code> value overeenstemt met de key in de <code>$artikels</code> array</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                <li class="extension">Zorg ervoor dat wanneer er naar een id gesurft wordt dat niet bestaat (bv. <code>"index.php?id=1nj3ct10n"</code>), er een boodschap "Dit artikel bestaat niet" wordt getoond.</li>

                <li class="extension">Zorg ervoor dat je kan zoeken in de artikels.
                    <ul>
                        <li>Maak een formulier met een zoek-veld.</li>
                        <li>Controleer of het formulier gesubmit is</li>
                        <li>Als het gesubmit is, moet er in de arrays gezocht worden of het woord in de <code>$artikels</code> array voorkomt.
                            <p>Probeer eerst te controleren of het woord in de inhoud voorkomt, als dat werkt kan je eventueel uitbreiden met titel, datum, ...</p>
                        </li>
                        <li>Als het woord voorkomt moeten de betreffende artikels getoond worden.</li>
                        <li>Als het woord niet voorkomt moet de gepaste boodschap getoond worden: "De zoekterm 'zoekterm' komt niet voor in onze krant"</li>
                    </ul>
                </li>
                </ul>

    </body>

    </html>
