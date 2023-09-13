<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/intervenant.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="nav-inter">
            <img src="../assets/img/logo.png" alt="">
        </div>
    </nav>

    <?php
        if(isset($msgerr)){
            echo $msgerr;
        }

    ?>

    <div class="container">

        <form class="form" method="post" action="../bdd/connexionProfControleur.php">

            <div class="intervenant">
                <h1>CONNEXION <br> <b>INTERVENANT</b></h1>
            </div>

            <div class="inputs">
                <input type="email" name="email" placeholder="ex. darthvader@gmail.com">
            </div>

            <div class="inputs2">
                <input type="password" name="password" placeholder="*****">
            </div>
            
            <div class="forgot">
                <p>Se souvenir de moi</p>
                <a href="" class="forgot-password">Mot de passe oublié</a>
            </div>

            <button name="connexion">Connexion</button>

        </form>
        
    </div>
</body>
</html>