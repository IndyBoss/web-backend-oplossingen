<?php
	
	session_start();

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

	$connection 	=	 new PDO( 'mysql:host=localhost;dbname=opdracht-security-login', 'Indy', 'Indy' );
	if ( User::validate( $connection ) )
	{
		$message	=	Message::getMessage();
	}
	else
	{
		User::logout();
		new Message('error', 'Er ging iets mis tijdens het inloggen, probeer opnieuw.');
		header( 'location: login-form.php' );
	}

	

	var_dump( $_SESSION );
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="public/css/global.css">
    </head>

    <body>

        <h1>Dashboard</h1>

        <?php if ( isset ( $message ) ): ?>
            <div class="modal <?= $message['type'] ?>">
                <?= $message['text'] ?>
            </div>
            <?php endif ?>

                <p>Hallo,</p>

                <a href="logout.php">uitloggen</a>
    </body>
