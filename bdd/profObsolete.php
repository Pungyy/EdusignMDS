<?php

include "../bdd/connexionProfControleur.php";

function lesPresent(){
    if(isConnect()){
        try{
            $db=connexionPDO();//connexion à la BDD
            $req=$db->prepare("SELECT * from etudiant;");//preparation de la requête préparée pour se prévenir contre les injections sql
            $req->execute([]);//exécution de la requête avec les variables souhaitées 
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
            $resultat = array("success" => true);
        } catch (PDOException $e) {
            $resultat = array("success" => false, "error" => $e->getMessage());
        }
    }
}
?>