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

      foreach(array_keys($_ENV) as &$key) {
        echo "<b>" . $key . ":</b> ";
        echo $_ENV[$key] . "<br>";
      }
     ?>
    
</body>