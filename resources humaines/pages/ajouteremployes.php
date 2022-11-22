<?php

require_once("connexiondb.php");

  $photo=$_FILES['photo']['name'];

  $photoExt = explode('.',$photo);
  $photoExtActu = strtolower(end($photoExt));
  $autoriser = array('jpg','jpeg','png');

  

  $email=$_POST['email'];
  $date=$_POST['date'];
  $nom=$_POST['nom'];
  $telephone=$_POST['telephone'];
  $poste=$_POST['poste'];
  $dep=$_POST['dep'];
  $mt=$_POST['mt'];
  
 if (in_array($photoExtActu,$autoriser)){
      move_uploaded_file($_FILES['photo']['tmp_name'],"../images/".$_FILES['photo']['name']);
     
      $requete="INSERT INTO employes (email,dateNaissance,nom,departement,poste,telephone,motdepasse,photo) VALUES (?,?,?,?,?,?,?,?)";
      $params=array($email,$date,$nom,$dep,$poste,$telephone,$mt,$photo);
      $resultat=$pdo->prepare($requete);
      $resultat->execute($params);?>
      <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "  Félicitations, votre compte est créé, mais temporairement inactif jusqu'à son activation par l'administrateur !",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "accueil.php";
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
          text: "vous ne pouvez pas importer les fichiers de ce type!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "accueil.php";
             })
         </script>     

     </body></html>
 <?php } 
?>