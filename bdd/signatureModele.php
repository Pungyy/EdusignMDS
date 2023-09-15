<?php

include "../bdd/bd.inc.php";
include "../templates/signature.php";
include_once "../bdd/connexionEtudiantControleur.php";
//update la signature et la présence
$envoieSignature = $_POST['envoieSignature'];
$signature = $_POST['signature'];
$estPresent = "PRÉSENT";
$identifiant = $_POST['email'];
$mdp = $_POST['password'];



function updatePresence($estPresent, $identifiant, $mdp) {
    try {
        $db = connexionPDO(); // Connexion à la BDD
        $req = $db->prepare("UPDATE etudiant SET estPresent = ? WHERE mailEtudiant = ? AND mdpEtudiant = ?");
        $req->execute([$estPresent, $identifiant, $mdp]);
        $resultat = array("success" => true);
    } catch (PDOException $e) {
        $resultat = array("success" => false, "error" => $e->getMessage());
    }    
}

if(isset($envoieSignature)){
    updatePresence($estPresent, $identifiant, $mdp);
}

// function QRcodeLu($QRcodeLu){
//     $db = connexionPDO();
//     $req = $db->prepare("SELECT QRcodeLu FROM etudiant WHERE idEtudiant=?;");
//     $req->execute([$QRcodeLu, $idEtudiant]);
//     if($QRcodeLu == NULL){
//         $resultat = false;
//     }else {
//         $resultat = true;
//     }
// }

//  function estPresent($idEtudiant){
//     if(isConnect()==true){
//         if(QRcodeLu($QRcodeLu)==true){
//             try{
//                 $db=connexionPDO();//connexion à la BDD
//                 $req=$db->prepare("UPDATE etudiant SET estPresent = ? WHERE idEtudiant=?;");//preparation de la requête préparée pour se prévenir contre les injections sql
//                 $req->execute([$estPresent, $idEtudiant]);//exécution de la requête avec les variables souhaitées 
//                 $resultat = $req->fetch(PDO::FETCH_ASSOC);
//                 $resultat = array("success" => true);
//            } catch (PDOException $e) {
//                $resultat = array("success" => false, "error" => $e->getMessage());
//            }
//         }
//     }
    
//}

echo $signature;
?>