<?php
    header('Cache-Control: no-cache');
    header('Content-Type: text/html \n\n');
?>
<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <?php
      $ipaddress = getenv("REMOTE_ADDR");
      $mydate = date("Y-m-d h:i:sa");
      date_default_timezone_set("America/Los_Angeles");
      $myObject->title = "Hello PHP!";
      $myObject->heading = "Hello PHP";
      $myObject->message = "This page was generated with PHP!";
      $myObject->date = "$mydate";
      $myObject->IPaddress = "$ipaddress";

      $myJSON = json_encode($myObject);
      echo $myJSON;
      
     ?>
    
</body>
</html>