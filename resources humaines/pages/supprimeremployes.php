<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexiondb.php");

  $id=$_GET['idemp'];
  $requete="insert into employesarchiver SELECT '',email,dateNaissance,nom,departement,poste,telephone,motdepasse,'',photo FROM employes WHERE idemp=$id";
  $requete2="delete from employes where idemp=$id";
  $resultat=$pdo->prepare($requete);
  $resultat2=$pdo->prepare($requete2);
  $resultat->execute();
  $resultat2->execute();
  
  $requete3="update employesarchiver set etat=0 where idemp=?";
  $resultat3=$pdo->prepare($requete3);
  $resultat3->execute();

  }
?>

 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "l'employé a été archivé avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "employes.php";
             })
         </script>     

     </body></html>