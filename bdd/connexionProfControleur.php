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
        $msgerr = errorConMsg("Une erreur lors de la procédure à été détecté, vérifiez le mail et le mot passe"); 
    }

    include_once '../templates/intervenant.php';
?>