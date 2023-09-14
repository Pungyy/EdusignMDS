<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/apprenant.css">
    <?php include_once '../bdd/fichePresenceControleur.php';?>

    <title>Présences</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th> Nom</th>
                <th> Prénom </th>
                <th>Date de Naissance</th>
                <th>Présence</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($donnees as $ligne) : ?>
            <tr>
                <td><?= $ligne['nomEtudiant'] ?></td>
                <td><?= $ligne['prenomEtudiant'] ?></td>
                <td><?= $ligne['dateNaissance'] ?></td>
                <td><?= $ligne['estPresent'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
<script src="../assets/js/apprenant.js"></script>
</html>