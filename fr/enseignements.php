<?php
/* PARTIE BASIQUE */

include "template/header.php";
include "template/menu.php";
?>

<br><br>
<div class="container">
    <h2><i class="fas fa-chalkboard-teacher"></i> Enseignements (TPs et TDs)</h2>
    <div class="table-responsive-md">
        <hr>
        <?php
        // Read JSON file
        $json = file_get_contents("../assets/json/fr/cours.json");

        //Decode JSON
        $json_data = json_decode($json, true);

        // Init variables
        $totalNbHeures = 0;

        // Display content
        echo "<div class=\"text-justify\">\n";
        echo "\t\t\t<ul>\n";
        foreach ($json_data as $key => $value) {
            // Init variables
            $nbHeures = 0;

            // Display HTML
            echo "\t\t\t\t<li><strong>" . $key . " - " . (((int)$key) + 1) . "</strong> : ";
            foreach ($value as $keyArray => $valuesArray) {
                $nbHeures += (int)$valuesArray['nbHeures'];
            }
            $totalNbHeures += $nbHeures;
            echo $nbHeures . "h\n";

            echo "\t\t\t\t\t<ul>\n";
            foreach ($value as $keyArray => $valuesArray) {
                echo "\t\t\t\t\t\t<li>" . $valuesArray['annee'] . " : " . $valuesArray['idName'] . " - " . $valuesArray['name'] . " - " . $valuesArray['nbHeures'] . "h</li>\n";
            }
            echo "\t\t\t\t\t</ul>\n\t\t\t\t</li>\n";
        }
        echo "\t\t\t</ul>\n";
        echo "\t\t</div>\n";
        echo "\t\t<hr>";
        echo "\t\t<div class=\"text-center\">\n\t\t\t<strong>TOTAL</strong> : " . $totalNbHeures . "h TP\n\t\t</div>\n"
        ?>
    </div>
    <br><br><br>
</div>

<br><br>
<div class="container">
    <h2><i class="fas fa-vote-yea"></i> Représentant universitaire :</h2>
    <div class="table-responsive-md">
        <hr>
        <?php
        // Read JSON file
        $json = file_get_contents("../assets/json/fr/delegue.json");

        //Decode JSON
        $json_data = json_decode($json, true);

        // Init variables

        // Display content
        echo "<div class=\"text-justify\">\n";
        echo "\t\t\t<ul>\n";
        foreach ($json_data as $key => $value) {
            // Init variables

            // Display HTML
            echo "\t\t\t\t<li><strong>" . $key . "</strong> : ";
            echo "\t\t\t\t\t<ul>\n";
            foreach ($value as $keyArray => $valuesArray) {
                echo "\t\t\t\t\t\t<li>" . $valuesArray['name'] . " : " . $valuesArray['periode'] . "</li>\n";
            }
            echo "\t\t\t\t\t</ul>\n\t\t\t\t</li>\n";
        }
        echo "\t\t\t</ul>\n";
        echo "\t\t</div>\n";
        ?>
        <br><br><br><br><br><br>
    </div>
</div>

<?php
$dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>