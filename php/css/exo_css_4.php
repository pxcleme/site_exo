<?php include '../menu.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../source_site/css_site_php.css">
    <link rel="icon" type="image/x-icon" href="../source_site/icon.jpg"/> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="exo_css_4.css">
    <title>exo 4</title>

</head>
<body>
    
    <?php
        menu();
    ?>

    <div class="bandeau">
        <center>top</center> <!--bandeau en haut-->
    </div> 

    <div class="middle"><center>middle</center> <!--bandeau au milieu-->
        <div class="gauche_haut">
        <center>gauche</center> <!--bandeau a gauche haut-->
        
        <div class="droite">
            <center>droite</center>
        </div>
    </div> 

    <div class="gauche_bas">
        <center>gauche_bas</center>
    </div>
        
    </div>

    <div class="pieds_page"> 
        <center>sol</center> <!--bandeau en bas-->
    </div>
</body>
</html>