<?php include '../menu.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../source_site/icon.jpg"/> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../source_site/css_site_php.css">
    <title>exo_4</title>
</head>
<body>
    
    <?php

        menu();

    $a=20;
    $b=5;
    $c=2;
    $delta;
    echo"l'equation est ".$a." x² + ".$b." x + ".$c." ";

    $delta=$b*$b-(4* $a * $c);

    if($delta<0)
    {
        echo"pas de solution";
    }
    if($delta == 0)
    {
        echo "Cette équation a une racine double égale à ".-$b/(2*$a);
    }
    if($delta > 0)
    {
        echo (-$b - sqrt($delta))/(2*$a);
        echo (-$b + sqrt($delta))/(2*$a);
    }

    ?>

</body>
</html>