<?php include '../menu.php' ?>
<?php session_start();?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../source_site/css_site_php.css">
        <link rel="icon" type="image/x-icon" href="../source_site/icon.jpg"/> 
        <title>Exercice 7</title>
    </head>
    <body>

    <?php 

    menu();

    ?>
        <form  action="" method="POST">

            <label><p>la session :</p><input type="text" name="name"></label>
        
            <input type="submit" value="Valider" />
        </form>

        <?php


            if (isset ($_POST["name"]))
            {
            $_SESSION["Session"] = $_POST["name"] ;
            echo "User : ".$_POST["name"];   
            }
        ?>
    
    </body>  
</html>