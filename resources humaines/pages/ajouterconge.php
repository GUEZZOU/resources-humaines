<?php
  require_once("identifier.php");
  require_once("connexiondb.php");
  $dateC=$_POST['datecreation'];
  $datedebut=$_POST['debutdeconge'];
  $datefin=$_POST['findeconge'];
  $typeconge=$_POST['type'];
  $nom=$_SESSION['user']['nom'];
  $id=$_SESSION['user']['idemp'];
  $periode= round((strtotime($datefin) - strtotime($datedebut))/(60*60*24));
  $requete="INSERT INTO congesdemandes (idconge,datecreation,periode,datedebut,datefin,typeconge,nom,idemp) VALUES (NULL,'$dateC','$periode','$datedebut','$datefin','$typeconge','$nom',$id)";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();

?>
 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "damande envoyé !",
          text: "votre demande sera examiné le plutôt possible!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "profilEmployes.php";
             })
         </script>     

     </body></html>