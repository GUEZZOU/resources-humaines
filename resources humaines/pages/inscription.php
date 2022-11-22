<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="hamza dbani">
    <meta name="generator" content="Hugo 0.84.0">
    <title>inscription</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    <link rel="stylesheet" href="fichier.css">
    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .inscform{
            background: white;
            width: 55%;
            height: 100%;
            padding: 25px 25px 25px 25px;
            border-radius: 20px;
            margin-left: 300px;
          }
      .container img{
              width: 120px;
              height: 120px;
              margin-top: -30px;
              margin-bottom: 30px;
              margin-right: 100px;
              margin-left: 550px;
          }
          h1{
              text-align: center;
              margin-left: 100px;
          }
          .insc{
           text-align: right;
           margin-top: -30px;
          }
    </style>
 <link href="navbar-top.css" rel="stylesheet">
    
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

  </head>
  <body>
    <?php include('menu.php');?>
    <br>
    <h1>Inscrivez-vous</h1>
    <br> 
    
    <div class="container">
    <img src="../images/undraw_profile_pic_ic5t.svg">
    
  <div class="inscform">
      
     <form class="" id="" name="" enctype="multipart/form-data" method="post" action="ajouteremployes.php">
      <div class="row">
      <div class="form-group col-12"> 
            <label >Photo</label>
            <input type="file" name="photo" class="form-control" id="photo" placeholder="photo">     
         </div>
      </div>  
      <div class="row">
      <div class="form-group col-6"> 
            <label>Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">     
         </div>
         <div class="form-group col-6"> 
             <label>Date de naissance</label>
            <input type="date" name="date" class="form-control" id="date" placeholder="Date de naissance">      
         </div>
      </div>
    <div class="row">
      <div class="form-group col-6">
              <label>Nom d'utilisateur</label>
            <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom d'utilisateur">   
         </div>
     <div class="form-group col-6">
             <label>Téléphone</label>
            <input type="number" name="telephone" class="form-control" id="tel" placeholder="Téléphone">   
         </div>
         </div>
     <div class="row">
      <div class="form-group col-6">
              <label>Département</label>
            <input type="text" name="dep" class="form-control" id="dep" placeholder="Département">   
         </div>
     <div class="form-group col-6">
             <label>Poste</label>
            <input type="text" name="poste" class="form-control" id="poste" placeholder="Poste">   
         </div>
         </div>
     <div class="row">
      <div class="form-group col-6">
              <label>Mot de passe</label>
            <input type="password" name="mt" class="form-control" id="password" placeholder="Mot de passe">   
         </div>
     <div class="form-group col-6">
             <label>Confirmer le mot de passe</label>
            <input type="password" name="confirmer le mot de passe" class="form-control" id="confirmpassword" placeholder="Confirmer le mot de passe">   
         </div>
         </div>
     
    <br>     
    <div class="row">
    <div class="form-group col-6">
    <input type="submit" class="btn btn-success" id="inscrire" name="submit" value="S'inscrire">
    </div>    
    </div>    
     </form> 
  </div>      
  
  </div>

<script>
      document.querySelector('#inscrire').onclick = function(){
          var password = document.querySelector('#password').value,
          confirmpassword = document.querySelector('#confirmpassword').value,
          photo = document.querySelector('#photo').value,
          email = document.querySelector('#email').value,
          date = document.querySelector('#date').value,
          nom = document.querySelector('#nom').value,
          tel = document.querySelector('#tel').value,
          dep = document.querySelector('#dep').value,
          poste = document.querySelector('#poste').value;
         if(password=="" || photo=="" || email=="" || date=="" || nom=="" || tel=="" || dep=="" || poste==""){
             alert("vérifier que vous avez bien remplis tous les champs !");
             return false;
         }
         else if(password !=confirmpassword ){
             alert("le mot de passe ne correspond pas réessayez ! ");
             return false;
         }
         else return true;
      }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
