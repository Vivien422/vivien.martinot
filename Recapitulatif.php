<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (empty ($_POST))
{
   header('Location: index.html');
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
    <h1>Récapitulatif</h1>

    <form action="Confirmation.php" method="POST">
        <p>Votre nom: <?= $_POST["nom"] ?></p>
        <p>Numéro de la salle: <?= $_POST["bureau"] ?></p>
        <input type="hidden" name="nom" value="<?= $_POST['nom'] ?>"/>
        <input type="hidden" name="bureau" value="<?= $_POST['bureau'] ?>"/>
        <textarea name="probleme" cols="30" rows="10">Il y a un problème sur <?= $_POST["probleme"] ?> : <?= $_POST["ordinateur"] ?></textarea>
        <textarea name="description" cols="30" rows="10"><?= $_POST["description"] ?> </textarea>
        <input type="submit" name="submit" value="Je comfirme ma demande d'intervention">
    </form>
</body>
</html>