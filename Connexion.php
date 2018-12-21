<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!empty ($_POST))
{
   $usermodel = new UserModel;
   $user = $usermodel->get($_POST["name"], $_POST["password"]);
   if ($user != NULL)
   {
       session_start(); 
       //Pas eu le temps de finir le système administrateur
   }
   header('Location: Connexion.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Connexion.php" method="POST"> 
        <p>Nom</p>
        <input type="text" name="nom">
        <p>Mot de passe</p>
        <input type="password" name="password">
        <input type="submit" value="submit">
    </form>
</body>
</html>