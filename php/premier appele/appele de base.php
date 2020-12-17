<?php
try
{

    $Base = new PDO('mysql:host=192.168.64.175;dbname=TD2-Caudron_exo2', 'user', 'user');
    echo"tu est dedans ";

    $Resultat = $Base->query('SELECT * FROM `medecin`');
    echo "j'ai fait une requête de ".$Resultat->rowCount()." ligne <br>";
    
    while($Tableau = $Resultat->fetch()){
        echo $Tableau["id-medecin"]." ".$Tableau["nom"]." ".$Tableau["prenom"]." ";
    };



}catch(Exception $e)
{

    echo "Ereur de connexion : ".$e->getMessage();

}
?>

<form action="" methode="post">
    <label for="name">nom</label>
    <input type="text" name="nom" id="nom">


    <label for="password">mot de passe</label>
    <input type="text" name="Password" id="Password">

    <input type="submit"value="submit">

</form>
<?php

try
{
    if(isset($_POST['submit']))
    {
        echo"coucou";
       
       $Resultat = $Base->query("SELECT * FROM `medecin` WHERE `nom`='".$_POST['nom']."' AND `Password` = '".$_POST['Password']."'");

       if($Resultat->rowCount()>=1){
           echo "tu es connecté  !!";
       }else{
           echo " pas le bon  mot de passe ";
       }; 
    }

}catch(Exception $e)
{
    echo"erreur" .$e->getMessage();
}
?>