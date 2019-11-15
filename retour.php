<?php
session_start();
session_destroy();
$_SESSION['score'] = 0;

header('Location: revision.php');

?>