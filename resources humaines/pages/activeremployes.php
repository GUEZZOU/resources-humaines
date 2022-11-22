<?php 


  session_start();
  if (isset($_SESSION['user'])){

  require_once("connexiondb.php");
  $id=$_GET['idemp']; 
  $etat=$_GET['etat'];
  if ($etat==1)
      $nouveauetat=0;
  else 
      $nouveauetat=1;
 
  $requete="update employes set etat=? where idemp=?";
  $params=array($nouveauetat,$id);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
  header('location:employes.php');

  }
else {
     header('location:connexion.php');
}

?>


