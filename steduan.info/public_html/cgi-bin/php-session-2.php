<?php
    header('Cache-Control: no-cache');
    header('Content-Type: text/html \n\n');
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
    <h1>Session 2</h1>
    <?php
      if($_SESSION["username"]){
        echo "<b>name: </b>" . $_SESSION["username"] . "<br>";
      }
      else {
        echo "You didn't set a user name<br>";
      }
     ?>
    <a href="/php-cgiform.html">PHP CGI Form</a><br />
    <a href="php-session-1.php">Session Page 1</a><br />
    <form style="margin-top:30px" action="/cgi-bin/php-destroy-session.php" method="get">
        <button type="submit">Destroy Session</button>
    </form>
</body>
</html>