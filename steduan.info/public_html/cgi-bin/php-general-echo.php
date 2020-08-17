<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello PHP World!</title>
</head>
<body>
    <h1>General Request Echo</h1>
    <?php
      $query = $_SERVER['QUERY_STRING'];
      $protocol = $_SERVER['SERVER_PROTOCOL'];
      $method = $_SERVER['REQUEST_METHOD'];
      echo "<b>Request Method: </b>" . $method . "<br>";
      echo "<b>Protocol: </b>" . $protocol . "<br>";
      echo "<b>Query string:</b>" . $query . "<br>";
      echo "<b>Message body: </b><br>";
      foreach(array_keys($_POST) as $key) {
          echo "<li><b>$key:</b>" . $_POST[$key] . "</li>";
      }
    ?>
    
</body>
</html>