<?php

    include_once '../bdd/connexionEtudiantModele.php';

   if(isset($_POST['connexion'])){

        $identifiant = $_POST['email'];
        $mdp = $_POST['password'];
        var_dump($identifiant, $mdp);
        connect($identifiant, $mdp);
    }

    if(isConnect()){
        
    }else{
        $msgerr = errorConMsg("Une erreur lors de la procédure à été détecté, vérifiez le mail et le mot passe"); 
    }

    include_once '../templates/apprenant.php';
?>