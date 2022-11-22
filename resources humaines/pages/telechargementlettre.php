<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexiondb.php");

  $id=$_GET['id'];
  $requete="select *from candidats where idcand=$id";
  $resultatR=$pdo->query($requete);
  $candidats=$resultatR->fetch();
    
    $fsize = filesize("../fichier/".$candidats['lettre']);
    $path_parts = pathinfo("../fichier/".$candidats['lettre']);
    $ext = strtolower($path_parts["extension"]);

    switch ($ext) 
    {
      case "pdf": $ctype="application/pdf"; break;
      default: $ctype="application/force-download";
    }

    header("Pragma: public"); 
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false); 
    header("Content-Type: $ctype");
    header("Content-Disposition: attachment; filename=\"".basename("../fichier/".$candidats['lettre'])."\";" );
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: ".$fsize);
    ob_clean();
    flush();
    readfile( "../fichier/".$candidats['lettre'] );

  } 



?>