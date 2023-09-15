<?php

    include_once '../bdd/connexionProfModele.php';

   if(isset($_POST['connexion'])){

        $identifiant = $_POST['email'];
        $mdp = $_POST['password'];
        connect($identifiant, $mdp);
    }

    if(isConnect()){
        header('Location: ../templates/loggedProf.php');
    }else{
        $msgerr = errorConMsg("Grand garçon ou grande fille que tu es, tu sais pas taper ton mot de passe ? Tu veux du poison c'est ça ?"); 
    }

    include_once '../templates/intervenant.php';
?>