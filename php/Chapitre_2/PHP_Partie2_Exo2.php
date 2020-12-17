<?php include '../menu.php' ?>
<?php session_start();

    menu();

function tableaucol()
{
    
    $tableau=array("nom"=> "Caudron", "prenom" => "Clement", "mdp" => "123");
    
    echo "<table border><tr><td>".$tableau["nom"]."</td></tr><tr><td>".$tableau["prenom"]."</td></tr><tr><td>".$tableau["mdp"]."</td></tr></table>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../source_site/css_site_php.css">
    <link rel="stylesheet" href="CSS\styles.css">
    <title>exo_2</title>
</head>

<body>
    <div><?php tableaucol(); ?></div>
</body>

</html>