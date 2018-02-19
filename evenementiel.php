<?php
session_start();
$page = 'evenement';
require("structures/accessible.php");
require("co_bdd.php");
?>

<!DOCTYPE html> 
<html lang="fr">
  <head>
    <title>Evénements - La Ruée Vers L'eau</title>
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
    <?php include('structures/header.php'); ?>
<br/>
<div class="contenue"> 

 <div class="col-lg-12">
      <p style="text-align: center; font-size: 7vw;">NOS <span style="color: #3cb878; font-size: 7vw;">EVENEMENTS</span></p> 
  </div>
  <br/>
  <br/>
  

<div class="col-lg-12">
  <div class="row text-center">
    <div class="col-lg-4" style="padding:10px;background:#9C0;"> 
        <h1><span class="glyphicon glyphicon-globe"></span></h1>
        <h3>Water Cup</h3>
        <p>Tournoi de football</p><br>
    </div>
    <div class="col-lg-4" style="padding:10px; background:#39F;">
        <h1><span class="glyphicon glyphicon-fire"></span></h1>
        <h3>Jujitsu brésilien</h3>
        <p>Art martial</p><br>
    </div>
    <div class="col-lg-4" style="padding:10px;background:#F66;">
        <h1><span class="glyphicon glyphicon-leaf"></span></h1>
        <h3>Challenge Bootcamp</h3>
        <p>Exercice physiques comme à l'armée</p><br>
    </div>
  </div>
</div>


<div class="col-lg-12" style="margin-top: 5%; border: 1px dashed black;">
<br/>
    <div class="alert alert-success rounded">
        <p style="font-size: 30px; text-align: center;">WATER CUP <span style="color: #3cb878; font-size: 30px;">QU'EST-CE QUE C'EST?</span></p> 
        <br/>
        <p>Depuis 2014, La ruée vers l'eau organise chaque année un tournoi de football, la Water Cup, afin de récolter des fonds pour nos frères et soeurs du Niger. Une journée 100% foot humanitaire qui rassemble tous les (jeunes) hommes motivés pour jouer au profit de notre association. C'est un moment unique à partager tout en pensant aux personnes qui nous attendent dans les pays d'Afrique !</p>
        <br/>
        <p>Lors de ces rencontres annuelles qui allient passion du foot et engagement humanitaire, nous vous proposons: </p>
        <p>- Des jeux interactifs</p>
        <p>- De beaux lots à gagner</p>
        <p>- Des challenges footballistiques</p>
        <p>- Un espace restauration: une grnde buvette, un barbecue, des gâteaux...</p>
    </div>

    <div class="alert alert-info rounded">
        <p style="font-size: 30px; text-align: center;">JUJITSU BRESILIEN <span style="color: #3cb878; font-size: 30px;">QU'EST-CE QUE C'EST?</span></p>
        <br/>
        <p style="text-align: justify;">Le football n'est pas le seul événement convié aux hommes, en effet notre association La Ruée Vers L'eau organise chaque année des tournois de jujitsu brésilien ou les hommes mettent à profit leurs force, leurs techniques et leurs compétitivités.</p> 
        <br/>
        <p style="text-align: justify;">Le jujitsu est un art martial, un sport de combat, le concept qu'une personne peut se défendre face à un opposant plus lourd et fort en utilisant les techniques appropriées, plus particulièrement en amenant le combat au sol et en appliquant des techniques d'étranglement, de clé articulaire ou de compression musculaire.</p>
        <br/>
        <p style="text-align: justify;">Pendant ce tournoi, notre équipe en place à l'occasion d'échanger avec les donnateurs ainsi que d'offrir des bons moment aux nombreux invités. Ce tournoi est aussi un moment pour vivre des moments très conviviaux ou des boissons et pâtisseries sont servis.</p>
    </div>

    <div class="alert alert-danger rounded">
        <p style="font-size: 30px; text-align: center;">CHALLENGE BOOTCAMP <span style="color: #3cb878; font-size: 30px;">QU'EST-CE QUE C'EST?</span></p> 
        <br/>
        <p style="text-align: justify;">Les frères ne sont pas les seuls sportifs puisque les soeurs aussi ont leur propre événement ! En effet, les femmes bénévoles de La Ruée Vers L'eau ont décidé de tester l'esprit compétitif de toutes celles qui souhaitent participier au défi sportif: le Challenge Boot Camp. En quelques mots, c'est un entrainement façon commando !</p>
        <br/>
        <p style="text-align: justify;">Cette méthode de conditionnement physique est une façon d'appréhender les exercices physiques calqués sur ceux de l'armée. Le but n'est pas de développer une musculature à ces dames mais de forger une silhouette quasi-parfaite (plus dans un esprit fitness), tout en se basant sur la persévérance et l'effort collectifs. Les plus performantes reçoivent des cadeaux alors qui seront les gagnantes?</p>
        <br/>
        <p style="text-align: justify;">Cet événement est aussi l'occasion d'aller à la rencontre de femme volontaire qui oeuvrent au quotidien pour le compte de La Ruée Vers L'eau, et de partager des moments conviviaux autour d'un goûter (thé et pâtisseries).</p>
    </div>
</div>


<?php
      include('structures/footer.php');
    ?>
</div>

</body>
</html>