<?php
session_start();
$page = 'index';
require("structures/accessible.php");
require("co_bdd.php");
?>

<!DOCTYPE html> 
<html lang="fr">
  <head>
    <title> La Ruée Vers L'eau</title>
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

  <br>
  <div class="col-lg-12">
    <div class="w3-content w3-display-container col-lg-8 blocslider">
      <!-- <img class="mySlides" src="https://www.w3schools.com/w3css/img_lights.jpg" alt="image1" style="width:100%">
      <img class="mySlides" src="https://www.w3schools.com/w3css/img_mountains.jpg" alt="image2" style="width:100%">
      <img class="mySlides" src="https://www.w3schools.com/w3css/img_forest.jpg" alt="image3" style="width:100%">
      <img class="mySlides" src="https://www.w3schools.com/w3css/img_fjords.jpg" alt="image4" style="width:100%"> -->
      <img class="mySlides" src="images/slide1.jpg" alt="image1" style="width:100%;">
      <img class="mySlides" src="images/slide2.jpg" alt="image2" style="width:100%;">
      <img class="mySlides" src="images/slide3.jpg" alt="image3" style="width:100%;">
      <img class="mySlides" src="images/slide4.jpg" alt="image4" style="width:100%;">
    <div class="w3-center">
      <div class="w3-section">
        <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
        <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
      </div>
      <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
      <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
      <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
      <button class="w3-button demo" onclick="currentDiv(3)">4</button>
    </div>

                        <!-- DEBUT SCRIPT POUR LE SLIDER -->

    <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-red", "");
      }
      x[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " w3-red";
    }
    </script>


    </div>
      <!-- FIN SCRIPT POUR LE SLIDER -->

<?php

$req_admin = $bdd->prepare("SELECT * FROM lrvl_actualite order by date_actu ASC");
$req_admin->execute();

  
?>



        <!-- BLOC ACTUALITE -->
       <div class="col-lg-4 blocfb">
        <!-- <h1 style="text-align: center; width: 100%">Actualité</h1> -->
        <p style="text-align: center; font-size: 30px;"><i class="glyphicon glyphicon-calendar"></i> NOS <span style="color: #3cb878; font-size: 30px;">ACTUALITES</span></p> 

        <?php
