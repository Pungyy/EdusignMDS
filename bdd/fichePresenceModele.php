<?php
    require_once '../bdd/bd.inc.php';//lien vers le fichier de connexion de la base de donnée

    function getStudents(){
        $resultat=array();
        $donnees = [];
        $db=connexionPDO();//connexion à la BDD
        $req=$db->prepare('SELECT nomEtudiant, prenomEtudiant, dateNaissance, estPresent FROM etudiant ;');
        $req->execute([]);
        while ($ligne = $req->fetch()) {
            $donnees[] = $ligne;
        }
        return $donnees;
    }
    getStudents();//exécution de la requête
?>