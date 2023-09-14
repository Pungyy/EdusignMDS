<?php
    include 'phpqrcode/qrlib.php';

    // Le contenu du QR code (dans cet exemple, un lien vers un site Web)
    $content = 'https://www.example.com';

    // Le nom du fichier de sortie (vous pouvez le personnaliser)
    $filename = '../bdd/qrcode.png';

    // Générez le QR code
    QRcode::png($content, $filename);

    // Affichez le QR code généré
    echo '<img src="' . $filename . '" alt="QR Code">';

    

?>