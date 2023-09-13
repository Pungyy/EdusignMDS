<?php
session_start();

include '../bdd/connexionEtudiantModele.php';

if (isConnect() == false) {
    header('Location: apprenant.php');
    exit();
}
        
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/loggedEtudiant.css">
    <title>Ma page : <?php echo ($_SESSION['prenomEtudiant']); ?></title>
</head>
<body>
    <nav>
        <div class="nav-inter">
            <img src="../assets/img/logo.png" alt="Logo Edusign">
        </div>

        <div class="dc-btn">
            <img width="40" height="40" src="https://img.icons8.com/ios/50/FFFFFF/exit--v1.png" alt="exit--v1" style="position: absolute; right: 2%; top: 10%;"/>
        </div>
    </nav>
    

    <h1>Bienvenue <?php echo ($_SESSION['prenomEtudiant']); ?></h1>
    <h2>Tu souhaites signer ton prochain cours ? C'est par ici :</h2>

</body>
</html>