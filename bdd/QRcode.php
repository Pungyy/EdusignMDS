<?php
require_once '../bdd/bd.inc.php';//lien vers le fichier de connexion de la base de donnée
include 'phpqrcode/qrlib.php';

// Le contenu du QR code (dans cet exemple, un lien vers un site Web)
$content = 'test.com';

// Le nom du fichier de sortie (vous pouvez le personnaliser)
$filename = '../bdd/qrcode.png';

//$lienQRcode = '';
//Génération d'un Id de QRcode aleatoire  
$newIdQRcode = uniqid();


function modifQRcode(){
     try{
        $db=connexionPDO();//connexion à la BDD
        $req = $db->prepare('INSERT INTO QRcode VALUES (?, ?)');//preparation de la requête préparée pour se prévenir contre les injections sql
        $req->execute([$newIdQRcode, $lienQRcode]);//exécution de la requête avec les variables souhaitées 
        $resultat = array("success" => true);
    } catch (PDOException $e) {
        $resultat = array("success" => false, "error" => $e->getMessage());
    }
}

?>