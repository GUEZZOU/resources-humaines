<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexiondb.php");

  $id=$_GET['idconge'];
  $requete="delete from congesdemandes where idconge=$id";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();

  }
?>

<html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "le congé a été supprimé avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "congesdemandes.php";
             })
         </script>     

     </body></html>