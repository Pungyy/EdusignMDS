<?php
session_start();

include '../bdd/connexionProfModele.php';

if (isConnect() == false) {
    header('Location: intervenant.php');
    exit();
}
        
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Protégée</title>
</head>
<body>
    <h1>Bienvenue sur la page protégée, <?php echo ($_SESSION['prenomProf']); ?></h1>
    <p>Contenu de la page protégée...</p>
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>