<?php
    require_once ('connexiondb.php');
    
    if (isset($_POST['email']))
        
        $email = $_POST['email'];
    
    else
        
        $email = "";

    $requete1 = "select * from employes where email='$email'";
    
    $resultat1 = $pdo->query($requete1);

    if ($employes = $resultat1->fetch()) {
        $id = $employes['idemp'];
        $mt = "0000";
        $requete = "update employes set motdepasse=? where idemp=?";
        $param = array($mt,$id);
        $resultat = $pdo->prepare($requete);
        $resultat->execute($param);

        $to = $employes['email'];
        
        $subject = "INITIALISATION DE MOT DE PASSE ";
        
        $txt = "Votre nouveau mot de passe est :$mt";
        
        $headers = "From: RHPLUS" . "\r\n" . "CC: rhplusentreprise@gmail.com";
        
        mail($to, $subject, $txt, $headers);?>
         <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "  Un message contenant votre nouveau mot de passe a été envoyé sur votre adresse Email !",
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
          text: "L'Email est incorrecte!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "motDepasseoublie.php";
             })
         </script>     

     </body></html>
 <?php } 

?>