<?php
   //avec l'objet pdo en peut se connecter a n'importe quel type de base de données (mysql,sqlserver...)
   //pour créer un nouveau objet de la classe pdo il faut spécifier le serveur, la base de données,le nom d'utilistaeur et le mot de passe
   try{
       $pdo= new PDO ("mysql:host=localhost;dbname=resources_humaines","root","");
   }catch(Exception $e){
       die('Erreur de connexion :'.$e->getMessage());
   }
   
?>