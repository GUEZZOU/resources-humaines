<?php

require_once("connexiondb.php");

  $fichiercv=$_FILES['cv']['name'];
  $fichierlettre=$_FILES['lettre']['name'];

  $cvExt = explode('.',$fichiercv);
  $lettreExt = explode('.',$fichierlettre);
  $cvExtActu = strtolower(end($cvExt));
  $lettreExtActu = strtolower(end($lettreExt));
  $autoriser = array('pdf','PDF');

  

  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  $date=$_POST['date'];
  $genre=$_POST['genre'];
  $email=$_POST['email'];
  $telephone=$_POST['telephone'];
  $poste=$_POST['poste'];
  $niveau=$_POST['niveau'];
  
 if (in_array($cvExtActu,$autoriser) && in_array($lettreExtActu,$autoriser) ){
      move_uploaded_file($_FILES['cv']['tmp_name'],"../fichier/".$_FILES['cv']['name']);
      move_uploaded_file($_FILES['lettre']['tmp_name'],"../fichier/".$_FILES['lettre']['name']);
     
      $requete="INSERT INTO candidats (prenom,nom,dateNaissance,genre,email,telephone,poste,niveau,cv,lettre) VALUES (?,?,?,?,?,?,?,?,?,?)";
      $params=array($prenom,$nom,$date,$genre,$email,$telephone,$poste,$niveau,$fichiercv,$fichierlettre);
      $resultat=$pdo->prepare($requete);
      $resultat->execute($params);?>
      <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: " Félicitations ! Merci d'avoir soumis votre candidature ..!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "candidature.php";
             })
         </script>     

     </body></html>
 <?php }
else { ?>
     <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "warning",
          title: "Erreur !",
          text: "vous ne pouvez pas importer les fichiers de ce type, seuls les fichiers pdf sont autorisés !",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "candidature.php.php";
             })
         </script>     

     </body></html>
 <?php } 
?>