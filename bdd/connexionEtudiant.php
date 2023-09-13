<?php 
    include_once "../bdd/bd.inc.php";
    
    if(!isset($_SESSION)){
        session_start();
    }

    $identifiant = $_POST['email'];
    $mdp = $_POST['password'];

    function connect($identifiant,$mdp){
        $db = connexionPDO();
        $req = $db->prepare("SELECT idEtudiant, nomEtudiant, prenomEtudiant, dateNaissance, mail AS id FROM etudiant WHERE identifiant=? AND mdp=?;");
        $req->execute([$identifiant,$mdp]);
        $cnt = $req->rowCount();
        if($cnt == 1){
            $resultat = $req->fetch();
            $_SESSION['idEtudiant'] = $resultat['identifiant'];
            $_SESSION['numE'] = $resultat['id'];
            $_SESSION['nomEtudiant'] = $resultat['nomEtudiant'];
            $_SESSION['prenomEtudiant'] = $resultat['prenomEtudiant'];
            $_SESSION['dateNaissance'] = $resultat['dateNaissance'];
            $_SESSION['mailEtudiant']=$resultat['mailEtudiant'];
            $resultat = true;
            echo 'bonjour';
        }else {
            $resultat = false;
        }
    }

    function isConnect(){
        if(isset($_SESSION['numE'])){
            return true;    
            echo 'bonjour';
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