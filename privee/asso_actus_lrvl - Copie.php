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
      <link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
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

      <body class="theme-light">
      <div class="outer">
    
     <form method="post" action="asso_actus_lrvl.php" enctype="multipart/form-data">
                <label for="titre">Titre de l'actuailité :</label>
                <input type="text" name="titre" id="titre" placeholder="Titre">
          
           <br/>
                <label for="contenue">Contenue de l'actuailité :</label>
                <textarea type="text" name="contenue" id="editor" placeholder="Contenue" rows="10" cols="130"></textarea>
          <br/>
                <label for="images">Image pour l'actuailité :</label>
                <input type="file" name="images" id="images" placeholder="Image">
          <br/>

                <label for="contenue">Description pour l'image:</label>
                <input type="text" name="description_images" id="description_images" placeholder="Description de l'image">
          
         <br/>
          <button type="submit" name="poster" class="btn btn-default">Poster</button>
          <?php
          if(isset($_POST['poster'])) {
                if(!empty($_POST["titre"]) && !empty($_POST["contenue"]) && !empty($_POST["description_images"])) {

                  poster_actu();

                }
                else {
                  echo "veuillez remplir tous les champs";
                }

              }
              else {
                  echo "Ce n'est pas bon faut tous remplir";
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

                  echo "L'images a bien été uploadé";

                $insert_logo = $bdd->prepare("INSERT INTO lrvl_actualite(titre, auteur, date_actu, contenue, images, description_images) VALUES(?, ?, ?, ?, ?, ?)");
                
                $insert_logo->execute(array($titre, $_SESSION['prenom'], $date, $contenue, $name_file, $description_images));

            }
            
          ?>



      </body>
</html>
