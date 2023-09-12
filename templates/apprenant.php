<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/apprenant.css">
    

    <title>Connexion Apprenant</title>
</head>
<body>

    <div class="box">
        <div class="logo">
            <img src="../assets/img/logo.png" alt="Logo">
        </div>


        <div class="slideshow-container">

            <div class="mySlides fade" style="display: block;">
                <h1>Scan It</h1>
                <br>
                <p>Pas besoin de feuille de présence utilisez votre téléphone et c'est parti</p>
                <img src="../assets/img/tuto1.png" style="width:150px;">
            </div>

            <div class="mySlides fade">
                <h1>Check It</h1>
                <br>
                <p>Votre signature est confirmée quand vous scannez le QR Code</p>
                <img src="../assets/img/tuto2.png" style="width:150px;">
            </div>

            <div class="mySlides fade">
                <h1>Manage</h1>
                <br>
                <p>Vous pouvez voir vos absences et votre calendrier sur votre dashboard</p>
                <img src="../assets/img/tuto3.png" style="width:150px;">
            </div>

        </div>

        <br>
    
        <div style="text-align:center">

            <span class="dot active" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>

        </div>

    <form action="POST">
        <input type="email" name="email" id="email" placeholder=" Email">
        <input type="password" name="password" id="password" placeholder=" Mot de passe">
        <div class="form-btn">
            <button type="submit">Connexion</button>
        </div>

        <p>Autres options</p>
    </form>

    </div>

</body>
<script src="../assets/js/apprenant.js"></script>
</html>