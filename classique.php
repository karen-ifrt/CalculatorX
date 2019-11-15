<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>Mode classique</title>
</head>
<body>
    <div class="image">
        <img src="" alt="logo">
    </div>
    <p>Choisis ta table de multiplication !</p>

<form action="classique.php" method="post" role="form">
    <select name="tables" id="tables">
        <option value="Choix">Choisis une table</option>

    <?php
        $reponse = $_POST["tables"];
        for ($i = 1; $i < 16; $i++) { 
            echo '<option value="'. $i . '" name="table' . $i . '">Table de ' . $i . '</option>'; 
        }
    ?>
 
    </select>

    <input type="submit" name="submit" value="AFFICHER">

</form>


<a href="index.php">RETOUR</a>


<div class="reponse">

<?php 
$result;
if(isset($_POST["submit"])) {
    $reponse = $_POST["tables"];
        
    echo "<br>Table de " . $reponse . "<br> <br>";

    for ($i = 1; $i < 16; $i++) { 
        $result = $reponse * $i;
        echo $reponse . " x " . $i . " = " . $result . "<br>";
    }
    
}
?>
</div>

</body>
</html>