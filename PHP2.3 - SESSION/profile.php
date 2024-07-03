<?php
session_start();

if (!isset($_SESSION["loggedUser"])){
    header('Location: index.php');
    exit(); 
}
  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Ravis de vous revoir, <strong><?= $_SESSION["loggedUser"] ?></strong>.</p>
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>