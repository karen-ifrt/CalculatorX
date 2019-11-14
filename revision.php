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
</head>

<body>

    <div class="image">
        <img src="" alt="logo">
    </div>
    <p>Choisis une table de multiplication à réviser</p>

    <form action="exercice.php" method="post" role="form">
        <select name="tables" id="tables">

            <?php
            for ($i = 1; $i < 16; $i++) {
                echo '<option value="' . $i . '" name="table' . $i . '">Table de ' . $i . '</option>';
            }
            ?>

        </select>

        <input type="submit" name="submit" value="JOUER">

    </form>

    <?php

    if (isset($_POST['submit'])) {

        $_SESSION['test'] = $_POST["tables"];
        
    }



    ?>

    <a href="index.php">RETOUR</a>





</body>

</html>