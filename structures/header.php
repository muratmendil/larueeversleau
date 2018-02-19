<?php

if (!isset($_SESSION['style'])) {
    $_SESSION['style'] = array();
}
?>

<script>
var fontSize = 1.5;
function zoomIn() {
    fontSize += 0.1;
    document.body.style.fontSize = fontSize + "em";
}
function zoomOut() {
    fontSize -= 0.1;
    document.body.style.fontSize = fontSize + "em";
}
</script>

<!-- <div class="fairedon">
<a type="button" class="btn btn-hot text-uppercase btn-lg" href="dons.php">Faire un don <span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
</div> -->
<div class="menu">
<div class="fairedon">
<div id="zoom">Zoomer: <img src="images/bouton-.jpg" onClick="zoomOut()" alt="Réduire la taille du texte" width="20" height="20">

<img src="images/bouton+.jpg" onClick="zoomIn()" alt="Agrandir la taille du texte" width="20" height="20"></div>
<br/>
</div>

<div class="modeaccessibilite">
<form method="post" action="#" enctype="multipart/form-data">
        <label>Mode accessibilité:</label>
        <label><select name="accessibilite" id="accessibilité">
        <?php
            if(!isset($_POST['ok']) & !isset($_SESSION['style'])) {
        ?>
            <option value="Normal" selected="selected">Normal</option>
            <option value="Mal-voyants">Mal-voyants</option>
            <option value="Mal-voyants-fond-noir">Mal-voyants - Fond noir</option>
            <?php
              }
        
            else if(!isset($_POST['ok']) and isset($_SESSION['style']) and $_SESSION['style'] == 'accessible1') {
            ?>
            <option value="Normal" selected="selected">Normal</option>
            <option value="Mal-voyants">Mal-voyants</option>
            <option value="Mal-voyants-fond-noir">Mal-voyants - Fond noir</option>
            <?php
                }
           
            else if(!isset($_POST['ok']) and isset($_SESSION['style']) and $_SESSION['style'] == 'accessible2') {
            ?>
            <option value="Normal">Normal</option>
            <option value="Mal-voyants"  selected="selected">Mal-voyants</option>
            <option value="Mal-voyants-fond-noir">Mal-voyants - Fond noir</option>
            <?php
                }
            
            else if(!isset($_POST['ok']) and isset($_SESSION['style']) and $_SESSION['style'] == 'accessible3') {
            ?>
            <option value="Normal">Normal</option>
            <option value="Mal-voyants">Mal-voyants</option>
            <option value="Mal-voyants-fond-noir" selected="selected">Mal-voyants - Fond noir</option>
            <?php
                }
        
            else if(isset($_POST['ok'])) {
                if(isset($_POST['accessibilite']) and $_POST['accessibilite'] == 'Normal'){
                    $_SESSION['style'] = "accessible1"
                    ?>
                <option value="Normal" selected="selected">Normal</option>
                <option value="Mal-voyants">Mal-voyants</option>
                <option value="Mal-voyants-fond-noir">Mal-voyants - Fond noir</option>
            <?php
                }
                
            
               else if (isset($_POST['accessibilite']) and $_POST['accessibilite'] == 'Mal-voyants'){
                    $_SESSION['style'] = "accessible2"
                    ?>
                <option value="Normal">Normal</option>
                <option value="Mal-voyants" selected="selected">Mal-voyants</option>
                <option value="Mal-voyants-fond-noir">Mal-voyants - Fond noir</option>
            <?php
                }
                
            
               else if (isset($_POST['accessibilite']) and $_POST['accessibilite'] == 'Mal-voyants-fond-noir'){
                    $_SESSION['style'] = "accessible3"
                     ?>
                <option value="Normal">Normal</option>
                <option value="Mal-voyants">Mal-voyants</option>
                <option value="Mal-voyants-fond-noir" selected="selected">Mal-voyants - Fond noir</option>
            <?php
                }
            }

            else {
                ?>
                <option value="Normal" selected="selected">Normal</option>
                <option value="Mal-voyants">Mal-voyants</option>
                <option value="Mal-voyants-fond-noir">Mal-voyants - Fond noir</option>
            <?php
             }
      
            ?>



       </select></label>
       <button value="ok" name="ok" id="ok">OK</button>
</form>
</div>
<br/>
<br/>
<br/>
</div>


<div class="row">
<div class="centermenu"  style="width: 83%; margin: 0 auto;">
<p style="text-align: center;"><img class="img-circle" src="images/logo-ass.jpg" alt="logo du site web" height="130" width="130"></p>
<br/>
<label for="show-menu" class="show-menu">Afficher le menu</label>
<input type="checkbox" id="show-menu" role="button">
<ul id="menu">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="apropos.php">A propos</a> </li>
    <li><a href="forage.php">Nos actions</a></li>
    <li><a href="orphelinat.php">Orphelinat</a></li>
    <li><a href="evenementiel.php">Evénementiel</a></li>
    <li><a href="actualite.php">Actualité</a></li>
    <li><a href="dons.php">Faire un don</a></li>
    <li><a href="contact.php">Contact</a></li>
</ul>
</div>
</div>
