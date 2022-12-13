<?php
    // Constants
    define('PASS', '0cfbd712ab1a5c57be52900cddfca0f492ea598e');

    // Props
    $heading = 'What...is the air-speed velocity of an unladen swallow?';
    $msgs = array('Nope.', 'Try again.', 'Do you even lift Bro?', 'Uh uh.', 'You didn\'t say the magic word.');

    // Simple login logic
    if (! empty($_POST['login'])) {
        if(sha1($_REQUEST['pass']) === PASS){
            session_start();
            $_SESSION['user'] = true;
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
        <link href="../assets/built/styles/main.built.css" rel="stylesheet">
        <style type="text/css">
            body {
                max-width: 980px;
                width: 90%;
                margin: 0 auto;
                padding-top: 15vh;
                text-align: center;
            }

            form {
                width: 95%;
                margin: 0 auto;
                
            }

            input {
                display: inline-block;
                margin-top: 25px;
                font-size: 18px;
                padding: 40px 40px;
            }

            input[type="password"] {
                width: 100%;
                padding: 4% 5%;
                border-radius: 14px;
            }

            input[type="submit"] {
                display: inline-block;
                background-color: #b20001;
                text-align: center;
                text-transform: uppercase;
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
        <h1><?php echo $heading; ?></h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="password" name="pass" placeholder="Answer">
            <input type="submit" name="login" value="Access">
        </form>
    </body>
</html>