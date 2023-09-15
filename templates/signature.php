<?php
session_start();

include '../bdd/connexionEtudiantModele.php';

if (isConnect() == false) {
    header('Location: apprenant.php');
    exit();
}
        
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signature pour <?php echo ($_SESSION['prenomEtudiant']); ?></title>
    <link rel="stylesheet" href="../assets/css/signature.css">
</head>
<body>
    <nav>
        <div class="nav-inter">
            <img src="../assets/img/logo.png" alt="Logo Edusign">
        </div>
    </nav>
    
    <div class="signature">
        <h1>Re <?php echo ($_SESSION['prenomEtudiant']); ?> ! Si tu ne veux pas être marqué absent, signe moi ça</h1>
        <div class="flex-row">
            <div class="wrapper">
                <canvas id="signature-pad" width="200" height="100"></canvas>
            </div>
            <div class="clear-btn">
                <button id="clear"><span> Effacer </span></button>
            </div>
        </div>

        <form method="POST">
            <div class="send-btn">
                <button id="send"><span> Envoyer </span></button>
            </div>
        </form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js" integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
       var canvas = document.getElementById("signature-pad");

       function resizeCanvas() {
           var ratio = Math.max(window.devicePixelRatio || 1, 1);
           canvas.width = canvas.offsetWidth * ratio;
           canvas.height = canvas.offsetHeight * ratio;
           canvas.getContext("2d").scale(ratio, ratio);
       }
       window.onresize = resizeCanvas;
       resizeCanvas();

       var signaturePad = new SignaturePad(canvas, {
        backgroundColor: 'rgb(250,250,250)'
       });

       document.getElementById("clear").addEventListener('click', function(){
        signaturePad.clear();
       })
   </script>

</body>
</html>