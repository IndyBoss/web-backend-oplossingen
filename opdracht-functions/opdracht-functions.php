<?php
    function berekenSom ($getal1, $getal2) 
    {   
        $result = $getal1 + $getal2;
        
        return $result;
    }

    function vermenigvuldig ($getal1, $getal2) 
    {   
        $result = $getal1 * $getal2;
        
        return $result;
    }

	function isEven($getal) 
	{
	
		if ($getal % 2 > 0)
		{
			return false;
		}
		return true;
	}

    function string($string) 
    {
        $result['lengte'] = strlen($string);
        $result['uppercase'] = strtoupper($string);
        
        return $result;
    }

    $testString = "Dit is een testzin.";
    $resultString = string($testString);
?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht functies: deel 1</h1>
            <p>De getallen zijn 2 en 4.</p>

            <ul>

                <li>Maak een functie <code>berekenSom</code> die 2 parameters heeft, <code>$getal1</code> en <code>$getal2</code>

                    <ul>
                        <li>
                            <?php echo berekenSom(2,4) ?>
                        </li>
                    </ul>
                </li>


                <li>Maak een functie <code>vermenigvuldig</code> die 2 parameters heeft, <code>$getal1</code> en <code>$getal2</code>

                    <ul>
                        <li>
                            <?php echo vermenigvuldig(2,4) ?>
                        </li>
                    </ul>
                </li>

                <li>Maak een functie <code>isEven</code> met 1 parameter <code>$getal</code>

                    <ul>
                        <li>
                            <?php echo isEven(2) ?>
                        </li>
                    </ul>
                </li>

                <li class="extension">Maak een functie aan die de lengte én de uppercase-versie van een string returnt. Druk daarna de lengte en de uppercase-versie van de string af buiten de functie. <span class="tip">return een array.</span>

                    <ul>
                        <li>
                            <?php echo "De string '" . $testString . "' in hoofletters is '" . $resultString['uppercase'] . "' en is " . $resultString['lengte'] . " karakters lang." ?>
                        </li>
                    </ul>
                </li>

            </ul>

            <h1 class="extra">Opdracht functies: deel 2</h1>

            <ul>
                <li>Maak een functie <code>drukArrayAf</code> die 1 parameter heeft, <code>$array</code></li>

                <li>Deze <code>$array</code> bevat enkele waarden die je zelf mag kiezen</li>

                <li>Zorg ervoor dat je uiteindelijk tot dit resultaat komt:

                    <ul>
                        <li>
                            <div class="facade-minimal" data-url="http://www.app.local/index.php">

                                <h1>Opdracht functies</h1>

                                <p>helden[ 0 ] heeft waarde 'Elon Musk'</p>

                            </div>

                        </li>

                        <li>De naam van de array afdrukken is niet zo belangerijk (mag hardcoded of via een andere inventieve manier)</li>

                        <li class="extension">Zorg ervoor dat je ook meerdimensionale arrays kan afdrukken op dezelfde manier</li>
                    </ul>
                </li>

                <li>Maak een functie <code>validateHtmlTag</code> die 1 parameter heeft, <code>$html</code>

                    <ul>
                        <li>Zorg ervoor dat deze functie kan valideren of er een correcte &lt;html&gt;&lt;/html&gt; tag aanwezig is in de gegeven string <code>$html</code></li>
                    </ul>
                </li>

                <li>Voer al deze functies uit en zorg ervoor dat de resultaten op het scherm verschijnen</li>

            </ul>

        </section>

    </body>

    </html>
