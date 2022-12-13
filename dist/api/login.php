<?php
    session_start();

    // Constants
    define('PASS', '0cfbd712ab1a5c57be52900cddfca0f492ea598e');

    // Props
    $heading = 'What is the air-speed velocity of an unladen swallow?';
    $msgs = array('Nope.', 'Try again.', 'Do you even lift Bro?', 'Uh uh.', 'You didn\'t say the magic word.');

    // Simple login logic
    if (!empty($_POST['login'])) {
        if(sha1(filter_var($_REQUEST['pass'], FILTER_SANITIZE_STRING)) === PASS){
            // Store session
            $_SESSION['user'] = true;
            
            // Login time is stored in a session variable
            $_SESSION["loginTimeStamp"] = time(); 
            
            // Redirect back to home
            header('Location: ./../');
            exit;
        }

        $heading = $msgs[rand(0, count($msgs) - 1)];  
    }
?>

<!DOCTYPE html>
<html xml:lang="en-US" lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">
    <head>
        <meta name="robots" content="noindex, nofollow" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <title>Welcome - Sneaky Petes</title>
        <link href="../assets/built/styles/main.built.css" rel="stylesheet">
        <style type="text/css">
            body {
                max-width: 980px;
                width: 90%;
                margin: 0 auto;
                padding-top: 15vh;
                text-align: center;
            }

            h1 {
                margin-top: 40px;
            }

            .logo {
                width: 100%;
                display: block;
                margin: 0 auto;
                max-width: 320px;
            }

            form {
                width: 95%;
                margin: 0 auto;
                margin-top: 40px;
            }

            input {
                display: inline-block;
                margin-top: 25px;
                font-size: 18px;
                padding: 4% 5%;
                min-height: 40px;
            }

            input[type="password"] {
                width: 100%;
                border-radius: 14px;
            }

            input[type="submit"] {
                display: inline-block;
                background-color: #b20001;
                text-align: center;
                text-transform: captialcase;
                outline: none;
                border: 0;
                border-radius: 14px;
                margin-top: 40px;
                color: #fff;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <img class="logo" src="../assets/images/overview/hero_logo.png">

        <h1><?php echo $heading; ?></h1>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="password" name="pass" placeholder="Answer">
            <input type="submit" name="login" value="Let Me In">
        </form>
    </body>
</html>