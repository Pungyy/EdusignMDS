<?php
// Inclure la bibliothèque QRcode
include 'phpqrcode/qrlib.php';
include_once '../bdd/QRcodeModele.php';


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

    $lien = 'http://edusignmds.test:88/templates/signature.php';

    $id = uniqid(); // Utilisation d'un identifiant unique (timestamp)
    $newId =generateRandomId(); 


    // Nom de fichier pour le code QR
    $fileName = "qrcode_$i.png";

    // Chemin complet du fichier de destination
    $filePath = $destinationFolder . $fileName;

    // Générer le code QR
    QRcode::png($lien . $id, $filePath);

    // Afficher le chemin du fichier généré
    echo "QR Code #$i généré : $filePath<br>";

    if(!isset($data)){
        $data = createDatas($id, $lien);
    }else{
        $data = updateDatas($newId, $lien);
    }
}
?>
