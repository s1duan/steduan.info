<?php
    header('Cache-Control: no-cache');
    header('Content-Type: text/html \n\n');
    session_start();
    session_destroy();
    $_SESSION = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello PHP World!</title>
</head>
<body>
    <h1>Session Destroyed</h1>
    <a href="/php-cgiform.html">PHP CGI Form</a><br />
    <a href="php-session-1.php">Session Page 1</a><br />
    <a href="php-session-2.php">Session Page 2</a><br />
</body>
</html>