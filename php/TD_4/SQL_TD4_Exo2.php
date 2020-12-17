<?php include '../menu.php' ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../source_site/css_site_php.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>exo_1</title>
    </head>

    <body>

        <?php
         menu();

            $Base = new PDO('mysql:host=192.168.64.175;dbname=TD2-Caudron_exo2', 'user', 'user');
            $donnée = $Base->query("SELECT * FROM `medecin` WHERE 1");
            $Tableau=$donnée;
            ?>

            <table>

                <tr>
                    <td>nom</td>
                    <td>prenom</td>
                    <td>id-medecin</td> 

                </tr>
            </table>

            <?php
            
                while($Tableau = $donnée->fetch())
                {
                    echo $Tableau["id-medecin"]." ".$Tableau["nom"]." ".$Tableau["prenom"]." ";
                }
            ?>

    </body>
</html>