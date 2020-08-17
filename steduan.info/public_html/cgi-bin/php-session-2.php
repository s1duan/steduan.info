<?php
    session_start()
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
    <a href="php-session-1.php">Session Page 1</a><br />
    <button type="submit">Destroy Session</button>
</body>
</html>