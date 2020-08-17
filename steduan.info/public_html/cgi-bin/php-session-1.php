<?php
    session_start();
    $session_ID = session_id();

    # create cookie from session id
    setcookie($session_ID);
    $name = $_POST["username"];
    $_SESSION["username"] = $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello PHP World!</title>
</head>
<body>
    <h1>Session 1</h1>
    <?php
      echo "<b>name: </b>" . $_SESSION["username"];
     ?>
    <a href="/php-cgiform.html">Perl CGI Form</a><br />
</body>
</html>