<?php
session_start();
$page = 'orphelins';
require("structures/accessible.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Orphelinat - La Ruée Vers L'eau</title>
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

          <!-- LES FORAGES -->
  <div class="col-lg-12" style="text-align: justify;">
      <p style="font-size: 30px; text-align: center;">NOS <span style="color: #3cb878; font-size: 30px;">ORPHELINS</span></p> 
      <br>
      <p><strong>L'aide apportée par La Ruée Vers L'eau est multiple. Des voyages sont organisés au moins deux fois par an, en Afrique, et principalement au Niger, un des pays les plus pauvres au monde. Face à ce constat alarmant, La Ruée vers L'eau a décidé d'agir en proposant des aide diverses.</strong></p>
      
      <p>La construction des puits à forage est la principale acrivité de l'association mais des soutiens envers les plus démunis sont également apportés: aide alimentaire, aides vestimentaires, fournitures scolaire, produits d'hygiènes au Sénégal mais aussi au Niger.</p>

      <p>En plus des activités au Niger, l'association se concentre aussi sur des missions locales. Ces dernières années nous ont permis de nous engager auprès des plus pauvres. Durant le mois de ramadan 2016, notre association s'est mobilisée au côté de l'association <strong>Awqaf</strong> pour venir en aide à des régugiés de Calais. En effet, des milliers de migrants vivent dans de mauvaise conditions, entassés dans des camps. </p>

      <p>Alors, afin de leur apporter le soutien nécessaire pour jeuner dans des conditions respectables (nourriture pour l'iftar et le suhur notamment), des récoltes de dont on été réalisées:</p>
      <p>- denrées alimentaire: tomates, laits, sucre, petits pois, huile, carottes, épices...</p>
      <p>- produits d'hygiène: dentifrices, brosse à dent, shampooing, gels douche, couches pour bébés etc...</p>
    <br/>
  </div>
  

  <!-- LE FORAGE C'EST QUOI? -->


  <div class="col-lg-12 rappelle" style="text-align: justify;">
      <br>
      <br>
     
      
    </div> 
<br/>
<br/>

          <!-- NOS ACTIONS EN PHOTOS -->
      <br/>
    <div class="container" style="text-align: justify; float: none !important;">
    <br>
    <br>
    <div class="row">
      <p style="font-size: 30px; text-align: center;">NOS ORPHELINS <span style="color: #3cb878; font-size: 30px;">EN PHOTOS</span></p> 
      <br>
      <div class="ccol-md-4 col-lg-4 col-xs-12 col-sm-6"><br><p style="text-align: center;"><img class="img-rounded imagefonction" src="images/orphelins1.jpg" alt="Deux membres de l'équipe dans un orphelinat" style="width:300px;height:250px;"></p></div>
      <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6"><br><p style="text-align: center;"><img class="img-rounded imagefonction" src="images/orphelins2.jpg" alt="Une classe orphelins pour prendre une photo" style="width:300px;height:250px;"></p></div>
      <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6"><br><p style="text-align: center;"><img class="img-rounded imagefonction" src="images/orphelins3.jpg" alt="Des orphelins très content de prendre une photo pendant leur pose" style="width:300px;height:250px;"></p></div>
    </div>
    <br/>
    <br/>
    </div>
  


        <!-- DES VILLAGES CONQUIES -->


    <div class="col-lg-12 realisation" style="text-align: justify;">
      <br>
      <br>
      <p style="font-size: 30px; text-align: center;">LES ENFANTS<span style="color: #3cb878; font-size: 30px;"> SONT NOTRE PRIORITE</span></p>  
      <br>
      <p><strong>Qui n’a jamais voulu redonner le sourire à de pauvres enfants? L’aide aux orphelins est une de nos principales actions. Nous avons réalisé des campagnes de réhabilitation d’orphelinats.</strong></p> 

      <p>Nous nous engageons à fournir une meilleure condition de vie. Grâce à vos dons, nous avons pu acheter du matériel nécessaire tels que des tables, des dortoirs, des affaires scolaires, des vêtements et des jouets afin d’accueillir des centaines d’orphelins.</p>

      <p>Ceux-ci pourront jouir d’un cadre de vie sain, afin de recevoir une éducation scolaire digne de ce nom. Outre le matériel, nous pensons développer l’idée <strong style="color: red;">d’une aide individuelle pour chaque enfant.</strong></p>


      <p>En effet, à force de les côtoyer, nous finissons par les connaitre et les comprendre. Nous nous engageons à leur accorder un peu de temps, lors de nos excursions sur place, pour leur proposer de s’amuser et ainsi reprendre goût à la vie. Une petite attention de notre part remplacerait le manque (voire l’absence) d’affection qui peut affecter le développement émotionnel d’un petit. Si nous pouvons leur apporter une petite part de bonheur, pourquoi pas vous ?</p>     
     <br>
    </div> 


<?php
      include('structures/footer.php');
    ?>
</div>
	</body>
</html>