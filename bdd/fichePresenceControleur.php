<?php
    include_once '../bdd/fichePresenceModele.php';
    $etudiants = getStudents();
    include_once '../templates/fichePresence.php'; //affichage de la vue 
?>