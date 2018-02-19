<?php
session_start();
require('co_bdd.php');
require('verif_admin.php');
verification();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Administrateur - Accueil</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet"  type="text/css" href="styles/style.css">
      <link rel="stylesheet" type="text/css" href="styles/menu.css">
      <link rel="stylesheet"  type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

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
    print_r("<h3>Bonjour ".$_SESSION['prenom']." ".$_SESSION['nom']."</h3>") ;
    ?>

<div class="container">
    <blockquote class="quote-box">
      <p class="quotation-mark">
        “
      </p>
      <p class="quote-text">
        Il y'a actuellement :  <?php 
          $sql = $bdd->prepare("SELECT COUNT(*) FROM lrvl_actualite");
          $sql->execute();
          while ($spec = $sql->fetch()) {
            ?>
            <strong>
            <?php
           echo $spec ['COUNT(*)']. " articles en ligne";
           } ?></strong>
      </p>
      <hr>
     Il y'a actuellement :  <?php 
          $sql = $bdd->prepare("SELECT COUNT(*) FROM lrvl_dons");
          $sql->execute();
          while ($spec = $sql->fetch()) {
            ?>
            <strong>
            <?php
           echo $spec ['COUNT(*)']. " dons en attente";
           } ?></strong>
      </p>
      <hr>
      Il y'a actuellement :  <?php 
          $sql = $bdd->prepare("SELECT COUNT(*) FROM lrvl_contact");
          $sql->execute();
          while ($spec = $sql->fetch()) {
            ?>
            <strong>
            <?php
           echo $spec ['COUNT(*)']. " message en attente";
           } ?></strong>
      </p>
      <hr>
      Il y'a actuellement :  <?php 
          $sql = $bdd->prepare("SELECT COUNT(*) FROM lrvl_newsletter");
          $sql->execute();
          while ($spec = $sql->fetch()) {
            ?>
            <strong>
            <?php
           echo $spec ['COUNT(*)']. " inscription à la newsletter";
           } ?></strong>
      </p>
      <p class="quotation-mark" style="text-align: right;">
        “
      </p>
    </blockquote>
</div>

<style type="text/css">
  blockquote{
    border-left:none
}

.quote-badge{
    background-color: rgba(0, 0, 0, 0.2);   
}

.quote-box{
    
    overflow: hidden;
    margin-top: -50px;
    padding-top: -100px;
    border-radius: 17px;
    background-color: #3cb878;
    margin-top: 25px;
    color:white;
    width: 500px;
    box-shadow: 2px 2px 2px 2px #E0E0E0;
    
}

.quotation-mark{
    
    margin-top: -10px;
    font-weight: bold;
    font-size:100px;
    color:white;
    font-family: "Times New Roman", Georgia, Serif;
    
}

.quote-text{
    
    font-size: 19px;
    margin-top: -65px;
}
</style>
    
      </div> 
  </div>
      </body>
</html>