<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once "Intervention.php";
include_once "InterventionModel.php";
$interventions = new InterventionModel;
if (!empty ($_POST))
{
    ?>
    <pre> <?= var_dump($_POST) ?></pre>
    <?php
    $intervention = new Intervention($_POST["nom"], $_POST["bureau"], $_POST["probleme"], $_POST["description"]);
    $id = $interventions->create($intervention);
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
    <p>Votre demande a bien été enregistré sous le numéro: <?= $id ?></p>
</body>
</html>