<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/fichePresence.css">
    <?php include_once '../bdd/fichePresenceControleur.php';?>

    <title>Présences</title>
</head>
<body>

    <nav>
        <div class="nav-inter">
            <img src="../assets/img/logo.png" alt="Logo Edusign">
        </div>
    </nav>

    <div class="tableau">
        <h1 style="color: black; margin-bottom: 50px;">Tableau des présences</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom </th>
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
                    <td id="absent"><?= $ligne['estPresent'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

<script>

    var isAbsentElements = document.querySelectorAll("#absent");

    isAbsentElements.forEach(element => {
        if (element.textContent.trim() === "ABSENT") {
            element.style.color = "red";
        } else {
            element.style.color = "green";
        }
    });

       
</script>  

</html>