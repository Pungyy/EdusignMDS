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
    <title>Page Protégée</title>
</head>
<body>
    <h1>Bienvenue sur la page protégée, <?php var_dump($_SESSION['numE']); ?></h1>
    <p>Contenu de la page protégée...</p>
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>