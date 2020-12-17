<?php
function menu()
{
    
    ?>
    <!-- debut du menu-->
    <nav>
           
        <ul>  
            <li><a href="">HTML</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="html/exo_html.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="html/exo_html_2.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="html/exo_html_3.php">exo_3</a></li>
                <li><a onclick="menu(this);" data-href="html/formulaire.php">formulaire</a></li>
                <li><a onclick="menu(this);" data-href="html/index_html.php">index_html</a></li>
            </ul>

            <li><a href="">CSS</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="css/exo_css_1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="css/exo_css_2.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="css/exo_css_3.php">exo_3</a></li>
                <li><a onclick="menu(this);" data-href="css/exo_css_4.php">exo_4</a></li>
            </ul>

            <li><a href="">Chapitre 1</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="Chapitre_1/exo_1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="Chapitre_1/exo_2.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="Chapitre_1/exo_3.php">exo_3</a></li>
                <li><a onclick="menu(this);" data-href="Chapitre_1/exo_4.php">exo_4</a></li>
                <li><a onclick="menu(this);" data-href="Chapitre_1/exo_5.php">exo_5</a></li>
                <li><a onclick="menu(this);" data-href="Chapitre_1/exo_6.php">exo_6</a></li>
                <li><a onclick="menu(this);" data-href="Chapitre_1/exo_7.php">exo_7</a></li>
                <li><a onclick="menu(this);" data-href="Chapitre_1/exo_8.php">exo_8</a></li>
                <li><a onclick="menu(this);" data-href="Chapitre_1/exo/TPFinal.php">exo_final</a></li>
            </ul>

            <li><a href="">Chapitre 2</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="Chapitre_2/PHP_Partie2_Exo1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="Chapitre_2/PHP_Partie2_Exo2.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="Chapitre_2/PHP_Partie2_Exo3.php">exo_3</a></li>
                <li><a onclick="menu(this);" data-href="Chapitre_2/PHP_Partie2_ExoFinal.php">exo_final</a></li>
            </ul>

            <li><a href="">BDD_TD1</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="BDD_TD1/BDD_TD1_Exo_global.php">exo_global</a></li>
            </ul>

            <li><a href="">BDD_TD2</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="BDD_TD2/BDD_TD2_Exo1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="BDD_TD2/BDD_TD2_Exo2.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="BDD_TD2/BDD_TD2_Exo3.php">exo_3</a></li>
            </ul>

            <li><a href="">BDD_TD3</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="BDD_TD3/BDD_TD3_Exo2.php">exo_2</a></li>
            </ul>

            <li><a href="">TD_4_BDD</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="TD_4/SQL_TD4_Exo1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="TD_4/SQL_TD4_Exo2.php">exo_2</a></li>
            </ul>
            <li style="float:right"><a class="active" href="../index.php">retour_accueil</a></li>
        </ul>
    </nav>

    <!-- fin du menu-->

    <script type="text/javascript">

function menu(identifier){
      const origine = "php",
            current = window.location.href.split("/");

      current.splice (
            current.indexOf(origine)+1,
            current.length
      )

      window.location.assign(
            current.join("/") +"/"+ identifier.dataset.href
      );
      
}

</script>

    <?php
}
?>