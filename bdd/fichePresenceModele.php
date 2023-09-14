<?php
    require_once '../bdd/bd.inc.php';//lien vers le fichier de connexion de la base de donnée

    function getStudents(){
        $resultat=array();
        try{
        $db=connexionPDO();//connexion à la BDD
        $req=$db->prepare('SELECT nomEtudiant, prenomEtudiant, dateNaissance, estPresent FROM etudiant ;');
        $req->execute([]);
        $resultat = $req->fetchall(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }
    getStudents();//exécution de la requête
?>