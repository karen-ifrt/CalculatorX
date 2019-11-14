<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice</title>
</head>

<body>

    <div class="exo">


        <?php


        if (isset($_POST["submit"])) {
            $number = $_POST['tables'];

            echo '<h1>Table de ' . $number . '</h1>';

            $random = rand(1, 10);
            $result = $number * $random;
            $_SESSION['random'] = $random;
            $_SESSION['number'] = $number;
            echo $number . " x " . $random . "<br>";
        }
        ?>

    </div>

    <form action="exercice.php" method="post" role="form">
        <input type="number" name="reponse">
        <input type="submit" name="form" value="VALIDER">

    </form>

    <?php

    if (isset($_POST["form"])) {

        $value = $_POST["reponse"];
        $result = $_SESSION['number'] * $_SESSION['random'];
        if ($value == $result) {
            echo 'Bonne réponse';
        } else {
            echo 'Mauvaise réponse';
        }
    }

    ?>

    <a href="revision.php">RETOUR</a>

</body>

</html>