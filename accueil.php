<?php
require_once "database.php";
$sections= get_formation();






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JPO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2>Formulaire de contact</h2>

    <form action="trajet.php" method="get">
        <label for="section">Nom de section</label>
        <select name="section" id="section">
            <option>- Choisir une Section -</option>
            <!-- cette boucle sert a afficher les données prises de la base de donnée -->
            <?php
                foreach($sections as $section){ ?>
                <option value="<?= $section['id'] ?>"><?= $section['nomSection'] ?></option>
            <?php } ?>
        </select>

        <input type="submit" value="Valider"></input> 
    </form>
</body>
</html>


