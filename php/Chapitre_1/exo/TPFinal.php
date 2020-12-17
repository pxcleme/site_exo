<?php
 
   include '../../menu.php';
   session_start();
   @$login=$_POST["login"];
   @$pass=$_POST["pass"];
   @$valider=$_POST["valider"];
   $bonLogin="Julien";
   $bonPass="1234";
   $erreur="";
   if(isset($valider))
   {
      if($login==$bonLogin && $pass==$bonPass)
      {
         $_SESSION["autoriser"]="oui";
         header("location:Session.php");
      }
      else
         $erreur="Mauvais login ou mot de passe!";
   }
?>
<html>
   <head>
      <meta charset="UTF-8" />
      <link rel="stylesheet" href="exo_final.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="../../source_site/css_site_php.css">
   </head>
   <body onLoad="document.fo.login.focus()">
   <?php 

    menu();

    ?>
      <h1>Connection</h1>
      <div class="erreur"><?php echo $erreur ?></div>
      <form name="fo" method="post">
         <input type="text" name="login" placeholder="Login" /><br />
         <input type="password" name="pass" placeholder="Mot de passe" /><br />
         <input type="submit" name="valider" value="S'authentifier" />
      </form>
   </body>
</html>