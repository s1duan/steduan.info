<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <?php
      $ipaddress = getenv("REMOTE_ADDR");
      date_default_timezone_set("America/Los_Angeles");
      echo "{\"message\":\"Hello World from PHP!\",";
      echo "\"date\":\"" . date("Y/m/d h:i:sa") . "\",";
      echo "\"IPaddress\":\"" . $ipaddress . "\"}";
     ?>
    
</body>
</html>