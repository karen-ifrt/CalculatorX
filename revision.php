<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mode révision</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="img/favicon.png">
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

        <p class="choix">Choisis une table à réviser !</p>



        <form action="exercice.php" method="post" role="form">4
            <div class="img-list">

                <img src="img/liste.png" alt="Bouton">
                <select name="tables" id="tables">

                    <?php
                    for ($i = 1; $i < 16; $i++) {
                        echo '<option value="' . $i . '" name="table' . $i . '">Table de ' . $i . '</option>';
                    }
                    ?>

                </select>

                <input type="submit" name="submit" value="RÉVISER" class="btn-play">

        </form>

        <?php

        if (isset($_POST['submit'])) {

            $_SESSION['test'] = $_POST["tables"];
        }



        ?>
    </div>

    <div class="return">
        <a href="index.php" class="hvr-bounce-out">
            <img src="img/the-btn.png" alt="Retour">
            <p>RETOUR</p>
        </a>
    </div>
    </div>




</body>

</html>