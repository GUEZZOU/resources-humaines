<?php
  session_start();
  require_once("connexiondb.php");
  $login=$_POST['email'];
  $mt=$_POST['motdepasse'];


 
  $requete="select *from employes where email='$login' and motdepasse='$mt'";
  $resultat=$pdo->query($requete);
  
  $requete2="select *from rh where email='$login' and motdepasse='$mt'";
  $resultat2=$pdo->query($requete2);
  
  if ($user=$resultat->fetch()){
      if ($user['etat']==1){
          $_SESSION['user']=$user;
          header('location:profilEmployes.php');
      }
      else{
          $_SESSION['erreurLogin']="<strong>Erreur!! </strong>votre compte est désactivé.<br> Veuillez contacter l'administrateur.";
          header('location:connexion.php');
      }
  }
   else if ($user=$resultat2->fetch()){
          $_SESSION['user']=$user;
          header('location:profilRH.php');
      }
  else {
      $_SESSION['erreurLogin']="<strong>Erreur!! </strong> Login ou mot de passe incorrecte ! ";
          header('location:connexion.php');
  }
  

?>