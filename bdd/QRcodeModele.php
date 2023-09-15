<?php
    include_once '../bdd/bd.inc.php';

    function generateRandomId() {
        return uniqid(); 
    }
    
    $id = generateRandomId();
    $lien = 'http://edusignmds.test:88/templates/signature.php';
    $newId =generateRandomId(); 
    $validite = "1";

    function createDatas($id, $lien, $validite){
        try {
            $db = connexionPDO(); //connexion à la BDD
            $req = $db->prepare('INSERT INTO qrcode (idQRcode, lienQRcode, validiteQRcode) VALUES (?, ?, ?)');//preparation de la requête préparée pour se prévenir contre les injections sql
            $req->execute([$id, $lien, $validite]);//exécution de la requête avec les variables souhaitées 
            $resultat = array("success" => true);
        } catch (PDOException $e) {
            $resultat = array("success" => false, "error" => $e->getMessage());
        }  
    }

    function updateDatas($newId) {
        try {
            $db = connexionPDO(); // Connexion à la BDD
    
            // Désactiver tous les QR codes actuellement actifs en mettant validite à 0
            $disableAllQR = $db->prepare("UPDATE qrcode SET validiteQRcode = 0 WHERE validiteQRcode = ?");
            $disableAllQR->execute([]);
    
            // Activer le nouveau QR code en mettant validite à 1
            $enableNewQR = $db->prepare("UPDATE qrcode SET validiteQRcode = 1 WHERE idQRcode = ?");
            $enableNewQR->execute([$newId]);
            $resultat = array("success" => true);
        } catch (PDOException $e) {
            $resultat = array("success" => false, "error" => $e->getMessage());
        }    
    }
?>