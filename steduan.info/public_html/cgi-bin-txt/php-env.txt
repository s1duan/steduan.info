<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello PHP World!</title>
</head>
<body>
    <h1>Environment Variable </h1>
    <?php
      echo "<ul>";
      foreach(array_keys($_ENV) as &$key) {
        echo "<li>";
        echo "<b>" . $key . ":</b> " . $_ENV[$key];
        echo "</li>";
      }
      echo "</ul>";
     ?>
     <h1>Server Variables</h1>
     <?php
      echo "<ul>";
      foreach(array_keys($_SERVER) as &$key) {
        echo "<li>";
        echo "<b>" . $key . ":</b> " . $_SERVER[$key];
        echo "</li>";
      }
      echo "</ul>";
     ?>
    
</body>