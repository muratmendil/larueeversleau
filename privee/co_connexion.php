<?php
require('co_bdd.php');

if(isset($_POST['connexion']))
  {
    $email_connexion = htmlspecialchars($_POST['email']);
    $mot_de_passe_connexion = hash('sha256', $_POST['mot_de_passe']);
    if(!empty($email_connexion) && !empty($mot_de_passe_connexion))
    {
      
      //requete administrateur
      $req_admin = $bdd->prepare("SELECT * FROM lrvl_admin WHERE email = ? AND mdp = ?");
      $req_admin->execute(array($email_connexion, $mot_de_passe_connexion));
      $admin_exist = $req_admin->rowCount();
      

      if($admin_exist == 1)
      {
        
          $admin_info = $req_admin->fetch();
          $_SESSION['id'] = $admin_info['id'];
          $_SESSION['admin'] = 1;
          $_SESSION['prenom'] = $admin_info['prenom'];
          $_SESSION['nom'] = $admin_info['nom'];
          header('Location: accueil.php?id='.$_SESSION['id']);

          
          }
          else {
            echo "Qui êtes vous?";
          }
          
          
      }
      
      else 
      {
        $erreur = "Mauvais mail ou mot de passe !";
        
      }
      
    }
?>
