<?php
require '../controllers/local.php';
require '../controllers/modifier.php';
foreach($re as $affich);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Récherche</title>
</head>
<body>
<div class="form-group row my-2 mt-4">
  <div class="col-sm-10">
    <?php include 'msg_error_success.php' ?>
  </div>
</div>
<ul class="nav">
  <li class="nav-item" style="background-color:green; width:90px; margin-left:25px; font-size:18px">
    <a class="nav-link active" href="../index.php">Accueil</a>
  </li>
</ul>

<div class="container">
<form class="form" action="" method="post">
  <h2>MODIFICATION</h2>
  
    <div class="" >
      <input type="text" class="form-control form-control-lg" name="code" Placeholder="Entrer votre code" style="width:700px; text-align:center; margin-left:150px">
  </div>
  <div class="for" style="margin-top:50px" >
  <div class="form-group row my-2">
      <label class="col-sm-2 col-form-label col-form-label-lg">Nom du projet</label>
      <div class="col-sm-6">
       
         <input type="text" class="form-control form-control-lg" name="nom" value="<?= $affich['nomprojet'] ?>">
         
      </div>
  </div>
  </div>
  <div class="form-group row my-2">
    <label class="col-sm-2 col-form-label col-form-label-lg">Date lancement</label>
    <div class="col-sm-6">
   
      <input type="date" class="form-control form-control-lg" name="date" value="<?= $affich['dateLancement'] ?>">
    
    </div>
  </div>
  <div class="form-group row my-2">
    <label class="col-sm-2 col-form-label col-form-label-lg"> Durée</label>
    <div class="col-sm-6">
    
      <input type="text" class="form-control form-control-lg" name="duree" value="<?= $affich['duree'] ?>">
    
    </div>
  </div>
  
  <div class="form-group row my-2">
    <label class="col-sm-2 col-form-label col-form-label-lg" >Localité</label>
    <div class="col-sm-6 ml-4">
    <select class="form-control form-control-lg" name="localite">
            <option value="">choisir localité</option>
            <?php foreach($localites as $localite): ?>
            <option value="<?= $localite['codelocalite'] ?>"><?= $localite['nomlocalite'] ?></option>
            <?php endforeach; ?> 
        </select>
    </div>
  </div>
  <div class="form-group row my-4">
    <input type="submit" name="rechercher" class="col-sm-2 col-form-label col-form-label btn btn-outline-dark fw-bold" value="Rechercher">
    <div class="col-sm-3">
      <input name="modifier" type="submit" class="form-control form-control-lg btn btn-outline-dark fw-bold" value="Modifier">
    </div>
  </div>
</form>
</div>
   

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>
      
</body>
</html>