<?php
    if (! empty($_POST["login"])) {
       if($_REQUEST['pass'] === 'laughOrDie'){
            echo 'Good';
            session_start();
            $_SESSION['user'] = true;
            header("Location: ./../");
            exit;
       } else {
            echo 'Bad';
       }
       
    } else {
        echo "Login";
    }
?>

<!DOCTYPE html>
<html xml:lang="en-US" lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">

<head>
    <meta name="robots" content="noindex, nofollow" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="password" name="pass">
        <input type="submit" name="login">
    </form>
</body>

</html>