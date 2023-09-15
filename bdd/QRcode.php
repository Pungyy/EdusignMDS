<?php
// Inclure la bibliothèque QRcode
include '../bdd/phpqrcode/qrlib.php';

// Générer des codes QR différents
    // Données à encoder dans le QR code (par exemple, des données aléatoires)
    $data = generateRandomData(); // Vous devez implémenter generateRandomData() pour générer des données aléatoires

    // Créer le QR code
    QRcode::png($data);

// Fonction pour générer des données aléatoires
function generateRandomData() {
    return uniqid(); 
}

?>

