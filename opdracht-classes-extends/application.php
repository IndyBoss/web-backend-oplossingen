<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

	$kikker	=	new Animal('Kermit', 'male', 100);
	$kat	=	new Animal('Dikkie', 'male', 100);
	$kat->changeHealth(-10);
	$dolfijn	=	new Animal('Flipper', 'female', 80);


    //Leeuwen
	$simba = new Lion('Simba', 'male', 100, 'Congo lion');
	$scar = new Lion('Scar', 'female', 100, 'Kenia lion');

    //Zebra's
	$zeke = new Zebra('Zeke', 'male', 120, 'Quagga');
	$zana = new Zebra('Zana', 'female', 100, 'Selous');


	
?>


    <!DOCTYPE html>
    <html>

    <head>
        <title>Oplossing</title>
    </head>

    <body>


        <h1>Instanties van de Animal class</h1>
        <p>
            <?php echo "{$kikker->getName()} is van het geslacht {$kikker->getGender()} en heeft momenteel {$kikker->getHealth()} levenspunten (speciale move: {$kikker->doSpecialMove()})" ?>
        </p>

        <p>
            <?php echo "{$kat->getName()} is van het geslacht {$kat->getGender()} en heeft momenteel {$kat->getHealth()} levenspunten (speciale move: {$kat->doSpecialMove()})" ?>
        </p>

        <p>
            <?php echo "{$dolfijn->getName()} is van het geslacht {$dolfijn->getGender()} en heeft momenteel {$dolfijn->getHealth()} levenspunten (speciale move: {$dolfijn->doSpecialMove()})" ?>
        </p>


        <h1>Instanties van de Lion class</h1>
        <p>
            <?php echo "De speciale move van {$simba->getName()} (soort: {$simba->getSpecies()}): {$simba->doSpecialMove()}" ?>
        </p>

        <p>
            <?php echo "De speciale move van {$scar->getName()} (soort: {$scar->getSpecies()}): {$scar->doSpecialMove()}" ?>
        </p>



        <h1>Instanties van de Zebra class</h1>
        <p>
            <?php echo "De speciale move van {$zeke->getName()} (soort: {$zeke->getSpecies()}): {$zeke->doSpecialMove()}" ?>
        </p>

        <p>
            <?php echo "De speciale move van {$zana->getName()} (soort: {$zana->getSpecies()}): {$zana->doSpecialMove()}" ?>
        </p>



    </body>

    </html>
