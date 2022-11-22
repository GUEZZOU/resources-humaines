<?php 
  require_once("identifier.php");
  require_once("connexiondb.php");
  $id=$_POST['id']; 
  $email=$_POST['email'];
  $date=$_POST['date'];
  $nom=$_POST['nom'];
  $telephone=$_POST['telephone'];
  $departement=$_POST['dep'];
  $poste=$_POST['poste'];
 
  $requete="update employes set email=?,dateNaissance=?,nom=?,departement=?,poste=?,telephone=? where idemp=?";
  $params=array($email,$date,$nom,$departement,$poste,$telephone,$id);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);

?>
 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "l'employé modifié avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "employes.php";
             })
         </script>     

     </body></html>

