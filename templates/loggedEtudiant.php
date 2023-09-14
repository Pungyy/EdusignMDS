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
        <img src="../bdd/QRcode.php"alt="QR Code">
        <button id="close">Fermer</button>
    </div>
    </div>
    

    <script>
        // Fonction pour charger le QR code
        function loadQRCode() {
            setTimeout(function(){
            '../bdd/QRcode.php'.reload();
            }, 5000);
        }

        // Charger le QR code au chargement de la page
        loadQRCode();

        // Recharger le QR code toutes les 30 secondes
        setInterval(loadQRCode, 3000);
    </script>

</body>

<script src="../assets/js/loggedEtudiant.js"></script>
</html>
