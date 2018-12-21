<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once "Intervention.php";
include_once "InterventionModel.php";
$interventions = new InterventionModel;
$all = $interventions->getAll();
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
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Num</th>
                    <th>Salle</th>
                    <th>Description</th>
                    <th>Remarques</th>
                    <th>Demandée le</th>
                    <th>Suivi</th>
                </tr>
            </thead>
            <?php
                foreach($all as $value)
                {
            ?>
            <tbody>
                <tr>
                    <td><a href="Connexion.php">Voir</a></td>
                    <td><?= $value->id ?></td>
                    <td><?= $value->bureau ?></td>
                    <td><?= $value->description ?></td>
                    <td><?= $value->probleme ?></td>
                    <td><?= $value->date ?></td>
                    <td><?= $value->etat ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
</body>
</html>