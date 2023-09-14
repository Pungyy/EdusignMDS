<?php
include 'phpqrcode/qrlib.php';

// Générez un nom de fichier unique pour le QR code
$filename = '../assets/img/qrcode/qrcode_' . uniqid() . '.png';

// Le contenu du QR code (dans cet exemple, un lien vers un site Web)
$content = 'https://www.example.com';

// Générez le QR code
QRcode::png($content, $filename);

// Affichez le nom du fichier généré
echo $filename;
?>
