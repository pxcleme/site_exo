<?php
   session_start();
   if($_SESSION["autoriser"]!="oui")
   {
      header("location:TPFinal.php");
      exit();
   }
   $bienvenue="Bonjour et bienvenue sur le site";
  
?>
<html>
   <head>
      <meta charset="UTF-8" />
      <link rel="stylesheet" href="exo_final.css">
   </head>
   <body onLoad="document.fo.login.focus()">
      <h1><?php echo $bienvenue?></h1>
      [ <a href="Deconnexion.php">Se déconnecter</a> ]
   </body>
</html>