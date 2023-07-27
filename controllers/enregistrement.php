<?php
require_once('../models/connexion.php');

if (isset($_POST['valider'])) {
    if (!empty($_POST['code']) && !empty($_POST['nom']) && !empty($_POST['date']) && !empty($_POST['duree']) && !empty($_POST['localite'])){
        $code = htmlspecialchars($_POST['code']);
        $nom = htmlspecialchars($_POST['nom']);
        $date = htmlspecialchars($_POST['date']);
        $duree= htmlspecialchars($_POST['duree']);
        $localite = htmlspecialchars($_POST['localite']);
        

    
             $stmt = addprojet($code, $nom, $date, $duree, $localite,  $_SESSION['code']);
              $_SESSION['success'] = 'Enregistrment effectué avec succès';
           
        
    } else {
        $_SESSION['error'] = 'Remplissez obligatoirement tout les champs';
       
    }
    
    header('Location: ../views/projet.php');
}