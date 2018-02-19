<?php
session_start();
$page = 'apropos';
require("structures/accessible.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Qui sommes nous ? - La Ruée Vers L'eau</title>
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



<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-lg-4 blocimage">
      <img class="img-thumbnail" src="images/apropos1.jpg" alt="Image d'un membre de l'équipe avec un t-shirt La Ruée Vers L'eau" style="width:60%; height:35%;">
      </div>
    <br/>
    <div class="col-lg-8" style="text-align: justify;">
      <p style="font-size: 30px;">QUI <span style="color: #3cb878; font-size: 30px;">SOMMES-NOUS?</span></p> 
      <br>
      <p><strong>L’association La Ruée Vers L’eau œuvre depuis septembre 2013, principalement en faveur de la population nigérienne. Elle intervient dans les différents villages du pays afin d’apporter un élément essentiel à la survie humaine : l’eau.</strong></p>
      
      <p>A cela l’association vient en aide aux orphelins afin de répondre ne serait ce qu’à leurs besoins primaires ce qui est juste normal.Enfin nous tentons de répondre aux besoins ponctuels des habitants avec l’aide d’Allah.</p>

      <p>Concernant l’équipe, nous sommes une équipe de bénévoles : aucun des membres n’est rémunérés et beaucoup de frais dus au fonctionnement sont payés par les membres de l’équipe et la Louange appartient à Allah..
	  L’équipe fonctionne avec une bonne humeur et un dynamisme certain. Un objectif en commun : servir les autres.</p>

	  <p>L’association est ouverte aux autres peu importe leurs horizons afin d’échanger sur nos expériences communes.</p>

	  <p>Enfin sachez que nous sommes ouverts à d’autres arrivées qui viendraient renforcer l’équipe, pour cela il vous suffit de nous contacter via le bouton « nous contacter » en précisant vos compétences et qualités humaines.</p>
	  
	  <p style="text-align: center;"><strong>« La porte du bien est ouverte à toutes et tous »</strong></p>
    </div>
  </div>
</div>


<br/>
<br/>


<div class="container-fluid bg-grey">
  <div class="row realisation">
  <div class="col-sm-8" style="text-align: justify;">
      <br>
      <p style="font-size: 30px;">MANQUE <span style="color: #3cb878; font-size: 30px;">D'EAU</span></p> 
      <br>
      <p><strong>3800 enfants meurent chaque jour par manque d'eau: c'est ce constat alarmant qui a permis à l'association d'intervenir rapidement et surtout utilement.</strong></p> 

      <p>En effet l'absence d'eau salubre et d'assainissement adéquat entraine des maladies diarrhéiques(diarrhée), à l'origine de 760 000 décès par an chez les moins de 5 ans, selon <strong>l'Organisation mondiale de la santé.</strong> Cette pathologie est causée par diverses bactéries ou autres micro-organisme transmis par le biais de l'eau, d'aliment contaminés et même d'une personne à une autre en cas d'hygiène insuffisante.</p>

      <p>Alors pour prévenir voire réduire la menace qu'engendre cette diarrhée(selles liquides, urine rare, vomissement, transpiration, tension artérielle faible, déshydratation, décès), l'accès aux dentrées, et surtout à l'eau potable est très important.</p>
    </div> 
    <div class="col-sm-4 blocimage">
    <br>
      <img class="img-thumbnail" src="images/apropos2.jpg" alt="image d'une puit réaliser par l'association" style="width:100%; height:100%;">
      <br/>
      <br/>
    </div>
    <br/>
  </div>
</div>

<br/>
<br/>


<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4 blocimage">
    <br/>
    <br/>
     <img class="img-thumbnail" src="images/apropos3.jpg" alt="Image d'un membre de l'équipe au Niger pour aider les habitants à realiser des puits" style="width:90%; height:100%;">
    </div>
    <br/>
    <div class="col-sm-8" style="text-align: justify;">
      <p style="font-size: 30px;">L'EAU <span style="color: #3cb878; font-size: 30px;">UN DROIT ET UN BESOIN VITAL</span></p> 
      <br>
      <p><strong>Quoi de mieux que l'aumône de l'eau? Elle est considérée comme une aumône continue (Sadaqua jariya en arabe) dans la religion musulmane, dont la récompense continue même après la mort.</strong></p>
      
      <p>Une décision spirituelle certes mais surtout naturelle qui répond également à un besoin vital. Plus de 80% des habitants sont privés d'eau dans le continent africain. <strong>L'association La Ruée Vers L'eau</strong> a alors souhaité rendre accessible plusieurs points d'eau aux plus démunis, en construisant des puits à forage.</p>

	  <p>La question du choix du puits n'est plus à poser. Un forage est certes 5 fois plus cher qu'un puits traditionnel mais cependant 10 fois meilleur, sa durée de vie dépasse les 50 ans, soit 5 fois plus qu'un puits classique. En, plus sa construction est plus rapide: Elle est de 3 à 4 jours seulement tandis que plusieurs semaine sont nécessaires pour réaliser un puits classique. Et l'avantage non moins négligeable, c'est bien sûr la qualité de l'eau !</p>
	 
    </div>
  </div>
</div>

<br/>
<br/>


<div class="container-fluid bg-grey">
  <div class="row realisation">
    <br>
      <p style="font-size: 30px;">VERS L'AUTONOMIE <span style="color: #3cb878; font-size: 30px;">DES VILLAGES VISITES</span></p> 
      <br>
      <div class="col-sm-4" style="text-align: justify;">
      	<p>L'eau est un droit qui a poussé La Ruée Vers L'eau à déployer plus de moyens d'accès à l'eau potable comme la construction de châteaux d'eau. Les habitants peuvent gérer seuls l'entreposage de l'eau dans un réservoir et assurer la pression constante de l'eau.</p>
      </div>
      <div class="col-sm-4" style="text-align: justify;">
      	<p>L'association a également eu l'ambition de développer ses actions sur d'autres axes, avec notamment l'installation de panneaux solaires afin de capter les rayonnements solaires et les transformer en énergie. L'avantage majeur de ces deux type d'apport matériels conduit vers l'autonomie du village, aussi bien sur le plan humain que matériel.</p>
      </div>
      <div class="col-sm-4" style="text-align: justify;">
      	<p>L'association La Ruée Vers L'eau s'est orientée principalement vers des pays comme le Niger, selectionné en fonction de sa pauvereté, du contact de confiance ainsi que de la sécurité de la région.</p>
      </div>
      <br>
  </div>
</div>


<br/>
<br/>

<div class="container-fluid bg-grey">
  <div class="row">
    <br/>
    <div class="col-lg-8" style="text-align: justify;">
      <p style="font-size: 30px;">LE SOURIRE DES ENFANTS, <span style="color: #3cb878; font-size: 30px;">LE MEILLEUR CADEAUX</span></p> 
      <br>
      <p><strong>La Ruée Vers L'eau organise fréquemment des voyages, parfois jusqu'à 3 fois par an, pour rendre compte de l'avancée des travaux(si les membres bénévoles ne sont pas présents sur place lorsque ceux-ci sont lancées) ainsi que du bon fonctionnement des puits à forages.</strong></p>
      
      <p>C'est aussi l'occasion de visiter les villagois qui savent que l'association puisse recevoir de leur part, c'est d'apercevoir une once de bonheur dans l'expression de leur visage car rien ne vaut le sourire de ceux qui ne croyaient plus en l'espoir.</p>

      <p>Lors de ces excursion humanitaires, des aides alientaires et vestimentaires sont également distribuées aux démunis locaux. Pour que les enfants puissent bénéficier d'une bonne éducation dans un cadre d'étude convenable, La Ruée Vers L'eau prévoit d'apporter un soutien matériel et financer pour le revêtement et l'ameublement d'orphelinats.</p>

      <p>Chaque enfant a besoin d'amour et d'affection. L'association souhaite donc favoriser la prise en charge personnalisée des orphelins. En effet, il d'avis que l'aide individuelle y trouverait tout son sens. Un rien les rend heureux alors si nous pouvions leur apporter qu'une petite attention, le sourire ne se décrocherait certainement pas de leur visage</p>
    </div>
<div class="col-lg-4 blocimage">
    <br/>
    <br/>
      <img class="img-thumbnail" src="images/apropos4.jpg" alt="Image des orphelins au Niger pour la rentrer scolaire" style="width:100%; height:100%;">
      </div>

  </div>
</div>




<?php
      include('structures/footer.php');
    ?>
</div>
	</body>
</html>