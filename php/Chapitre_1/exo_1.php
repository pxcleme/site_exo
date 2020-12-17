<?php include '../menu.php' ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="css_exo1.css"/>
        <link rel="stylesheet" href="../source_site/css_site_php.css">
        <link rel="icon" type="image/x-icon" href="../source_site/icon.jpg"/> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>exo 1</title>
    </head>

    <body>

        <?php
        menu();
        
            $NombreAleatoire = rand(0,100);

                if($NombreAleatoire%2 == 1)
                {
                    echo '<div class=blue>'.$NombreAleatoire.' est impaire</div>';
                    
                }else
                {
                    echo '<div class=red>'.$NombreAleatoire.' est paire</div>';
                }

        ?>
    </body>
</html>