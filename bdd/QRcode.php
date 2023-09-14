<?php
require_once '../bdd/bd.inc.php'; // Lien vers le fichier de connexion de la base de données
include 'phpqrcode/qrlib.php';

// Récupérer le lien depuis la base de données (remplacez ceci par votre logique de récupération)
$link = 'test.com';

// Générer un nom de fichier unique pour le QR code
$filename = '../assets/img/qrcode/qrcode_' . uniqid() . '.png';

// Générer le QR code
QRcode::png($link, $filename);
echo $filename; // Renvoyer le nom du fichier généré
?>
