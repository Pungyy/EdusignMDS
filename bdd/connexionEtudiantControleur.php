<?php

include_once '../bdd/connexionEtudiantModele.php';

   if(isset($_POST['connexion'])){

        $identifiant = $_POST['email'];
        $mdp = $_POST['password'];
        connect($identifiant, $mdp);
    }

    if(isConnect()){
        header('Location: ../templates/loggedEtudiant.php');
    }else{
        $msgerr = errorConMsg("Grand garçon ou grande fille que tu es, tu sais pas taper ton mot de passe ? Tu veux du poison c'est ça ?"); 
    }

    include_once '../templates/apprenant.php';
?>