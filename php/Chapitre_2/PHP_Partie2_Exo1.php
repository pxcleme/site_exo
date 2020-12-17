<?php include '../menu.php' ?>
<?php session_start();

    menu();

function tableau()
{
    echo "
    <table border>
        <tr>
            <td>Bonjour je suis un tableau</td>
        </tr>
    </table>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../source_site/css_site_php.css">
    <title>exo_1</title>
</head>

<body>

    <div>
        <?php tableau(); ?>
    </div>

    <div class="basdepag">
        <?php tableau(); ?>
    </div>

</body>
</html>