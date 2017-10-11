<?php
    
    $text = file_get_contents('text-file.txt');
    $textChars = str_split($text ,1);
    rsort($textChars);
    $textCharsReverse = array_reverse($textChars);

    $teller=[];

	foreach($textCharsReverse as $value)
	{
		if ( isset($teller[$value]))
		{
			++$teller[$value];
		}
		else
		{
			$teller[$value] = 1;
		}
		
	}

?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht foreach</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht foreach: deel 1</h1>

            <ul>
                <li>
                    <?php var_dump($teller) ?>
                </li>
            </ul>

            <h1 class="extra">Opdracht foreach: deel 2</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>

                <li>Maak een variabele <code>$tekst</code> met waarde (volledige inhoud van text-file.txt)</li>

                <li>Analyseer hoe vaak elke letter van het alfabet voorkomt in de tekst (enkel de letters uit het alfabet, geen onderscheid tussen hoofdletters en kleine letters)</li>

                <li>Toon de resultaten op het scherm, bv.

                    <div class="facade-minimal" data-url="http://www.app.local/index.php">

                        <ul>
                            <li>E x 265</li>
                            <li>A x 245</li>
                            <li>...</li>
                        </ul>

                    </div>

                    <p class="tip">Doe wat opzoekingswerk vooraleer je aan deze opdracht begint.</p>
                </li>
            </ul>

        </section>


    </body>

    </html>
