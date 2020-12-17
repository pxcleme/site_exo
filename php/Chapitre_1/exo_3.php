<?php include '../menu.php' ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../source_site/icon.jpg"/> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../source_site/css_site_php.css"> 
        <title>exo_3</title>
    </head>

    <body>

        <div>
            <table>
                <tr>
                    <?php
                    
                    menu();

                        $tab[0]=array('Nom' => 'Cauet', 'Prénom' => 'Clément', 'Mdp' => '123');
                        $tab[1]=array('Nom' => 'Caudron', 'Prénom' => 'Clément', 'Mdp' => '456');
                        $tab[2]=array('Nom' => 'Colson', 'Prénom' => 'Baptiste', 'Mdp' => '789');

                        for ($i = 0; $i < 3; $i++) 
                        {
                            echo "<tr>";
                            foreach ($tab[$i] as $value) 
                            {
                                echo "<td>";
                                echo $value;
                                echo "</td>";
                            }
                            echo "</tr>";
                        } 
                    ?>
                </tr>
            </table>
        </div>

    </body>
</html>