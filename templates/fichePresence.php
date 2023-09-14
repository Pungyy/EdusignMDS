<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/apprenant.css">
    

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
        <?php 
        include_once '../bdd/fichePresenceControleur.php';
        if(empty($etudiants)){
            echo'</table><p> Le tableau est vide. <p> ';
        }else {
        ?>
            <tbody>
            <?php foreach((array)$etudiants as $row):?>
            <tr>
                <td><?php echo $row['nomEtudiant'];?></td>
                <td><?php echo $row['prenomEtudiant'];?></td>
                <td><?php echo $row['dateNaissance'];?></td>
                <td><?php echo $row['estPresent'];?></td>
            </tr>
                <?php endforeach; } ?>
            </tbody>
    </table>
</body>
<script src="../assets/js/apprenant.js"></script>
</html>