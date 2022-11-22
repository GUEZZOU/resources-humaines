<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="hamza dbani">
    <meta name="generator" content="Hugo 0.84.0">
    <title>La page de candidature</title>

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
    <h1 >Formulaire de candidature</h1>
    <br> 
  <div class="container">
    
  <div class="myform">
      
     <form class="" id="" name="" method="post"  enctype="multipart/form-data" action="ajoutercandidature.php">
         
     <div class="row">
         
         <div class="form-group col-6"> 
            <label>Prénom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom">     
         </div>
         <div class="form-group col-6"> 
           <label>Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom">     
         </div>
     </div>
     <div class="row">
         <div class="form-group col-6">
             <label>Date de naissance</label>
            <input type="date" name="date" id="date" class="form-control" placeholder="Date de naissance">   
         </div>
         <div class="form-group col-6">
             <label>Genre</label>
            <select name="genre" class="form-control">
            <option>Femme</option>
             <option>Homme</option> 
            </select>   
         </div>
     </div>
         
      <div class="row">
      <div class="form-group col-6">
             <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">   
         </div>
     <div class="form-group col-6">
             <label>Téléphone</label>
            <input type="number" name="telephone" id="tel" class="form-control" placeholder="Téléphone">   
         </div>
      </div>
    <div class="row">
      <div class="form-group col-6">
             <label>Poste</label>
            <input type="text" name="poste" id="poste" class="form-control" placeholder="Poste">   
         </div>
     <div class="form-group col-6">
             <label>Niveau</label>
            <input type="text" name="niveau" id="niveau" class="form-control" placeholder="Niveau d'étude">   
         </div>
      </div>
     <div class="row">
      <div class="form-group col-6">
            <label for="file">CV</label>
            <input type="file" name="cv" id="cv" class="form-control" placeholder="CV">   
         </div>
     <div class="form-group col-6">
             <label for="file">Lettre De Motivation</label>
            <input type="file" name="lettre" id="lettre" class="form-control" placeholder="Lettre De Motivation">   
         </div>
      </div>
    <br>     
    <div class="row">
    <div class="form-group col-6">
    <input type="submit" id="soumettre" class="btn btn-success" value="soumettre">
    </div>    
    </div>    
         
     </form> 
  </div>      
  
  </div>

      



