<?php
    session_start();
    $session_ID = session_id();

    # create cookie from session id
    setcookie($session_ID);
    if ($_SESSION['username']){
        $name = $_SESSION['username'];
    }
    else {
        $name = $_POST["username"];
    }
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
      if(strlen($_SESSION["username"]) > 0){
        echo "<b>name: </b><br>" . $_SESSION["username"];
      }
      else {
        echo "You didn't set a user name<br>";
      }
     ?>
    <a href="/php-cgiform.html">Perl CGI Form</a><br />
    <a href="php-session-2.php">Session Page 2</a><br />
    <button type="submit">Destroy Session</button>
</body>
</html>