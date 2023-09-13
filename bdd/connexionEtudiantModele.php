<?php 

if(!isset($_SESSION)){
    session_start();
}
    include_once "../bdd/bd.inc.php";
    
        
        function connect($identifiant,$mdp){
            $db = connexionPDO();
            $req = $db->prepare("SELECT idEtudiant, nomEtudiant, prenomEtudiant AS id FROM etudiant WHERE mailEtudiant=? AND mdpEtudiant=?;");
            $req->execute([$identifiant,$mdp]);
            $cnt = $req->rowCount();
            var_dump($cnt);
            if($cnt == 1){
                $res = $req->fetch();
                $_SESSION['numE'] = $res['id'];
            }else{
                $_SESSION['numE'] = null;
            }
        }
   

    function isConnect(){
        var_dump(['session' => $_SESSION['numE']]);
        if(isset($_SESSION['numE'])){
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