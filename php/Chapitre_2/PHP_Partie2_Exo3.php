<?php include '../menu.php' ?>
<?php session_start();


    menu();

function tableau($note1,$note2,$note3)
{
    

    ?><table border=2px>
            <tr>
                <td><?php echo $note1;?></td>
            </tr>
            <tr>
                <td><?php echo $note2;?></td>
            </tr>
            <tr>
                <td><?php echo $note3;?></td>
            </tr>
        </table>
    <?php
}

function moy($note1,$note2,$note3)
{
    $moy=($note1+$note2+$note3)/3;
    echo "La moyenne est de ".$moy;
    return $moy;
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
        <title>exo 3</title>
    </head>

    <div>
        <h1>Exercice 3</h1>

        <?php
            tableau(14, 15, 16);
        ?>
        <?php
            moy(14, 15, 16);
        ?>
    </div>

</html>