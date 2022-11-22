<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexiondb.php");


    if (isset($_GET['idemp']))
        
        $id = $_GET['idemp'];
    
    else
        
        $id = "";

    $requete1 = "select * from employes where idemp='$id'";
    
    $resultat1 = $pdo->query($requete1);

    if ($employes = $resultat1->fetch()) {
        $email = $employes['email'];
        
        $to = $employes['email'];
        
        $subject = "REPONSE SUR LA DEMANDE DE CONGE ";
        
        $txt = "Votre demande de congé a été acceptée.";
        
        $headers = "From: RHPLUS" . "\r\n" . "CC: rhplusentreprise@gmail.com";
        
        mail($to, $subject, $txt, $headers);
    }
        
      
  $requete="insert into conges SELECT '',datecreation,periode,datedebut,datefin,typeconge,nom,idemp FROM congesdemandes WHERE idemp=$id";
  $requete2="delete from congesdemandes where idemp=$id";
  $resultat=$pdo->prepare($requete);
  $resultat2=$pdo->prepare($requete2);
  $resultat->execute();
  $resultat2->execute();
  }
?>
<html>
     <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "Un message a été envoyé à l'employé!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "congesdemandes.php";
             })
         </script>     
     </body></html>
