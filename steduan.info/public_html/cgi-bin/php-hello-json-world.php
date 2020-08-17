<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <?php
      $ipaddress = getenv("REMOTE_ADDR");
      $date = date("Y/m/d h:i:sa");
      date_default_timezone_set("America/Los_Angeles");
      $myObject->message = "Hello world from PHP!";
      $myObject->date = "$date";
      $myObject->IPaddress = "$ipaddress";

      $myJSON = json_encode($myObject);
      echo $myJSON;
      //echo "{\"message\":\"Hello World from PHP!\",";
      //echo "\"date\":\"" . date("Y/m/d h:i:sa") . "\",";
      //echo "\"IPaddress\":\"" . $ipaddress . "\"}";
     ?>
    
</body>
</html>