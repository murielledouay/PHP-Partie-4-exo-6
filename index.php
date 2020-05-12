<?php


?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP Partie 4 exo 6</title>
</head>
<body>
  <?php
  for ($numbers = 1; $numbers <= 100; $numbers++){
    $restDivision = $numbers % 3;
    $result = $numbers;
    $division5 = $numbers % 5;
    if ($restDivision == 0){
    $result = 'Fizz';
    }
    if ($division5 == 0){
    $result = 'Buzz';
    }
    if ($restDivision == 0 && $division5 == 0){
    $result = 'FizzBuzz';
    }
    ?>
    <p><?php echo $result; ?></p>
    <?php } ?>
</body>
</html>
