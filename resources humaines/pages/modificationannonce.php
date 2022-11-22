<?php
   require_once("identifier.php");
  require_once("connexiondb.php");
  $id=$_POST['id'];
  $titre=$_POST['titre'];
  $description=$_POST['t1'];


 
  $requete="update annoncement set titre=?,description=? where idannonce=?";
  $params=array($titre,$description,$id);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
  header('location:annoncements.php');

?>
