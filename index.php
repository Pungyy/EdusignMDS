<!DOCTYPE html>
<html>
    <head>
        <title>Edusign - Portail Web</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="shortcut icon" href="assets/img/edusign.png" type="image/x-icon">
    </head>
    <body>

        <div class="gallery">

            <div class="left">
                <div class="title-left">
                    <h1>
                        Je suis <br> administrateur·rice
                    </h1>
                </div>
            </div>

            <div class="mid" onclick="location.href='/templates/intervenant';">
                <h1 class="edusign-title">Edusign</h1>
                <div class="title-mid">
                    <h1>
                        Je suis <br> intervenant·e
                    </h1>
                </div>
            </div>

            <div class="right" onclick="location.href='/templates/apprenant';">
                <div class="title-right">
                    <h1>
                        Je suis <br> apprenant·e
                    </h1>
                </div>
            </div>

            <footer>
                    <a href="https://edusign.fr/">
                        <span>Site web</span>
                    </a>
                    &nbsp; - &nbsp;
                    <a href="https://edusign.fr/mentions-legales/">
                        <span>Mentions légales</span>
                    </a>
                    &nbsp; - &nbsp;
                    <a href="https://www.edusign.fr/legal/CGU.pdf">
                        <span>Conditions générales d'utilisation</span>
                    </a>
            </footer>

        </div>





            <?php
                $servername = 'localhost';
                $username = 'root';
                $password = 'root';
                
                //On établit la connexion
                $conn = new mysqli($servername, $username, $password);
                
                //On vérifie la connexion
                if($conn->connect_error){
                    die('Erreur : ' .$conn->connect_error);
                }
                echo 'Connexion réussie';
            ?>
    </body>
</html>