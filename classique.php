<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mode classique</title>
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

        <p class="choix">Choisis la table à afficher !</p>

        <form action="classique.php" method="post" role="form">
            <div class="img-list">
                <img src="img/liste.png" alt="Bouton">
                <select name="tables" id="tables">
                    <option value="Choix" class="choice">Table à choisir</option>

                    <?php
                    $reponse = $_POST["tables"];
                    for ($i = 1; $i < 16; $i++) {
                        echo '<option value="' . $i . '" name="table' . $i . '">Table de ' . $i . '</option>';
                    }
                    ?>

                </select>
                <input type="submit" name="submit" value="AFFICHER" class="btn-show">

            </div>

            <div class="reponse">

                <?php
                $result;
                if (isset($_POST["submit"])) {
                    $reponse = $_POST["tables"];

                    echo "<br><h3>Table de " . $reponse . "</h3>";
                    echo '<div class="divider"></div>';

                    for ($i = 1; $i < 16; $i++) {
                        $result = $reponse * $i;
                        echo "<p>" . $reponse . " x " . $i . " = " . $result . "</p><br>";
                    }
                }
                ?>
            </div>



            <div class="return">
                <a href="index.php" class="hvr-bounce-out"><img src="img/the-btn.png" alt="Retour">
                    <p>RETOUR</p>
                </a>
            </div>

        </form>
    </div>






</body>

</html>