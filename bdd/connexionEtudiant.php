<?php 

if(!isset($_SESSION)){
    session_start();
}
    include_once "../bdd/bd.inc.php";
    
        $mail = "";
		$mdp = "";
		$msgerr="";
        $connexion = $_POST['connexion'];

    if(isset($connexion)){
        $identifiant = $_POST['email'];
        $mdp = $_POST['password'];
        function connect($identifiant,$mdp){
            $db = connexionPDO();
            $req = $db->prepare("SELECT idEtudiant, nomEtudiant, prenomEtudiant, dateNaissance, mailEtudiant AS id FROM etudiant WHERE idEtudiant=? AND mdpEtudiant=?;");
            $req->execute([$identifiant,$mdp]);
            $cnt = $req->rowCount();
            if($cnt == 1){
                $resultat = $req->fetch();
                $_SESSION['numE'] = $res['id'];
                $resultat = true;
            }else {
                $resultat = false;
            }
        }
    }
   

    function isConnect(){
        if(isset($_SESSION['numE'])){
            return true;    
        }else{
            echo 'bonsoir non';
            return false;
        }
    }

    function errorConMsg($msg){
        return '<p style="color:red"><b>'.$msg.'</b></p>';
    }

    if(isConnect()){
    }else{
        echo ' bonjour';
        $msgerr = errorConMsg("Une erreur lors de la procédure à été détecté, vérifiez le mail et le mot passe, si vous êtes un adhérent cochez la case prévue a cette effet"); 
    }

    function disconnect(){
        session_unset(); 
   }
?>