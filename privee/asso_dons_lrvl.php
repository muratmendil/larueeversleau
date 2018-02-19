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
      <link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
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

    $req_admin = $bdd->prepare("SELECT * FROM lrvl_dons order by id ASC");
    $req_admin->execute();

    ?>


    <?php
if($req_admin->rowCount() !=0){
    ?>
    <?php
   for($i = 0; $i < $req_admin->rowCount(); $i++){
      $resultat = $req_admin->fetch();
      $id_res = $resultat['id'];
      $prenom = $resultat['prenom'];
      $nom = $resultat['nom'];
      $email = $resultat['email'];
      $adresse = $resultat['adresse'];
      $code_postal = $resultat['code_postal'];
      $ville = $resultat['ville'];
      $pays = $resultat['pays'];
      $telephone = $resultat['telephone'];
      $type_de_dons = $resultat['type_de_dons'];
      $somme = $resultat['somme'];
      $choix_prelevement = $resultat['choix_prelevement'];
      $iban = $resultat['iban'];
      $bic = $resultat['bic'];
      $rib = $resultat['rib'];
      $signature = $resultat['signature'];
      ?>

<?php
  if(isset($_POST['supprimer'])) {
    $supp = $_POST['supprimer'];
    $req_delete = $bdd->prepare("DELETE FROM lrvl_dons where id = '$supp'");
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
      <h3 class="panel-title"><?php   echo $resultat['type_de_dons']; ?></h3>
    </div>
    <thead>
      <tr>
        <th>Titre : </th>
        <th>Information de la personne</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Prénom :</td>
        <td><?php   echo $resultat['prenom']; ?></td>
      </tr>
      <tr>
        <td>Nom :</td>
        <td><?php   echo $resultat['nom']; ?></td>
      </tr>
      <tr>
        <td>Email :</td>
        <td><?php   echo $resultat['email']; ?></td>
      </tr>
      <tr>
        <td>Telephone :</td>
        <td><?php   echo $resultat['telephone']; ?></td>
      </tr>
      <tr>
        <td>Adresse :</td>
        <td><?php   echo $resultat['adresse']; ?></td>
      </tr>
      <tr>
        <td>Ville :</td>
        <td><?php   echo $resultat['ville']; ?></td>
      </tr>
      <tr>
        <td>Pays :</td>
        <td><?php   echo $resultat['pays']; ?></td>
      </tr>
      <tr>
        <td>Somme :</td>
        <td><?php   echo $resultat['somme']; ?></td>
      </tr>
      <tr>
        <td>Choix du prélèvement :</td>
        <td><?php   echo $resultat['choix_prelevement']; ?></td>
      </tr>
      <tr>
        <td>IBAN :</td>
        <td><?php   echo $resultat['iban']; ?></td>
      </tr>
      <tr>
        <td>BIC :</td>
        <td><?php   echo $resultat['bic']; ?></td>
      </tr>
      <tr>
        <td>Rib :</td>
        <td><?php   echo $resultat['rib']; ?></td>
      </tr>
      <tr>
        <td>Signature de la personne :</td>
        <td><?php   echo $resultat['signature']; ?></td>
      </tr>
      <tr>
        <td>Supprimer :</td>
        <td> <form id="contactpro" role="form" method="post" action="asso_dons_lrvl.php" enctype="multipart/form-data">
        <button type="submit" class="btn btn-danger pull-center" name="supprimer" onclick="return(confirm('Etes-vous sûr de vouloir supprimer ce message?'));" value="<?php echo $id_res;  ?>">Supprimer </button></form></td>
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