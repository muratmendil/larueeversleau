<?php
session_start();
require('verif_admin.php');
require('co_bdd.php');
verification();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Administrateur - Actualités</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet"  type="text/css" href="styles/style.css">
      <link rel="stylesheet"  type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
       <link rel="stylesheet" type="text/css" href="styles/menu.css">
    </head>
    
    <body>
  <div class="col-lg-12">
        <div class="col-lg-3">
      <?php
      include("/structures/menu.php");
      ?>
       </div>

       <div class="col-lg-9">
        <?php

      $req_admin = $bdd->prepare("SELECT * FROM lrvl_actualite order by id ASC");
      $req_admin->execute();

      ?>


      <?php
    if($req_admin->rowCount() !=0){
    ?>
    <?php
   for($i = 0; $i < $req_admin->rowCount(); $i++){
      $resultat = $req_admin->fetch();
      $id_res = $resultat['id'];
      $titre = $resultat['titre'];
      $auteur = $resultat['auteur'];
      $date_actu = $resultat['date_actu'];
      $contenue = $resultat['contenue'];
      ?>


<?php
  if(isset($_POST['supprimer'])) {
    $supp = $_POST['supprimer'];
    $req_delete = $bdd->prepare("DELETE FROM lrvl_actualite where id = '$supp'");
    $req_delete->execute();
    echo("<meta http-equiv='refresh' content='0'>");
    exit;
  }
?>



    <div class="container">
      <div class="col-lg-9" id="login-container">
        <div class="span8 offset2">
    <div class="panel panel-primary">
      <table class="table table-striped table-hover text-centered">
        <div class="panel-heading"> 
          <h3 class="panel-title"><?php echo $resultat['titre']; ?></h3>
        </div>
        <tbody>
      <tr>
        <td>Auteur :</td>
        <td><?php   echo $resultat['auteur']; ?></td>
      </tr>
      <tr>
        <td>Date de l'actualité :</td>
        <td><?php   echo $resultat['date_actu']; ?></td>
      </tr>
      <tr>
        <td>Contenue :</td>
        <td><?php   echo $resultat['contenue']; ?></td>
      </tr>
      <tr>
        <td>Supprimer :</td>
        <td> 
        <form id="contactpro" role="form" method="post" action="asso_actus.php" enctype="multipart/form-data">
        <button type="submit" class="btn btn-danger pull-center" name="supprimer" onclick="return(confirm('Etes-vous sûr de vouloir supprimer ce message?'));" value="<?php echo $id_res;  ?>">Supprimer </button>
        <form id="contactpro" role="form" method="post" action="#" enctype="multipart/form-data">
        <a type="submit" class="btn btn-success pull-center" name="modifier" href="./modifactu.php?id=<?php echo $id_res;  ?>">Modifier </a>
        </form>
        </td>
        </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
    <?php 
    }
  }
  ?>
  </div>



      </div>

      </body>
</html>
