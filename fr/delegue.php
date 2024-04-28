<?php
include "template/header.php";
include "template/menu.php";
?>

<br><br>
<div class="container">
    <h2>Représentant élu dans des commissions :</h2>
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