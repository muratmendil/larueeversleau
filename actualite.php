<?php
session_start();
$page = 'actualite';
require('co_bdd.php');
require("structures/accessible.php");
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

<?php 

$req_admin = $bdd->prepare("SELECT * FROM lrvl_actualite order by date_actu DESC");
$req_admin->execute();

$length = $req_admin->rowCount();

if($req_admin->rowCount() !=0){
    ?>

    <div class="jumbotron jumbotron-sm" style="background-color:#3cb878;color:white;">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2 style="text-align: center;">
                    NOS ACTUALITÉS
                </h2>
            </div>
            </div>
    </div>
    <br/>
    <div class="col-lg-12">
     <div class="col-lg-8">
    <?php
    for($i = 0; $i < $req_admin->rowCount(); $i++){
        $p = 5;
                ?>

        
                <?php
                
                    $actu = $req_admin->fetch();
                    $id = $actu['id'];
                    $image = $actu['images'];
                    $titre = $actu['titre'];
                    $contenue = $actu['contenue'];
                    $date = $actu['date_actu'];
                    $auteur = $actu['auteur'];
                    $alt= $actu['description_images'];
                    //for($i = 0; $i < 7; $i++){
                        ?>
                        
                      
                       
                        <section id="labels">
                          <div  class="dl">
                            <div class="brand">
                                <img src="<?php echo "images/".$image; ?>" height="20%" width="40%" alt="<?php echo $alt; ?>">
                            </div>
                            <div class="discount peter-river">
                            <?php echo "$titre"; ?>
                            </div>
                            <div class="descr">
                                <?php echo "$contenue"; ?>
                            </div>
                            <div class="coupon midnight-blue">
                            <p style="color: white">
                                <?php echo "Poster par " .$auteur. " le ".$date; ?>
                                </p>
                            </div>
                          </div>
                        </section>
                       

                    
            <hr style="height: 1px; color: red;">
            <br/>
            <?php
    }
    ?>
    
    
    <?php
}

?>
 </div>
<div class="col-lg-4" style="margin-top: 40px">
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Frueeversleau%2F%3Ffref%3Dts&tabs=timeline&width=400&height=585&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="585" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

<br/>
<br/>
<div class="panel panel-success" style="margin-top: 5%">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-envelope"></span> INSCRIVEZ-VOUS À LA NEWSLETTER
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="media-heading text-success">
                               Rester au courant
                            </h4>
                            <p class="margin-top-10 margin-bottom-20">
                                En vous inscrivant à la newsletter, vous receverez des actualités de l'associations au moins une fois par mois.
                            </p>
                            <form id="contact" role="form" method="post" action="actualite.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="prenom" class="hidden">Prénom</label>
                                    <input type="text" class="form-control" id="prenom" placeholder="Enter Prénom" required="required" name="prenom" />
                                </div>
                                <div class="form-group">
                                    <label for="nom" class="hidden">Nom</label>
                                    <input type="text" class="form-control" id="nom" placeholder="Votre Nom" required="required" name="nom" />
                                </div>
                                <div class="form-group">
                                    <label for="email" class="hidden">Adresse e-mail</label>
                                    <input type="email" class="form-control" id="email" placeholder="Votre adresse mail" required="required" name="email" />
                                </div>
                                <button type="submit" class="btn btn-default btn-block btn-success" name="valider">Envoyer</button>
                                <?php
                                        if(isset($_POST['valider'])) {
                                           if(!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["email"])) {

                                          newsletter();
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
                </div>
</div>
</div>


<style type="text/css">
section {
    padding: 5% 0;
}

.alizarin {
    background: #e74c3c;
}

.amethyst {
    background: #9b59b6;
}

.emerald {
    background: #2ecc71;
}

.midnight-blue {
    background: #2c3e50;
}

.peter-river {
    background: #3cb878;
}

.dl {
    background: #f0f0f0;
    padding: 30px 0;
    border-radius: 20px;
    position: relative;
}

.dl:before {
    content: " ";
    height: 20px;
    width: 20px;
    background: #ddd;
    border-radius: 20px;
    position: absolute;
    left: 50%;
    top: 20px;
    margin-left: -10px;
}
    
.dl .brand {
    text-transform: uppercase;
    letter-spacing: 3px;
    padding: 10px 15px;
    margin-top: 10px;
    text-align: center;
}

.dl .discount {
    min-height: 40px;
    position: relative;
    font-size: 40px;
    line-height: 80px;
    text-align: center;
    font-weight: bold;
    padding: -10px 15px 0;
    color: white;
}

.dl .discount:after {
    content: " ";
    
    border-right: 20px solid transparent;
    border-left: 20px solid transparent;
    position: absolute;
    bottom: -20px;
    left: 20%;
}

.dl .discount.alizarin:after {
    border-top: 20px solid #e74c3c;
}

.dl .discount.peter-river:after {
    border-top: 20px solid #3cb878;
}

.dl .discount.emerald:after {
    border-top: 20px solid #2ecc71;
}

.dl .discount.amethyst:after {
    border-top: 20px solid #9b59b6;
}

.dl .discount .type {
    font-size: 20px;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-top: -30px;
}

.dl .descr {
    color: black;
    margin-top: 10px;
    padding: 20px 15px; 
}
.dl .coupon {
    min-height: 50px;
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 18px;
    padding: 20px 15px;
}
    </style>

</div>


<?php
          function newsletter(){
          require('co_bdd.php');
          
              $prenom = $_POST['prenom'];
              $nom = $_POST['nom'];
              $email = $_POST['email'];


                 
                $contact = $bdd->prepare("INSERT INTO lrvl_newsletter(prenom, nom, email) VALUES(?, ?, ?)");
                
                $contact->execute(array($prenom, $nom, $email));

            }
            
          ?>


<?php
      include('structures/footer.php');
    ?>
    </div>
    </body>
</html>