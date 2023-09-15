<?php
// Inclure la bibliothèque QRcode
include 'phpqrcode/qrlib.php';

// Dossier de destination pour les fichiers QR Code
$destinationFolder = '../assets/img/qrcodes/';

// Créez le dossier s'il n'existe pas
if (!file_exists($destinationFolder)) {
    mkdir($destinationFolder, 0777, true);
}

// Nombre total de codes QR à générer
$numberOfQRCodes = 10;

// Générez et enregistrez les codes QR
for ($i = 1; $i <= $numberOfQRCodes; $i++) {
    // Générer des données pour chaque code QR (personnalisez cela selon vos besoins)
    $data = "Données du code QR #$i";

    // Nom de fichier pour le code QR
    $fileName = "qrcode_$i.png";

    // Chemin complet du fichier de destination
    $filePath = $destinationFolder . $fileName;

    // Générer le code QR
    QRcode::png($data, $filePath);

    // Afficher le chemin du fichier généré
    echo "QR Code #$i généré : $filePath<br>";
}
?>
