<?php
    header('Cache-Control: no-cache');
    header('Content-Type: text/html \n\n');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello PHP World!</title>
</head>
<body>
    <h1>Sicong Duan was here! </h1>
    <?php
      $ipaddress = getenv("REMOTE_ADDR");
      date_default_timezone_set("America/Los_Angeles");
      echo "Hello World" . "<br>";
      echo "This program is generated at " . date("Y/m/d h:i:sa") . "<br>";
      echo "Your current IP address is: " . $ipaddress;
     ?>
    
</body>
</html>