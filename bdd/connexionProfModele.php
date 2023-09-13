<?php 

if(!isset($_SESSION)){
    session_start();
}
    include_once "../bdd/bd.inc.php";
    
        
    function connect($identifiant,$mdp){
        $db = connexionPDO();
        $req = $db->prepare("SELECT prenomProf FROM prof WHERE mailProf=? AND mdpProf=?;");
        $req->execute([$identifiant,$mdp]);
        $cnt = $req->rowCount();
        if($cnt == 1){
            $res = $req->fetch();
            $_SESSION['prenomProf'] = $res['prenomProf'];
        }else{
            $_SESSION['prenomProf'] = null;
        }
    }
   
        function isConnect(){
            if(isset($_SESSION['prenomProf'])){
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