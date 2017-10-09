<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht while</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-opdracht">

    <section class="body">


        <?php
            $getal = 0;
            $getallen = array();
            $deelbaar = array();


            while ($getal <= 100)
            {
            $getallen[] = $getal;
            $getal++;


            if ($getal % 3 == 0 && $getal > 40 && $getal < 80) 
            {
                $deelbaar[] =  $getal;
            }
            }

            $result1 = implode( ' , ', $getallen );
            $result2 = implode(' , ', $deelbaar);

        ?>
            <h1>Opdracht while: deel 1</h1>

            <ul>

                <li>
                    <?php echo $result1 ?>
                </li>

                <li>
                    <?php echo $result2 ?>
                </li>

            </ul>

            <h1>Opdracht while: deel 2</h1>

            <?php
				$counter = 0;
				$boodschappenlijstje =	array( "bananen", "melk", "vanille-ijs", "chocola", "cacao-poeder" );
				
				echo '<ul>';
				while( isset( $boodschappenlijstje [ $counter ] ) ) 
				{
					echo "<li>" . $boodschappenlijstje[$counter] . "</li>";
					$counter++;
				}
				echo '</ul>'
            ?>
    </section>
</body>

</html>
