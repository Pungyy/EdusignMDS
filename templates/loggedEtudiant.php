<?php
session_start();

include '../bdd/connexionEtudiantModele.php';
include_once '../bdd/QRcodeModele.php';

if (isConnect() == false) {
    header('Location: apprenant.php');
    exit();
}
        
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/loggedEtudiant.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Ma page : <?php echo ($_SESSION['prenomEtudiant']); ?></title>
</head>
<body>
    <nav>
        <div class="nav-inter">
            <img src="../assets/img/logo.png" alt="Logo Edusign">
        </div>

        <div class="dc-btn">
            <img width="40" height="40" src="https://img.icons8.com/ios/50/FFFFFF/exit--v1.png" alt="exit--v1" style="position: absolute; right: 2%; top: 10%;"/>
        </div>
    </nav>
    
    <div class="title">
        <h1>Bienvenue <?php echo ($_SESSION['prenomEtudiant']); ?></h1>
        <h2>Tu souhaites signer ton prochain cours ? C'est par ici :</h2>
        <button id="open">Voir mon QRCode</button>
    </div>


    <div id="modal_container" class="modal-container">
    <div class="modal">
        <h1>QRCode</h1>
        <img src="../bdd/QRcode.php" alt="QR Code" id="qrCode">
        <button id="close">Fermer</button>
    </div>
    </div>
    

    <script>

        const numberOfImages = 2;

        const imageSources = [];

        const basePath = '../assets/img/qrcodes/';

        for (let i = 1; i <= numberOfImages; i++) {
            const imageFileName = `qrcode_${i}.png`;
            const imagePath = basePath + imageFileName;
            imageSources.push(imagePath);
        }

        function changeRandomImage() {
            const randomIndex = Math.floor(Math.random() * imageSources.length);
            const randomImageSource = imageSources[randomIndex];
            image.src = randomImageSource;
            image.alt = 'Random Image';
        }

        const image = document.getElementById('qrCode');

        changeRandomImage();

        setInterval(changeRandomImage, 3000); 

    </script>

</body>

<script src="../assets/js/loggedEtudiant.js"></script>
</html>