<?php
session_start();
$page = 'actions';
require("structures/accessible.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Nos actions - La Ruée Vers L'eau</title>
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
      <p style="font-size: 30px; text-align: center;">LES <span style="color: #3cb878; font-size: 30px;">FORAGES</span></p> 
      <br>
      <p><strong>La ruée vers l’eau a débuté ses premières actions autour de l’eau en creusant, en l’espace d’un an, 2 puits au Sénégal.</strong></p>
      
      <p>A cela l’association vient en aide aux orphelins afin de répondre ne serait ce qu’à leurs besoins primaires ce qui est juste normal.Enfin nous tentons de répondre aux besoins ponctuels des habitants avec l’aide d’Allah.</p>

      <p>Il existe différents types de puits à moindre coût mais nous avons décidé de ne réaliser que des puits à forage. Par la grâce <strong>d’Allah Azawajel</strong>, nous avons effectué jusqu’à aujourd’hui 15 forages au Niger. </p>

    <p>C’est le fruit d’une récolte de dons provenant <strong>de donateurs</strong> aussi investis que nous le sommes, pour la cause des plus défavorisés.</p>
    <br/>
    <p style="text-align: center;"><a href="dons.php" class="btn btn-lg btn-hot">Faire un don <span class="glyphicon glyphicon-heart"></span></a></p>
  </div>
  

  <!-- LE FORAGE C'EST QUOI? -->


  <div class="col-lg-12 realisation" style="text-align: justify;">
      <br>
      <br>
      <p style="font-size: 30px; text-align: center;">CONCRETEMENT, <span style="color: #3cb878; font-size: 30px;">QU'EST-CE QUE LE FORAGE?</span></p>  
      <br>
      <p><strong>C’est l’action de creuser un trou dans la terre dans le but d’exploiter le sous-sol afin de trouver une ressource naturelle enfouie : l’eau, source de vie.</strong></p> 

      <p>Ce type de puits est plus sécurisé qu’un puits traditionnel. En effet, il mesure environ 50 mètres et présente une durée de vie plus longue,soit en  moyenne 30 à 50 ans en fonction de la maintenance.</p>

      <p>Toutefois, son coût est très élevé : le prix minimum de nos forages variaient entre 6107 et 8000 euros en fonction de la profondeur, de la distance et du type de pompe choisi.</p>
      <p>Nous préférons ce type de puits car plus hygiénique et l’eau remonte à la surface par un simple système de pompe. Ce sont donc des puits modernes qui permettent une récupération de l’eau plus importante. Sachez que l’eau est vérifiée par <strong style="color: red;">des laboratoires d’expertises locales.</strong></p>
      <br/>
      <p><a href="uploads/Analyse-deau-F13-TONDY-KWARE-BENE.pdf">L’analyse du laboratoire</a> d'expertises locales en pdf concernant la qualité de l'eau</p>
      <br/>
     <br/>
    </div> 
<br/>

          <!-- NOS ACTIONS EN PHOTOS -->
      
    <div class="container" style="text-align: justify; float: none !important;">
    <br>
    <br>
    <div class="row">
    <br/>
      <p style="font-size: 30px; text-align: center;">NOS ACTIONS <span style="color: #3cb878; font-size: 30px;">EN PHOTOS</span></p> 
      <br>
      <div class="ccol-md-4 col-lg-4 col-xs-12 col-sm-6"><br><p style="text-align: center;"><img class="img-rounded imagefonction" src="images/action1.jpg" alt="Nous réalisons des forages" style="width:300px;height:250px;"></p></div>
      <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6"><br><p style="text-align: center;"><img class="img-rounded imagefonction" src="images/action2.jpg" alt="Nous réalisons des châteaux d'eau" style="width:300px;height:250px;"></p></div>
      <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6"><br><p style="text-align: center;"><img class="img-rounded imagefonction" src="images/action3.jpg" alt="Nous installons des panneaux solaire" style="width:300px;height:250px;"></p></div>
      <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6"><br><p style="text-align: center;"><img class="img-rounded imagefonction" src="images/action4.jpg" alt="Nous aidons les orphelins en aide alimentaire et vestimentaire" style="width:300px;height:250px;"></p></div>
      <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6"><br><p style="text-align: center;"><img class="img-rounded imagefonction" src="images/action5.jpg" alt="Nous réalisons des forages" style="width:300px;height:250px;"></p></div>
      <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6"><br><p style="text-align: center;"><img class="img-rounded imagefonction" src="images/action6.jpg" alt="Nous réalisons des châteaux d'eau" style="width:300px;height:250px;"></p></div>
    </div>
    <br/>
    <br/>
    </div>
  


        <!-- DES VILLAGES CONQUIES -->


    <div class="col-lg-12 realisation" style="text-align: justify;">
      <br>
      <br>
      <p style="font-size: 30px; text-align: center;">DES VILLES <span style="color: #3cb878; font-size: 30px;">CONQUIES</span></p>  
      <br>
      <p><strong>Le premier forage nommé Abou Bakr As-Siddik a été réalisé le 19 décembre 2013 à Roumdji au Niger. Quelle a été notre satisfaction de voir ue notre travail a payé depuis ! Ce sont de nombreux habitants qui on pu bénéficier d'un eau saine et claire, dans un pays où l'eau potable est une ressource rare voire inexistante.</strong></p> 

      <p>C'est sur le sol du village de Sira que le second forage; du nom d'Umar Ibn Al-Khattab, a pu avoir le jour le même mois. Depuis, les travaux n'ont pas cessé et nous avons multiplié <strong>nos interventions en Afrique</strong></p>

      <p>En 2014, ce sont pas moins de 4 forages qui on été construits à Youri, à Gorzoré, à Laoudou ainsi qu'à Lelehi Koy. Des bénévoles aguerris et investis se sont portés volontaires auprès d'une équipe de profesionnels qui s'est constituée sur place, prête à intervenir et partager son savoir-faire pour la construction de forages.</p>

      <p style="text-align: center;"><img src="images/annee.png" style="center; width: 60%" alt="les années d'intervention en Afrique de l'association"></p>

      <p>L'année suivante, 5 forages ont été édifiés. Bourboukabe, Bourbouka, Kourtere, Goroua et M'borian sont les 5 lieux sélectionnés pour accueillir les forages La Ruée Vers L'eau. En 2016, deux forages baptisés Salman Al Farisi et Hamza Ibn A.Muttalib ont été bâtis, respectivement à Louga et Tondy Kwarey Béné.</p>

      <p>Tous ces habitants ont droit en somme à une eau saine à volonté! De plus, leur santé est préservée. Ils font moins de marche pour regagner des points d'eau et fournissent moins d'effort pour extraire l'eau. Grâce à vous et vos dons il y a toujours plus d'espoir! </p>

      <p>Par tous les forges réalisés, nous avons mis en place des plaques d'identification qui renseignent leur nom, numéro et date d'élaboration. Elles permettent de mieux les distinguer. Lors des prochaines constructions, nous bâtirons également des écriteaux. Nous établirons une liste de nouveaux villages que nous visiterons, où le manque d'eau se fait vraiment ressentir, afin d'envisager de futures élaborations par ordre de priorité.</p>
      <br/>

      <p><strong style="color: red;">Pourquoi le Niger ?</strong></p>
      <p>Le Niger reste l’un des pays les plus pauvres au monde Il occupe la dernière place sur l’indice de Développement Humain établi par le programme des Nations Unies pour le développement. Nous avons choisi le Niger car il nous a semblé être le pays le plus URGENT. En effet, 63 % des Nigériens vivent avec moins d’un dollars par jour.</p>

      <p>Les conditions climatiques aggravent la situation, produisant une insécurité alimentaire permanente. En effet, l’absence d’eau salubre et d’assainissement adéquat entraine des maladies diarrhéiques (diarrhée), à l’origine de 760 000 décès par an chez les moins de 5 ans, selon l’Organisation mondiale de la santé. L’accès à l’eau potable est primordiale cependant, le Niger dispose d’un fort potentiel en eaux souterraines.</p>
     <br>
    </div> 


    <!-- AQUISITION D'UNE FOREUSE -->


  <div class="col-lg-12" style="text-align: justify;">
      <br>
      <br>
      <p style="font-size: 30px; text-align: center;">L'ACQUISITION D'UNE FOREUSE <span style="color: #3cb878; font-size: 30px;">POUR PLUS DE PUITS A FORAGE !</span></p>  
      <br>
      <p><strong>Une foreuse est utilisée pour permettre de faire un puits à forage mais jusqu’à 2017, nous la louions car ce moyen technique n’était pas accessible à tous. Il nous fallait payer le forage ainsi que la location de la foreuse. Il est préférable pour nous d’acheter cette machine mais son prix est très élevé. </strong></p> 

      <p>Nous avons alors eu besoin de votre soutien pour acheter une foreuse utilisable à chaque voyage. Elle serait personnelle et accessible autant de fois que vos dons nous le permettent afin de construire des puits à forage aux nécessiteux d’Afrique.</p>

      <p>Acquérir définitvement cette machine est la clé d'une double efficacité:</p>
      <p>- Diviser le coùt des actions par deux et faire des economies (en stoppant la location de la foreuse);</p>
      <p>- Diminuer de moitié le montant important d'un forage (le prix pouvait s'accroitre jusqu'à 8000 euros).</p>

      <br/>

      <p>Ainsi, avec les économies réalisées, nous pouvons réaliser 2 fois plus de forages ! C'est pourquoi nous avons eu l'idée de mettre en place, 2015, le projet des 300 donateurs, afin de se doter d'une foreuse le plus rapidement possible. Chaque participant s'engageait à faire le don de 25 euros (ou plus) chaque mois jusqu'à atteindre le montant de la machine. Notre persévérance, et la votre, ont payé puisque ce proframme de donation touche à sa fin. Il a permis jusqu'ici de soutenir considérablement nos frère et soeurs démunis avec l'élaboration d'un forage tous les deux mois. Cette machine constitue un vrai levier pour ériger des forages de façon régulière.</p>
      <br/>
      <p style="text-align: center;"><img src="images/listeforage.png" style="center; width: 60%" alt="les années d'intervention en Afrique de l'association"></p>
      <br/>
     <br>
    </div> 
    <br/>
    
        <!-- LE FORAGE C'EST QUOI? -->


  <div class="col-lg-12 realisation" style="text-align: justify;">
      <br>
      <br>
      <p style="font-size: 30px; text-align: center;">NOS <span style="color: #3cb878; font-size: 30px;">INNOVATION</span></p>  
      <br>
      <p><strong>La nouveauté dans nos actions réside au niveaux de l'installation de château d'eau et de panneaux solaires. Par nouveauté, nous entendons l'apport de l'innovation dans des lieux qui jusque-là ne bénéficiaient même pas (ou très peu) d'accès à l'eau potable ou à l'électricité. Nous voulions en effet servir et agir de manière à ce que nos actions restent et perdurent</strong></p> 

      <br/>
      
  <div class="row">
    <div class="col-lg-4 blocimage">
      <img class="img-thumbnail" src="images/panneau.png" alt="Image d'un membre de l'équipe avec un t-shirt La Ruée Vers L'eau" style="width:60%; height:35%;">
      </div>
    <br/>
    <div class="col-lg-8" style="text-align: justify;">
      <br>

    <p>Le panneau solaire est un dispositif place en évidence, sur le toit de bâtiment ou à terre, permettant de capter les rayons solaires afin de les transformter en énergie thermique ou électrique.</p>
    <p>Une belle idée pour rendre indépendants les villageois !</p>

    
    </div>
  </div>

  <br/>

  <div class="row">
    <br/>
    <div class="col-lg-8" style="text-align: justify;">
      <br/>
      <br/>
    <p>Un château d'eau entreprise une très grande quantité d'eau pour la redistribuer sous pression et de façon sécurisée. Il forme un élément de sécurité d'approvionnement de l'eau.</p>

    <p>Il protège les pompes et permet d'éviter de les actionner très souvent. La canalisation est solide face aux agressions extérieures (animaux, temps, catastrophes naturelle...). En cas de problème, la construction résiste en raison de la solidité et continue de distribuer la ressource naturelle jusqu'à 2H heures après la catastrophe (qu'elle soit naturelle ou matérielle).</p>
    
    </div>
    <div class="col-lg-4 blocimage">
      <img class="img-thumbnail" src="images/chateau.png" alt="Image d'un membre de l'équipe avec un t-shirt La Ruée Vers L'eau" style="width:40%; height:20%;">
      </div>
  </div>




      <br/>
     <br>
    </div> 


<?php
      include('structures/footer.php');
    ?>
    
</div>
	</body>
</html>