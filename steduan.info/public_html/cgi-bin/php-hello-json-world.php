<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello PHP World!</title>
</head>
<body>
    <?php
      $ipaddress = getenv("REMOTE_ADDR");
      date_default_timezone_set("America/Los_Angeles");
      echo "{\"message\":\"Hello World from PHP!\",";
      echo "\"date\":\"" . date("Y/m/d h:i:sa") . "\",";
      echo "\"IPaddress\":\"" . $ipaddress; . "\"}"
     ?>
    
</body>
</html>