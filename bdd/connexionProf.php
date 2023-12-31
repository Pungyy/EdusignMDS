<?php 
    include_once "../bdd/bd.inc.php";
    
    if(!isset($_SESSION)){
        session_start();
    }

    function connect($identifiant,$mdp){
        $db = connexionPDO();
        $req = $db->prepare("SELECT idProf, nomProf, prenomProf, dateNaissance AS id FROM prof WHERE identifiant=? AND mdp=?;");
        $req->execute([$identifiant,$mdp]);
        $cnt = $req->rowCount();
        if($cnt == 1){
            $resultat = $req->fetch();
            $_SESSION['idProf'] = $resultat['identifiant'];
            $_SESSION['numP'] = $resultat['id'];
            $_SESSION['nomProf'] = $resultat['nomProf'];
            $_SESSION['prenomProf'] = $resultat['prenomProf'];
            $_SESSION['dateNaissance'] = $resultat['dateNaissance'];
            $resultat = true;
        }else {
            $resultat = false;
        }
    }

    function isConnect(){
        if(isset($_SESSION['numP'])){
            return true;    
        }else{
            return false;
        }
    }

    function disconnect(){
        session_unset(); 
   }

    function errorConMsg($msg){
        return '<p style="color:red"><b>'.$msg.'</b></p>';
    }
?>