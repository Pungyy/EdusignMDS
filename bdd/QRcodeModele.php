<?php
    include_once '../bdd/bd.inc.php';

    function generateRandomId() {
        return uniqid(); 
    }
    
    $id = generateRandomId();
    $lien = 'http://edusignmds.test:88/templates/signature.php';
    $newId =generateRandomId(); 

    function createDatas($id, $lien){
        try {
            $db = connexionPDO(); //connexion à la BDD
            $req = $db->prepare('INSERT INTO qrcode VALUES (?, ?)');//preparation de la requête préparée pour se prévenir contre les injections sql
            $req->execute([$id, $lien]);//exécution de la requête avec les variables souhaitées 
            $resultat = array("success" => true);
        } catch (PDOException $e) {
            $resultat = array("success" => false, "error" => $e->getMessage());
        }  
    }

    function updateDatas($newId, $lien){
        try{
            $db=connexionPDO();//connexion à la BDD
            $req=$db->prepare("UPDATE qrcode SET idQRcode = ? WHERE lienQRcode =?;");//preparation de la requête préparée pour se prévenir contre les injections sql
            $req->execute([$newId, $lien]);//exécution de la requête avec les variables souhaitées 
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
            $resultat = array("success" => true);
       } catch (PDOException $e) {
           $resultat = array("success" => false, "error" => $e->getMessage());
       }
    }
?>