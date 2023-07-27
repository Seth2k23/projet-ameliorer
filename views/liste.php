<?php 
require '../controllers/liste.php';
require '../controllers/modifcomp.php'
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
           <h2>Liste des projets</h2>

           <table class="table" style="font-size:20px; width:200vh; margin-left:100px">
  <thead>
    <tr>
      <th scope="col">code</th>
      <th scope="col">Nom</th>
      <th scope="col">Date</th>
      <th scope="col">Duree</th>
      <th scope="col">Localite</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($listes as $liste): ?>
    <tr>
      <th scope="row"><?= $liste['codeProjet']?></th>
      <td><?= $liste['nomprojet']?></td>
      <td><?= $liste['dateLancement']?></td>
      <td><?= $liste['duree']?></td>
      <td><?= $liste['codelocalite']?></td>
      <td><a href="modifcomp.php?id=<?= $liste['codeProjet']?>"><button type="button" class="btn btn-warning">Modifier</button></a></td>
      <td><a href="../controllers/delete.php?id=<?= $liste['codeProjet']?>"><button type="button" class="btn btn-danger" onclick="return Confirmation();">supprimer</button></a></td> 
    </tr>
    <?php endforeach; ?>

   <script>
           function Confirmation(){

              return confirm("Voulez-vous vraiment supprimer ?");
           }


   </script>

      </tbody>
</table>











    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>
      
</body>
</html>