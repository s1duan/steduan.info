<?php
    header('Cache-Control: no-cache');
    header('Content-Type: text/html\n\n');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello PHP World!</title>
</head>
<body>
    <h1>POST Request Echo</h1>
    <?php
      echo "<b>Message body: </b><br>";
      foreach(array_keys($_POST) as $key) {
          echo "<li><b>$key:</b>" . $_POST[$key] . "</li>";
      }
     ?>
    
</body>
</html>