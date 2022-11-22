<?php
   require_once("identifier.php");
  require_once("connexiondb.php");
  $id=$_POST['id'];
  $titre=$_POST['titre'];
  $type=$_POST['type'];
  $date=$_POST['date'];
  $heure=$_POST['heure'];

 
  $requete="update reunion set titre=?,type=?,datereunion=?,heurereunion=? where idreunion=?";
  $params=array($titre,$type,$date,$heure,$id);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);

  header('location:reunion.php');
?>
