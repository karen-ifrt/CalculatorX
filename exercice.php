<?php
session_start();
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}
if (!isset($_SESSION['try'])) {
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
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

    <div class="content">

        <div class="header">
            <div class="title">
                <p>CALCU</p>
                <img src="img/logo-calcX.png" alt="logo">
                <p>LATOR</p>
            </div>
        </div>


        <div class="exo">

            <?php

            if (isset($_POST["submit"])) {
                $number = $_POST['tables'];

                echo '<h1>Table de ' . $number . '</h1>';
                echo '<div class="divider"></div>';

                $random = rand(1, 10);
                $result = $number * $random;
                $_SESSION['random'] = $random;
                $_SESSION['number'] = $number;
                echo '<p class="calcul">' . $number . " x " . $random . "</p><br>";
            }

            ?>




            <?php

            if (isset($_POST["form"])) {

                $value = $_POST["reponse"];
                $result = $_SESSION['number'] * $_SESSION['random'];
                
                if ($value == $result) {
                    if (isset($_POST["reponse"])) {
                        $number = $_SESSION['number'];
                        echo '<h1>Table de ' . $number . '</h1>';
                        echo '<div class="divider"></div>';
                        $random = rand(1, 10);
                        $result = $number * $random;
                        $_SESSION['random'] = $random;
                        $_SESSION['number'] = $number;
                        echo '<p class="calcul">' . $number . " x " . $random . "</p><br>";
                    }
                    $_SESSION['score'] += 1;
                    echo '<p class="right-answer">Bonne réponse !</p>';
                    $_SESSION['try'] += 1;
                } else {
                    if (isset($_POST["reponse"])) {
                        $number = $_SESSION['number'];
                        echo '<h1>Table de ' . $number . '</h1>';
                        echo '<div class="divider"></div>';
                        $random = rand(1, 10);
                        $_SESSION['result'] = $result;
                        $result = $number * $random;
                        $_SESSION['random'] = $random;
                        $_SESSION['number'] = $number;
                        echo '<p class="calcul">' . $number . " x " . $random . "</p><br>";
                    }
                    echo '<p class="wrong-answer"><span>Mauvaise réponse !</span><br><br> La bonne réponse était ' . $_SESSION['result'] . '</p>';
                    $_SESSION['try'] += 1;
                }
            }

            ?>

            <form action="exercice.php" method="post" role="form">
                <input type="number" name="reponse" class="input-value">
                <input type="submit" name="form" value="VALIDER" class="validate">
            </form>

            <?php

            if ($_SESSION['try'] == 10) {
                echo '<p class="score-info">Votre score est de : ' . $_SESSION['score'] . ' sur 10 !</p>';
            }            ?>

            <div class="retry">
                <a href="retour.php" class="hvr-bounce-out"><img src="img/the-btn.png" alt="Retour">
                    <p>RÉESSAYER</p>
                </a>
            </div>

        </div>

    </div>


</body>

</html>