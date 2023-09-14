<?php
    include_once '../bdd/fichePresenceModele.php';
    $donnees = getStudents();
    include_once '../templates/fichePresence.php'; //affichage de la vue 
?>