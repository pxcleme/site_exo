<?php include '../menu.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../source_site/css_site_php.css">
        <link rel="icon" type="image/x-icon" href="../source_site/icon.jpg"/> 
        <title>Exercice 6</title>
    </head>
    <body>

    <?php 

    menu();

    ?>
    
        <form  action="" method="get">

            <p>Votre texte :</p><input type="text" name="name" size="12" />
        
            <input type="submit" value="Valider" />
        </form>

        <?php 
        
            
            if(isset($_GET["name"]))
            {
                echo"Ma nom est :".$_GET["name"];
            }else
            {
                echo "Formulaire non saisie";
            }  
        ?>
    </body>
</html>