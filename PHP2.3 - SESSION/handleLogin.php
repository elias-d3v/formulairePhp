<?php

$username = 'eliasbibapro@gmail.com';
$password = '123456';

session_start();

if (isset($_POST["email"]) && !empty($_POST["email"]) && 
    isset($_POST["password"]) && !empty($_POST["password"]))
{

    if($_POST["email"] !== $username)
    {
        header('Location: index.php?errorMail=Votre%20email%20est%20incorrect');
                exit();
    } 
    elseif ($_POST["password"] !== $password)
    {
        header('Location: index.php?errorPassword=Votre%20mot%20de%20passe%20est%20incorrect');
        exit();    
    } 
       else 
        {
            $_SESSION["loggedUser"] = $username;
            header('Location: profile.php');
            exit(); 
        }

} 
else
{
    header('Location: index.php?errorEmpty=Merci%20de%20remplir%20les%20champs%20de%20connexion');
    exit(); 
}
?>


