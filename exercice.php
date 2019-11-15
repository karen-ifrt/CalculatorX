<?php
session_start();
if(!isset($_SESSION['score'])){
$_SESSION['score'] = 0;
}
if(!isset($_SESSION['try'])){
$_SESSION['try'] = 0;
}

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



    <?php

    if (isset($_POST["form"])) {

        $value = $_POST["reponse"];
        $result = $_SESSION['number'] * $_SESSION['random'];
        if ($value == $result) {
            if (isset($_POST["reponse"])) {
                $number = $_SESSION['number'];
                echo '<h1>Table de ' . $number . '</h1>';
                $random = rand(1, 10);
                $result = $number * $random;
                $_SESSION['random'] = $random;
                $_SESSION['number'] = $number;
                echo $number . " x " . $random . "<br>";
            }
            $_SESSION['score'] += 1;
            echo "score : " . $_SESSION['score'];
            echo '<br>';
            echo '<p>Bonne réponse</p>';
            echo '<br>';
            $_SESSION['try'] += 1;
            echo "essai : " . $_SESSION['try'];
        } else {
            if (isset($_POST["reponse"])) {
                $number = $_SESSION['number'];
                echo '<h1>Table de ' . $number . '</h1>';
                $random = rand(1, 10);
                $_SESSION['result'] = $result;
                $result = $number * $random;
                $_SESSION['random'] = $random;
                $_SESSION['number'] = $number;
                echo $number . " x " . $random . "<br>";
            }
            echo "score : " . $_SESSION['score'];
            echo '<br>';
            echo '<p class="bad-answer">Mauvaise réponse. La bonne réponse était ' . $_SESSION['result'] . '</p>';
            echo '<br>';
            $_SESSION['try'] += 1;
            echo "essai : " . $_SESSION['try'];
        }

        if($_SESSION['try'] == 10){
            echo '<br>';
            echo 'essais finis';
            echo '<br>';
            echo 'Votre score est de : ' . $_SESSION['score'];
        }
    }

    ?>

    <form action="exercice.php" method="post" role="form">
        <input type="number" name="reponse">
        <input type="submit" name="form" value="VALIDER">
    </form>

    <a href="retour.php">RETOUR</a>
    <a href="retour.php">REESSAYER</a>

</body>

</html>