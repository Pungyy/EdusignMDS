<?php
// Inclure la bibliothèque QRcode
include '../bdd/phpqrcode/qrlib.php';

// Générer des codes QR différents
    // Données à encoder dans le QR code (par exemple, des données aléatoires)
    $data = generateRandomData(); // Vous devez implémenter generateRandomData() pour générer des données aléatoires
    $lien = 'http://edusignmds.test/templates/signature.php?id=';
    // Créer le QR code
    QRcode::png($lien . $data);

// Fonction pour générer des données aléatoires
function generateRandomData() {
    return uniqid(); 
}

?>

