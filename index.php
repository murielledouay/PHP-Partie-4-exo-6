<?php
//déclaration des 2 variables avec les valeur
$object = 'Réunion';
$message = 'Bonjour, nous allons faire le point sur les chiffres en cours.';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 1 exo 1</title>
</head>

<body>

  <p>Objet :
    <?php
    //j'affiche avec echo la variable sur mon navigateur de l'objet
    echo $object;
    ?>
  </p>


  <p>
    <?php
      //j'affiche avec echo la variable du message sur mon navigateur
    echo $message;
    ?>
  </p>

</body>
</html>
