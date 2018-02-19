<?php
session_start();
$page = 'contact';
require("structures/accessible.php");
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Contact - La Ruée Vers L'eau</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet"  type="text/css" href="styles/style3.css">
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


<br/>
    <div class="jumbotron jumbotron-sm" style="background-color:#3cb878;color:white;">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2 style="text-align: center;">
                    NOUS CONTACTER
                </h2>
            </div>
            </div>
    </div>
    <div class="col-lg-12">
        <div class="col-lg-6 well">
                <h3 style="line-height:20%; font-weight: bold;"><i class="glyphicon glyphicon-home fa-1x" style="line-height:6%;color:#3cb878"></i> Notre adresse:</h3>               
                <p style="margin-top:6%;line-height:35%; ">17 Rue joseph et Etienne Montgolfier</p>
                <p style="margin-top:6%;line-height:35%">93110 ROSNY-SOUS-BOIS</p>
                <br />
                <br />
                <h3 style="line-height:25%; font-weight: bold;"><i class="glyphicon glyphicon-envelope fa-1x" style="line-height:6%;color:#3cb878"></i> Notre adresse E-mail</h3>
                <p style="margin-top:6%;line-height:35%">larueeversleau@gmail.com</p>
                <br />
                <br />
                <h3 style="line-height:20%; font-weight: bold;"><i class="glyphicon glyphicon-user fa-1x" style="line-height:6%;color:#3cb878"></i> Le président :</h3>
                <p style="margin-top:6%;line-height:35%">Lakhdar D</p>
                <br />
                <br />
                <h3 style="line-height:20%; font-weight: bold;"><i class="glyphicon glyphicon-phone fa-1x" style="line-height:6%;color:#3cb878"></i> Notre numéro :</h3>
                <p style="margin-top:6%;line-height:35%">+33 6 29 88 05 34</p>
            </div>
        <div class="col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.455671015932!2d2.476306415675417!3d48.88765247929043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e612dc0e8f93cb%3A0x9cd42a14968bd1bb!2s17+Rue+Joseph+et+Etienne+Montgolfier%2C+93110+Rosny-sous-Bois!5e0!3m2!1sfr!2sfr!4v1497348820693" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
       

       
    <div class="col-md-12 realisation">
    <br/>
        <div class="col-md-8">
            <div class="well well-sm">
                <form id="contact" role="form" method="post" action="contact.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                            <input type="text" class="form-control" id="nom" placeholder="Votre Nom" required="required" name="nom" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom :</label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                            <input type="text" class="form-control" id="prenom" placeholder="Enter Prénom" required="required" name="prenom" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Votre adresse mail" required="required" name="email" />
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="message">Message</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="100" required="required"
                                placeholder="Message" name="description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success pull-right" name="envoyer">Envoyer <span class="glyphicon glyphicon-send"></span></button>
                            <button type="reset" value="Reset" name="reset" class="btn btn-info">Réinitialiser <span class="glyphicon glyphicon-refresh"></span></button>
                    </div>
                </div>

                <?php
                if(isset($_POST['envoyer'])) {
                   if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {

                  contact();
                    echo "Votre message a été pris en compte";

                  }
                else {
                  echo "Tous les champs ne sont pas rempli";
                }

                  }
          ?>
                </form>
            </div>
        </div>
        <div class="col-md-4 well" style="background-color: #3cb878">
        <h3 style="color: white; text-align: center;">La Ruée Vers L'eau</h3>
        <p style="color: white; text-align: justify;">LA RUEE VERS L’EAU: favoriser et contribuer au développement d’initiatives humanitaires ; répondre aux besoins rudimentaires des pays en voie développement ; faciliter l’accès à l’eau potable.</p>
        <br/>
        <p style="color: white; text-align: justify;">Mais aussi des événements, chaque année nous organisons des événements au tour du sport, afin de récolter des dons pour les utiliser dans les actions que nous mênons.</p>
        </div>
        </div>

        <?php
          function contact(){
          require('co_bdd.php');
          
              $prenom = $_POST['prenom'];
              $nom = $_POST['nom'];
              $email = $_POST['email'];
              $message = $_POST['message'];


                 
                $contact = $bdd->prepare("INSERT INTO lrvl_contact(prenom, nom, email, message) VALUES(?, ?, ?, ?)");
                
                $contact->execute(array($prenom, $nom, $email, $message));

            }
            
          ?>

<?php
      include('structures/footer.php');
    ?>
</div>
</body>
</html>