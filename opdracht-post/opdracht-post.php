<?php

    $password = "123";
    $username = "test";
    $message = "";
    

    if ( isset($_POST['submit']) ) 
    {
        if  ( $_POST['password'] == $password && $_POST['username'] == $username ) 
        {
            $message = "Welkom :D!";
        } else 
        {
            $message = "Er ging iets mis bij het inloggen, probeer opnieuw.";
        }
    }

?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht post</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">
            <h1>Inloggen</h1>

            <form method="post" action="opdracht-post.php">
                <ul>
                    <li>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </li>
                    <li>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </li>
                </ul>
                <input type="submit" name="submit">
                <p>
                    <?php echo $message ?>
                </p>
            </form>
        </section>

    </body>

    </html>
