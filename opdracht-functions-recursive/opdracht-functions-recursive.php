<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht recursive</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-opdracht">

    <section class="body">

        <style>
            img {
                display: block;
                padding: 6px;
                margin: 24px auto;
            }

        </style>

        <h1>Opdracht recursive: deel 1</h1>

        <?php
            
            function Kapitaal($kapitaal,$renteProcent,$looptijd)
            {
                static $jaar = 1;
                static $resultaat = array();

                if ($jaar <= $looptijd )
                {
                    $rente = floor( $kapitaal * ($renteProcent / 100));
                    $nieuwKapitaal = $kapitaal + $rente;
                    $resultaat[$jaar] = "Het nieuwe bedrag bedraagt " . $nieuwKapitaal;

                    $jaar++;

                    return Kapitaal($nieuwKapitaal,$renteProcent,$looptijd);
                }
                else
                {
                    return $resultaat;
                }
            }

            $startKapitaal = 100000;
            $renteVoet = 8;
            $jaren = 10;

            $winst = Kapitaal($startKapitaal,$renteVoet,$jaren );
?>


            <ul>
                <?php foreach($winst as $value): ?>
                    <li>
                        <?php echo $value ?>
                    </li>
                    <?php endforeach ?>
            </ul>

            <?php 	
                    function Kapitaal2( $data )
                    {

                        if ($data['jaren'] <= $data['looptijd'])
                        {
                            $rente = floor( $data['kapitaal'] * ( $data['renteProcent'] / 100 ) );
                            $data['kapitaal'] += $rente;
                            $data['jaar'][$data['jaren']]	= 'Het nieuwe bedrag bedraagt ' . $data['kapitaal'];
                            ++$data['jaren'];

                            return Kapitaal2($data);
                        }
                        else
                        {
                            return $data;
                        }
                    }

                    $winst2 = Kapitaal2( 
                        array('kapitaal'=>$startKapitaal,'renteProcent'=>$renteVoet,'looptijd'=>$jaren,'jaren'=> 1,'jaar'=>array()));

?>
                <h1>Opdracht recursive: deel 2</h1>

                <ul>
                    <?php foreach( $winst2['jaar'] as $value): ?>
                        <li>
                            <?php echo $value ?>
                        </li>
                        <?php endforeach ?>
                </ul>

    </section>

</body>

</html>
