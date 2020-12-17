<?php include '../menu.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../source_site/icon.jpg"/> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../source_site/css_site_php.css">
    <title>exo 2 </title>
</head>
<body>

    <?php
    menu();
        $tab=array(1,2,3,4,5);

        for($i=0; $i<5; $i++)
        {
            echo $tab[$i]."/";
        }


        //partie de b  de l'exo 2.1 

        echo '<table><tr>';
        for ($i=1; $i<=5; $i++) 
        {
            $NombreAleatoire=rand(0,100);
            echo '<td>'.$NombreAleatoire.'</td>';

        } 

        // partie exo 2.2
        
        $tab[3]=0;
        $Nom[0]="caudron";
        $Prenom[0]="cleme";
        $MDP[0]="MDP";

        echo'<td>'.$Nom[0].'</td>';
        echo'<td>'.$Prenom[0].'</td>';
        echo'<td>'.$MDP[0].'</td>';

    ?>

</body>
</html>