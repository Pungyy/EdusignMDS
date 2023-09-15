<?php

include "../bdd/connexionEtudiantControleur.php";


$estPresent = "PRÉSENT";

function QRcodeLu($QRcodeLu){
    $db = connexionPDO();
    $req = $db->prepare("SELECT QRcodeLu FROM etudiant WHERE idEtudiant=?;");
    $req->execute([$QRcodeLu, $idEtudiant]);
    if($QRcodeLu == NULL){
        $resultat = false;
    }else {
        $resultat = true;
    }
}

 function estPresent($idEtudiant){
    if(isConnect()==true){
        if(QRcodeLu($QRcodeLu)==true){
            try{
                $db=connexionPDO();//connexion à la BDD
                $req=$db->prepare("UPDATE etudiant SET estPresent = ? WHERE idEtudiant=?;");//preparation de la requête préparée pour se prévenir contre les injections sql
                $req->execute([$estPresent, $idEtudiant]);//exécution de la requête avec les variables souhaitées 
                $resultat = $req->fetch(PDO::FETCH_ASSOC);
                $resultat = array("success" => true);
           } catch (PDOException $e) {
               $resultat = array("success" => false, "error" => $e->getMessage());
           }
        }
    }
    
}
?>