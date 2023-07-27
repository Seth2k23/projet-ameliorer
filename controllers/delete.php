<?php
    require_once '../models/connexion.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
   
    $codeProjet = $_GET['id'];
   //var_dump( $codeProjet);
    $affiche = supprimer($codeProjet);
       if($affiche){
         $_SESSION['success'] = 'Suppression éffectué effectué avec succès';
        // header('Location: ../views/projet.php');

        
       }
       else{
        $_SESSION['error'] = 'Erreur de suppresion';
       }
     header('Location: ../views/projet.php');
}











?>