if($req_admin->rowCount() !=0){
    ?>
    <?php
   for($i = 0; $i < 7; $i++){
      $resultat = $req_admin->fetch();
        $date_actu = $resultat['date_actu'];

          $titre = $resultat['titre'];
      ?>

        <div class="col-lg-12 actu" style="width: 100%">
        <div class="col-lg-4" style="background-color: #3cb878; text-align: center;"><?php   echo $resultat['date_actu']; ?></div>
        <div class="col-lg-8"><a href="actualite.php"><?php   echo $resultat['titre']; ?></a></div>
        </div>
      <?php 
    }
  }
  ?>

      <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Frueeversleau%2F%3Ffref%3Dts&tabs=timeline&width=455&height=585&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="455" height="585" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->
      </div>
     
      

      <!-- BLOC REALISATION -->
        <div class="col-lg-12 realisation">
         <p style="text-align: center; font-size: 30px;">NOS <span style="color: #3cb878; font-size: 30px;">REALISATIONS</span></p> 
         <br/>
         <p style="text-align: center; font-size: 18px;">Les réalisations qui sont effectué par notre association</p>
         <br/>
         
         

              <div class="col-lg-3 blocrealisation"><br><p style="text-align: center;"><img class="img-circle imagefonction" src="images/a1.png" alt="Nous réalisons des forages" style="width:160px;height:140px;"></p><h2 style="text-align: center;">Puits et forages</h2></div>
              <div class="col-lg-3 blocrealisation"><br><p style="text-align: center;"><img class="img-circle imagefonction" src="images/a2.png" alt="Nous réalisons des châteaux d'eau" style="width:160px;height:140px;"></p><h2 style="text-align: center;">Château d'eau</h2></div>
              <div class="col-lg-3 blocrealisation"><br><p style="text-align: center;"><img class="img-circle imagefonction" src="images/a3.png" alt="Nous installons des panneaux solaire" style="width:160px;height:140px;"></p><h2 style="text-align: center;">Panneau solaire</h2></div>
              <div class="col-lg-3 blocrealisation"><br><p style="text-align: center;"><img class="img-circle imagefonction" src="images/a4.png" alt="Nous aidons les orphelins en aide alimentaire et vestimentaire" style="width:160px;height:140px;"></p><h2 style="text-align: center;">Soutiens aux orphelinats</h2></div>
              <br/>
              <br/>
        </div>
        <br/>
        <!-- BLOC REALISATION -->
          <div class="col-lg-12 enchiffre">
            <p style="text-align: center; font-size: 30px;">NOS <span style="color: #3cb878; font-size: 30px;">CHIFFRES</span></p> 
         <br/>
         <p style="text-align: center; font-size: 18px;">Voici quelques chiffres de notre association</p>
         <br/>
            <div class="col-lg-4 blocenchiffre"><br><p style="text-align: center;"><img src="images/1.png" alt="En chiffre, 13 puits et forages" style="width:110px;height:95px;"></p><h2 style="text-align: center;">Puits et forages</h2><p>Nous nous sommes orientés vers l'aumône de l'eau car nous considérons que cette ressource naturelle est le meilleur cadeau que nous puissions offrir.</p></div>
            <div class="col-lg-4 blocenchiffre"><br><p style="text-align: center;"><img src="images/2.png" alt="En chiffre, 1 machine à forage" style="width:110px;height:95px;"></p><h2 style="text-align: center;">Machine à forage</h2><p>Elle nous appartient et grâce à cet achat, nous pouvons constuire autant de forages et de châteaux d'eau que vos dons nous le permettent.</p></div>
            <div class="col-lg-4 blocenchiffre"><br><p style="text-align: center;"><img src="images/3.png" alt="En chiffre, 1 machine à forage" style="width:110px;height:95px;"></p><h2 style="text-align: center;">Durée de vie</h2><p>C'est la durée de vie en année de chaque puit à forage que nous construisons.</p>
            </div>
            <br/>
              <br/>
          </div>

<br/>

<!-- BLOC TERRAIN-->
        <div class="col-lg-12 terrain">
         <p style="text-align: center; font-size: 30px;">NOTRE TERRAIN <span style="color: #3cb878; font-size: 30px;">D'INTERVENTION</span></p> 
         <br/>
         <p style="text-align: center; font-size: 18px;">Nous intervenons au Niger pour réaliser nos actions</p>
         <br/>
         

              <div class="col-lg-8"><p style="text-align: center;"><img class="img-circle" src="images/Niger.png" alt="Nous réalisons des forages" style="width:60%;height:70%;"></p></div>
              <div class="col-lg-4">
              
                
              <h4 style="text-align: center;">Plus d'informations? Suivez-nous sur nos réseaux sociaux :</h4>
              <p style="text-align: center;">
              <a href="https://www.facebook.com/rueeversleau"><img class="imagefonction" src="images/icon-facebook.png" alt="Nous réalisons des châteaux d'eau" style="width:60px;height:60px;"></a> 
            <a href="https://www.youtube.com/channel/UCdATE5CFWNlsY5WP42hZyag"><img class="imagefonction" src="images/icon-youtube.ico" alt="Nous réalisons des châteaux d'eau" style="width:60px;height:60px;"></a> 
              <a href="https://twitter.com/larueeversleau?lang=fr"><img class="imagefonction" src="images/icon-twitter.png" alt="Nous réalisons des châteaux d'eau" style="width:55px;height:55px;"></a>  
              </p>
              
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
              
              <h4 style="text-align: center;">Sinon :</h4>
              <p style="text-align: center;"> 
             <a href="contact.php"><img src="images/Contact.png" alt="Nous réalisons des châteaux d'eau" style="width: 200px; height: 100px;"></a> 
              </p>
              
              
              </div>
              <br/>
              <br/>
        </div>
        <br/>
             

</div>


<?php
      include('structures/footer.php');
    ?>
</div>
  </body>
</html>