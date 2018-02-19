<?php
session_start();
require('co_bdd.php');
require("structures/accessible.php");
$page = 'dons';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Actualités - La Ruée Vers L'eau</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet"  type="text/css" href="styles/style3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php if(isset($style_content)){
      echo "$style_content";
    }
      ?>">
    </head>

    <body>
    <?php
      include('structures/header.php');
    ?>
<br/>
<div class="contenue">  


           <div class="col-md-12 ">
            <div class="well well-sm">
                <form id="contact" role="form" method="post" action="#" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                     <div class="form-group">
                            <label for="type_don">Type de dons :</label>
                            <div class="input-group">
                            <input type="radio" name="type_paiment" id="nom" value="Paiement-Répétitif/Récurrent" required="required"> Paiement Répétitif/Récurrent &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <input type="radio" name="type_paiment" id="nom" value="Paiment-Ponctuel" required="required"> Paiment Ponctuel
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Nom :</label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                            <input type="text" class="form-control" id="name" placeholder="Votre nom" required="required" name="nom" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Prénom :</label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                            <input type="text" class="form-control" id="name" placeholder="Votre prénom" required="required" name="prenom" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Votre adresse mail" name="email" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Numéro de téléphone :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span>
                                </span>
                                <input type="number" class="form-control" id="telephone" placeholder="Votre numéro de téléphone" name="telephone" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Votre IBAN :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                </span>
                                <input type="text" class="form-control" id="iban" placeholder="Votre IBAN" required="required" name="iban" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Joindre un rib :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-download-alt"></span>
                                </span>
                                <input type="file" class="form-control" id="rib" required="required" name="rib" />
                                </div>
                        </div>
                    </div>
                     <div class="col-md-6">
                     <div class="form-group">
                            <label for="choix">Choix date de prélèvement :</label>
                            <div class="input-group">
                            <input type="radio" name="type_date" id="15" value="15-du-mois" required="required"> 15 du mois &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
                            <input type="radio" name="type_date" id="30" value="30-du-mois" required="required"> 30 du mois   
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Adresse :</label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span>
                                </span>
                            <input type="text" class="form-control" id="adresse" placeholder="Votre adresse" required="required" name="adresse" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Ville :</label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span>
                                </span>
                            <input type="text" class="form-control" id="ville" placeholder="Votre ville" required="required" name="ville" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Code postal :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span>
                                </span>
                                <input type="number" class="form-control" id="code_postal" placeholder="Votre code postal" required="required" name="code_postal" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Pays :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span>
                                </span>
                                <input type="text" class="form-control" id="pays" placeholder="Votre pays" required="required" name="pays" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Votre BIC :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                </span>
                                <input type="text" class="form-control" id="bic" placeholder="Votre BIC" required="required" name="bic" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="email">La somme du don € :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-eur"></span>
                                </span>
                                <input type="number" class="form-control" id="email" placeholder="La somme en chiffre" required="required" name="somme" />
                                </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="align: right">J'accepte d'être prélèver par l'association La Ruée Vers L'eau    <input type="checkbox" name="signature" id="signature" placeholder="signature" value="Oui" style="display: inline-block;">
                    </div>
                    <br/>
                    <div class="col-md-12" style="margin-top: 2%">
                        <button type="submit" class="btn btn-success pull-right" name="envoyer">Envoyer <span class="glyphicon glyphicon-send"></span></button>
                            <button type="reset" value="Reset" name="reset" class="btn btn-info">Réinitialiser <span class="glyphicon glyphicon-refresh"></span></button>
                    </div>
                </div>

                <?php
                if(isset($_POST['envoyer'])) {
                   if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["iban"]) && !empty($_POST["bic"]) && !empty($_POST["adresse"]) && !empty($_POST["ville"]) && !empty($_POST["code_postal"]) && !empty($_POST["pays"]) && !empty($_POST["somme"]) && !empty($_POST["signature"]) && !empty($_POST["email"]) && !empty($_POST["telephone"])) {

                  donsprelevement();
                    echo "Votre dons a été pris en compte";

                  }
                else {
                  echo "Tous les champs ne sont pas rempli";
                }

                  }
          ?>
                </form>
            </div>
        </div>
    

        <?php
          function donsprelevement(){
          require('co_bdd.php');

              $repertoire_image = 'rib/'; //repertoire ou sont entregistrer les images

              if($_POST['type_paiment'] == 'Paiement-Répétitif/Récurrent'){

                $type_paiment = $_POST['type_paiment'];
              }

               else if($_POST['type_paiment'] == 'Paiment-Ponctuel'){

                $type_paiment = $_POST['type_paiment'];
              }

              if($_POST['type_date'] == '15-du-mois'){

                $type_date = $_POST['type_date'];
              }

               else if($_POST['type_date'] == '30-du-mois'){

                $type_date = $_POST['type_date'];
              }
              $prenom = $_POST['prenom'];
              $nom = $_POST['nom'];
              $email = $_POST['email'];
              $telephone = $_POST['telephone'];
              $iban = $_POST['iban'];
              $bic = $_POST['bic'];
              $adresse = $_POST['adresse'];
              $ville = $_POST['ville'];
              $code_postal = $_POST['code_postal'];
              $pays = $_POST['pays'];
              $somme = $_POST['somme'];
              if($_POST['signature'] == 'Oui'){

                $signature = $_POST['signature'];
              }
              $tmp_file = $_FILES['rib']['tmp_name'];

              if(!is_uploaded_file($tmp_file) )
                  {
                      exit("Le fichier est introuvable, veuillez insérer une image");
                  }

                  // on vérifie maintenant l'extension
                  $type_file = $_FILES['rib']['type'];

                  if(!strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'png') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
                  {
                      exit("Le fichier n'est pas une image");
                  }

                  // on copie le fichier dans le dossier de destination
                  $name_file = $_FILES['rib']['name'];
                  
                  
                  if(!move_uploaded_file($tmp_file, $repertoire_image . $name_file) )
                  {
                      exit("Impossible de copier le fichier dans $content_dir");
                  }

                  echo "L'images a bien été uploadé";
              

                $don_prelev = $bdd->prepare("INSERT INTO lrvl_dons(prenom, nom, adresse, code_postal, ville, pays, email, telephone, type_de_dons, somme, choix_prelevement, iban, bic, rib, signature) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                
                $don_prelev->execute(array($prenom, $nom, $adresse, $code_postal, $ville, $pays, $email, $telephone, $type_paiment, $somme, $type_date, $iban, $bic, $name_file, $signature));

            }
            
          ?>


</div>

<?php
      include('structures/footer.php');
    ?>

    </body>
</html>