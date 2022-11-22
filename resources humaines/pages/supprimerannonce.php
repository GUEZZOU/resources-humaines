<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexiondb.php");

  $id=$_GET['idannonce'];
  $requete="delete from annoncement where idannonce=$id";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();
  }
else {
     header('location:connexion.php');
}

?>

 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "l'annonce a été supprimé avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "annoncements.php";
             })
         </script>     

     </body></html>