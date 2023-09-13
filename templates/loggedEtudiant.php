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
    <title>Ma page : <?php echo ($_SESSION['prenomEtudiant']); ?></title>
</head>
<body>
    <h1>Bienvenue sur la page protégée, <?php echo ($_SESSION['prenomEtudiant']); ?></h1>
    <p>Contenu de la page protégée...</p>
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>