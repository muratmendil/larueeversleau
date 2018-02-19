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
      <link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript">
    jQuery(function ($) {
        $("#editor").shieldEditor({
            height: 260
        });
    });
</script>
    </head>
    
    <body>
    <div class="col-lg-12">
      <div class="col-lg-3">
    <?php
    include("/structures/menu.php");
    ?>
     </div>

     <div class="col-lg-9">
  

          <section  class="text-center">
              <h2>Poster une actualité</h2>
              <p>Sur cette page, vous pouvez poster une actualité concernant l'association</p>
                <div class="col-md-8 col-md-offset-2">
                <form method="post" action="asso_actus_lrvl.php" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                      <label for="titre">Titre de l'actuailité :</label>
                      <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Contenue de l'actuailité :</label>
                      <textarea type="text" class="form-control" id="editor" name="contenue" placeholder="Contenue"></textarea>
                    </div>
                    <div class="form-group ">
                      <label for="images">Image pour l'actuailité :</label>
                      <input type="file" name="images" class="form-control" placeholder="Image">
                    </div>
                    <div class="form-group">
                      <label for="titre">Description pour l'image :</label>
                      <input type="text" class="form-control" name="description_images" placeholder="Description de l'image">
                    </div>
                    <br/>
                    <button type="submit" name="poster" class="btn btn-default">Poster</button>
                  <hr>
                  </form>
                </div>
            </section>



          <?php
          if(isset($_POST['poster'])) {
                if(!empty($_POST["titre"]) && !empty($_POST["contenue"]) && !empty($_POST["description_images"])) {

                  poster_actu();

                }
                else {
                  echo "veuillez remplir tous les champs";
                }

              }
          ?>
          </form>




          <?php
          function poster_actu(){
          require('co_bdd.php');
          

              $repertoire_image = '../images/'; //repertoire ou sont entregistrer les images


              $titre = $_POST['titre'];
              $description_images = $_POST['description_images'];
              $contenue = $_POST['contenue'];
              $tmp_file = $_FILES['images']['tmp_name'];

              date_default_timezone_set('Europe/Paris');
              setlocale(LC_ALL, 'fr_FR');
              $date = date('d-m-Y');

                  if(!is_uploaded_file($tmp_file) )
                  {
                      exit("Le fichier est introuvable, veuillez insérer une image");
                  }

                  // on vérifie maintenant l'extension
                  $type_file = $_FILES['images']['type'];

                  if(!strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'png') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
                  {
                      exit("Le fichier n'est pas une image");
                  }

                  // on copie le fichier dans le dossier de destination
                  $name_file = $_FILES['images']['name'];
                  
                  
                  if(!move_uploaded_file($tmp_file, $repertoire_image . $name_file) )
                  {
                      exit("Impossible de copier le fichier dans $content_dir");
                  }
                    ?>
                    <h1 class="bg-success" style="margin-top: 69%">
                    <?php
                  $votrenews = "Votre actuailité vient d'être envoyer...";
                  echo $votrenews;
                  ?>
                  </h1>
                  <?php

                $insert_logo = $bdd->prepare("INSERT INTO lrvl_actualite(titre, auteur, date_actu, contenue, images, description_images) VALUES(?, ?, ?, ?, ?, ?)");
                
                $insert_logo->execute(array($titre, $_SESSION['prenom'], $date, $contenue, $name_file, $description_images));

            }
            
          ?>

    </div>
    </div>



      </body>
</html>
