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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  </head>

  <body>
    <?php
      include('structures/header.php');
    ?>
<br/>
<div class="contenue">  

<style type="text/css">
.services_panel .panel{
  min-height: 377px;
  border: 1px solid #3cb878;
  border-top:3px solid #3cb878 !important;
  background: #fbfbfb;
  margin-top:10%;
}
.services_panel .panel img{
  width:115px;
}
.services_panel .panel .btn{
  width: 235px;
  margin-top: 25px;
  background: #f2f2f2;
  color: #333;
  border-bottom: 3px solid #e6e6e6;
}
.services_panel .panel .btn:hover{
  border-bottom: 2px solid #e6e6e6;
}
</style>   

 <div class="col-lg-12">
      <p style="text-align: center; font-size: 7vw;">FAIRE <span style="color: #3cb878; font-size: 7vw;">UN DON</span></p> 
  </div>
  <br/>
  <br/>


<div class="container services_panel">
  <div class="row">
    <div class="row">
        <div class="col-md-3">
              <div class="panel text-center">
                <h3>Don par virement</h3>
                <p>Vous voulez réaliser un don par virement à notre association? C'est à dire nous envoyer l'argent via votre banque ou faire un chèque au nom de notre association? La solution est la.</p>
                 <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <!-- <img src="https://d0.awsstatic.com/Image_Thumbs/graph_icon.png" class="center-block img-responsive"> -->
                <a type="button" class="btn btn-success" href="#virement">Faire un don</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel text-center">
                <h3>Don par paypal</h3>
                <p>Vous voulez faire un don par paypal à notre association? C'est à dire nous viré de l'argent depuis votre compte paypal, et choisir, mêtre le montant de votre choix? La solution est la.</p>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="K2FHTAYUYFFJS">
                <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel text-center">
                <h3>Don par prélèvement</h3>
                <p>Vous voulez faire un don par prélèvement? C'est à dire, nous donner votre IBAN, BIC et vos coordonnées afin d'être rétiré en toute sécurité depuis la banque? La solution est la:</p>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <a type="button" class="btn btn-success" href="#prelevement">Faire un don</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel text-center">
                <h3>Soutenir un projet</h3>
                <p>Vous voulez soutenir un projet de notre association en nous faissant un don? Les don des projets se trouve sur un site extérieur. Vous pouvez soutenir notre projet en cours en toute sécurité :</p>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <a type="button" class="btn btn-success" href="https://www.helloasso.com/associations/la-ruee-vers-l-eau/collectes/une-aumone-une-eau-saine">Faire un don</a>
              </div>
            </div>
              </div>
            </div>
          </div>
          <br/>
           <p style="margin-top: 5%"></p>
         <div class="col-md-12 realisation">
         <br/>
         <p style="font-size: 30px; text-align: center;" id="virement">DONS PAR <span style="color: #3cb878; font-size: 30px;">VIREMENT </span></p>
         <div class="col-md-8">
         <br/>
         <img src="images/riblrvl.jpg" alt="Rib de l'association La Ruée Vers l'eau" style="width: 90%;">
         <br/>
         </div>
          <br/>

          <div class="col-md-4" style="background-color: #3cb878; margin-bottom: 2%">
        <p style="color: white; text-align: justify;">Pour faire un don hors-ligne, nous vous demandons de bien vouloir suivre les instructions suivantes:</p>
        <br/>
        <p style="color: white; text-align: justify;">1) Faire un chèque à l’ordre de « La Ruée Vers L'eau »</p>
        <p style="color: white; text-align: justify;">2) N’oubliez pas de préciser l’ordre du chèque : « La Ruée Vers L'eau »</p>
        <p style="color: white; text-align: justify;">3) Veuillez envoyer votre chèque à l’adresse suivante :</p>
        <br/>
        <p style="color: white;">La Ruée Vers L'eau</p>
        <p style="color: white;">17 Rue joseph et Etienne Montgolfier</p>
        <p style="color: white;">93110 ROSNY-SOUS-BOIS, FRANCE</p>
        </div>
         <br/>
         <br/>
         </div>

         <div class="col-lg-12 rappelle" style="text-align: justify;">
      <br>
      <br>
     
    </div> 
    <br/>
    <br/>

    <p style="margin-top: 5%"></p>
         <div class="col-md-12 realisation">
         <br/>
         <p style="font-size: 30px; text-align: center;" id="prelevement">DONS PAR <span style="color: #3cb878; font-size: 30px;">PRELEVEMENT</span></p> 
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
                            <label for="nom">Nom :</label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control" placeholder="Votre nom" required="required" name="nom" id="nom" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom :</label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                           <input type="text" class="form-control" placeholder="Votre prénom" required="required" name="prenom" id="prenom" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" class="form-control" id="email" placeholder="Votre adresse mail" name="email" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Numéro de téléphone :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                <input type="number" class="form-control" id="telephone" placeholder="Votre numéro de téléphone" name="telephone" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="iban">Votre IBAN :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                                <input type="text" class="form-control" id="iban" placeholder="Votre IBAN" required="required" name="iban" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="rib">Joindre un rib :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-download-alt"></span></span>
                                <input type="file" class="form-control" id="rib" required="required" name="rib" />
                                </div>
                        </div>
                    </div>
                     <div class="col-md-6">
                     <label><div class="form-group">
                            <label for="choix">Choix date de prélèvement :</label>
                            <div class="input-group">
                            <label>
                            <input type="radio" name="type_date" id="choix" value="15-du-mois" required="required"> 15 du mois &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
                            <input type="radio" name="type_date" id="choix" value="30-du-mois" required="required"> 30 du mois   
                            </label>
                        </div>
                        </div></label>
                        <div class="form-group">
                            <label for="adresse">Adresse :</label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                            <input type="text" class="form-control" id="adresse" placeholder="Votre adresse" required="required" name="adresse" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="ville">Ville :</label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                            <input type="text" class="form-control" id="ville" placeholder="Votre ville" required="required" name="ville" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="code_postal">Code postal :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                                <input type="number" class="form-control" id="code_postal" placeholder="Votre code postal" required="required" name="code_postal" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="pays">Pays :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
                                <input type="text" class="form-control" id="pays" placeholder="Votre pays" required="required" name="pays" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="bic">Votre BIC :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                                <input type="text" class="form-control" id="bic" placeholder="Votre BIC" required="required" name="bic" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="somme">La somme du don € :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-eur"></span></span>
                                <input type="number" class="form-control" id="somme" placeholder="La somme en chiffre" required="required" name="somme" />
                                </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="align: right"><label for="signature">J'accepte d'être prélèver par l'association La Ruée Vers L'eau</label>     
                    <input type="checkbox" name="signature" id="signature" placeholder="signature" value="Oui" style="display: inline-block;">
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


    <?php
      include('structures/footer.php');
    ?>

    </div>
    </body>
    </html>