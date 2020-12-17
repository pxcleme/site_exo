<?php include '../menu.php' ?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../source_site/css_site_php.css">
        <link rel="icon" type="image/x-icon" href="../source_site/icon.jpg"/> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>formulaire</title>
    </head>

    <body>

        <?php
            menu();
        ?>
            <form action="">  <!-- balise formulaire -->
                <div>
                    <label>
                        <p>civilité
                            <input type="radio"id="button" name="button" value="homme"> homme 
                            <input type="radio"id="button" name="button" value="femme"> femme
                        </p>
                    </label>
                </div>

                <!-- texte box-->
                <div>
                    <label for="name">nom : </label>
                    <input type="text" id="name">
                </div>

                <div>
                    <label for="subname">prenom : </label>
                    <input type="text" id="subname">
                </div>

                <label for="année">jour</label>
                <select name="mois" id="mois">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                </select>
                <select name="mois" id="mois">
                    <option>Mois</option>
                    <option>Janvier</option>
                    <option>Fevrier</option>
                    <option>Mars</option>
                    <option>Avril</option>
                    <option>Mai</option>
                    <option>Juin</option>
                    <option>Juillet</option>
                    <option>Aout</option>
                    <option>Septembre</option>
                    <option>Octobre</option>
                    <option>Novembre</option>
                    <option>Decembre</option>
                </select>
                <select name="année" id="année">
                    <option>Année</option>
                    <option>2003</option>
                    <option>2002</option>
                    <option>2001</option>   
                    <option>2000</option>
                    <option>1999</option>
                    <option>1998</option>
                    <option>1997</option>
                    <option>1996</option>
                    <option>1995</option>
                    <option>1994</option>
                    <option>1993</option>
                    <option>1992</option>
                    <option>1991</option>
                    <option>1990</option>
                    <option>1989</option>
                    <option>1988</option>
                    <option>1987</option>
                    <option>1986</option>
                    <option>1985</option>
                    <option>1984</option>
                </select>
                <div>
                    <label for="numero">numero
                        <input type="text"id="numero">
                    </label>
                    <label for="rue">rue : </label>
                    <input type="text" id="rue">
                </div>
                <p>address</p>
                <input type="month">
            </form>   <!-- fin du formulaire-->
    </body>
</html>