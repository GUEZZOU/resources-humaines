<?php
  require_once("identifier.php");
  require_once("connexiondb.php");

  $id=$_GET['idcand'];
  $requete="select *from candidats where idcand=$id ";
  $resultatR=$pdo->query($requete);
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="hamza dbani">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Profil candidat</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
 
    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!--profile-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">-->
      
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
  <body class="bg-light">
    <?php include('menuRH.php');?>
    <br>
  <div class="container">
       <form class="" id="" name="" method="post" action="envoyeremail.php">
        <?php while($candidats=$resultatR->fetch()){ ?>
     	<div class="row d-flex justify-content-center" style="margin-top:-30px">
            <div class="col-md-10 mt-5 pt-5">
             	<div class="row z-depth-3" >
                 	<div class="col-sm-4 bg-dark rounded-left" style="color:green">
        		        <div class="card-block text-center text-white">
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                    		<h2 class="font-weight-bold mt-4"><?php echo $candidats['prenom'];?>&nbsp;<?php echo $candidats['nom'];?></h2>
                		</div>
            		</div>
            		<div class="col-sm-8 bg-white rounded-right">
                    	<h3 class="mt-3 text-center">Information</h3>
                    	<hr class="bg-primary mt-0 w-25">
                   		<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Email:</p>
                           		<h6 class=" text-muted"><?php echo $candidats['email'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Téléphone:</p>
                           		<h6 class="text-muted"><?php echo $candidats['telephone'];?></h6>
                        	</div>
                    	</div>
                        <div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Date de naissance:</p>
                           		<h6 class=" text-muted"><?php echo $candidats['dateNaissance'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Genre:</p>
                           		<h6 class="text-muted"><?php echo $candidats['genre'];?></h6>
                        	</div>
                    	</div>
                    		<h4 class="mt-3"></h4>
                    		<hr class="bg-primary">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">Niveau d'étude</p>
                          	  	<h6 class="text-muted"><?php echo $candidats['niveau'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Poste</p>
                            	<h6 class="text-muted"><?php echo $candidats['poste'];?></h6>
                        	</div>
                    	</div>
                        <h4 class="mt-3">DOCUMENT ATTACHÉ</h4>
                    		<hr class="bg-primary">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">CV</p>
                          	  <h6 class="text-muted"><?php echo $candidats['cv'];?></h6><a href="telechargementcv.php?id=<?php  echo $candidats['idcand'];?>" ><i class="material-icons" data-toggle="tooltip" title="download">file_download</i></a>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Lettre de Motivation</p>
                                <h6 class="text-muted"><?php echo $candidats['lettre'];?></h6><a href="telechargementlettre.php?id=<?php  echo $candidats['idcand'];?>" ><i class="material-icons" data-toggle="tooltip" title="download">file_download</i></a>
                        	</div>
                    	</div>
                	   	<hr class="bg-primary">
                	    <ul class="list-unstyled d-flex justify-content-center mt-4">
                            <a style="background: #212121;padding: 10px 18px;text-decoration: none;color: #fff;display: inline-block;margin: 30px 0;border-radius: 5px;" href="emailconfirmation.php?id=<?php  echo $candidats['idcand'];?>">Envoyer un email de confirmation</a>
	               		</ul>  
              		</div>
             	</div>
            </div>
        </div>
        <?php }?>
      </form>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
