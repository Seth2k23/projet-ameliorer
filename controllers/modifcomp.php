<?php
  require_once '../models/connexion.php';

if(isset($_GET['id']) && (!empty($_GET['id']))){
      $_SESSION['id']=$_GET['id'];
    $codeProjet = $_GET['id'];
 
    $affiche = listProjet($codeProjet);

}


if (isset($_POST['modif'])){
    if (!empty($_POST['nom']) && !empty($_POST['date']) && !empty($_POST['duree']) && !empty($_POST['localite'])){
        $nom = htmlspecialchars($_POST['nom']);
        $date = htmlspecialchars($_POST['date']);
        $duree= htmlspecialchars($_POST['duree']);
        $localite = htmlspecialchars($_POST['localite']);
        
   
  
    $modif = updateee($nom, $date, $duree, $localite,$_SESSION['id']);
     $_SESSION['success'] = 'Modification effectué avec succès';
   
} 

else{
    $_SESSION['error'] = 'Remplissez obligatoirement tout les champs';
   
}

}














?>