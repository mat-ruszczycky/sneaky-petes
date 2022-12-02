<?php
    // Constants
    define('PASS', 'shhhh');

    // Props
    $heading = 'What...is the air-speed velocity of an unladen swallow?';
    $msgs = array('Nope.', 'Try again.', 'Do you even lift Bro?', 'Uh uh.', 'You didn\'t say the magic word.');

    // Simple login logic
    if (! empty($_POST['login'])) {
        if($_REQUEST['pass'] === PASS){
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

    <style type="text/css">
        body {
            font-family: sans-serif;
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
        }

        input[type="password"] {
            width: 90%;
            padding: 4% 5%;
        }

        input[type="submit"] {
            width: 100%;
            padding: 25px;
        }
    </style>
</head>

<body>
    <h1><?php echo $heading; ?></h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="password" name="pass" placeholder="Answer">
        <input type="submit" name="login" value="Access">
    </form>
</body>

</html>