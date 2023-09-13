<?php 

if(!isset($_SESSION)){
    session_start();
}
    include_once "../bdd/bd.inc.php";
    
        
        function connect($identifiant,$mdp){
            $db = connexionPDO();
            $req = $db->prepare("SELECT idProf, nomProf, prenomProf AS id FROM Prof WHERE mailProf=? AND mdpProf=?;");
            $req->execute([$identifiant,$mdp]);
            $cnt = $req->rowCount();
            var_dump($cnt);
            if($cnt == 1){
                $res = $req->fetch();
                $_SESSION['numP'] = $res['id'];
            }else{
                $_SESSION['numP'] = null;
            }
        }
   

    function isConnect(){
        var_dump(['session' => $_SESSION['numP']]);
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