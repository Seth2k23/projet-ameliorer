<?php
require_once('../models/connexion.php');

$listes = listeProjet();


if(isset($_POST['supp'])){
    
      alert('voulez-vous vraiment supprimez');
       $supp = supprimer($code);

  }

?>