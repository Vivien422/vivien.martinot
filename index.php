<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Demande d'intervention</h1>

    <form action="Recapitulatif.php" method="POST">
        <p>Votre nom:</p>
        <input type="text" name="nom" id="nom">
        <p>Bureau n:</p>
        <input type="text" name="bureau" id="bureau">
        <p>Votre probléme concerne:</p>
        <select name="probleme" id="probleme">
                <option value="Un ou plusieurs ordinateur(s)">Un ou plusieurs ordinateur(s)</option>
                <option value="Tous les ordinateurs">Tous les ordinateurs</option>
                <option value="Une imprimante">Une imprimante</option>
                <option value="Autre">Autre</option>
        </select>
        <p>Eventuellement saisissez le ou les numéro(s) d'ordianteur(s) qui pose(nt) un problème</p>
        <input type="text" name="ordinateur" id="ordinateur">
        <p>Décrivez précisément votre probléme</p>
        <textarea name="description" id="description" rows="5" cols="30"></textarea></br></br>
        <input type="submit" name="submit" value="valider">
    </form>
</body>
</html>