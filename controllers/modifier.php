<?php
  require_once('../models/connexion.php');
  if (isset($_POST['rechercher'])) {
    if (!empty($_POST['code'])){
        $code = htmlspecialchars($_POST['code']);
        $_SESSION['code']=$code;
        $re = listeProjetou($code);
}
else{
  $_SESSION['error'] = 'entrer le code';
//  header('Location: ../views/modifier.php');
}
}

  if (isset($_POST['modifier'])){
    if (!empty($_POST['nom']) && !empty($_POST['date']) && !empty($_POST['duree']) && !empty($_POST['localite'])){
        $nom = htmlspecialchars($_POST['nom']);
        $date = htmlspecialchars($_POST['date']);
        $duree= htmlspecialchars($_POST['duree']);
        $localite = htmlspecialchars($_POST['localite']);
        
   
  
    $modif = updatee($nom, $date, $duree, $localite, $_SESSION['code']);
     $_SESSION['success'] = 'Modification effectué avec succès';
    //header('Location: ../views/modifier.php');
}
else{
    $_SESSION['error'] = 'Remplissez obligatoirement tout les champs';
    //header('Location: ../views/modifier.php');
}
}


    
?>