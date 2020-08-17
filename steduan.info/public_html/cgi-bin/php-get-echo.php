<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello PHP World!</title>
</head>
<body>
    <h1>GET Request Echo</h1>
    <?php
      $query = $_SERVER['QUERY_STRING'];
      echo "<b>Query string:</b>" . $query;
    ?>
    <?php
      foreach(array_keys($_GET) as $key) {
          echo "<li><b>$key:</b>" . $GET[$key] . "</li>";
      }
     ?>
    
</body>
</html>